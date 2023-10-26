<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model'); // Replace with your user model
        $this->load->library('form_validation');
    }

    public function login()
    {
        $data['user_data'] = array(
            'logged_in' => 0
        );
        $this->load->view('main/login', $data);
    }

    public function register()
    {
        $data['user_data'] = array(
            'logged_in' => 0
        );
        $this->load->view('main/register', $data);
    }

    public function userlogin_auth()
    {
        $this->load->library('form_validation');
        // Form validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Validation failed, redisplay login form with errors
    
            // You can store the validation errors in an array to pass to your view
            $data['validation_errors'] = validation_errors();
    
            $data['user_data'] = array(
                'logged_in' => 0
            );
            $this->load->view('main/login', $data); // Load your login view and pass the validation errors
        } else {
            // Validation passed, attempt to authenticate user
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            // Check user credentials against the database (replace with your authentication logic)
            $query = $this->db->get_where('users', array('UserID' => $username));
            $user = $query->row_array();
    
            if ($user && password_verify($password, $user['UserPassword'])) {
                // Authentication successful, create a session
                $user_data = array(
                    'user_id' => $user['ID'],
                    'username' => $user['UserID'],
                    'logged_in' => TRUE
                );
    
                $this->session->set_userdata('user_data', $user_data);
    
                // Redirect to the dashboard or home page
                redirect(base_url('User/index'));
            } else {
                // Authentication failed, redirect back to the login page with an error message
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect(base_url('login'));
            }
        }
    }
    
    


    public function register_process()
    {
        // Ensure this is an AJAX request
        if (!$this->input->is_ajax_request()) {
            show_404(); // Return a 404 error if it's not an AJAX request
        }
    
        // Form validation rules
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('mobileNumber', 'Mobile Number', 'required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('emailID', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('userID', 'User ID', 'required|is_unique[users.UserID]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]');
    
        // Check if form validation passes
        if ($this->form_validation->run() == FALSE) {
            $response = array(
                'success' => false,
                'message' => validation_errors()
            );
        } else {
            // Registration logic (replace with your actual registration process)
            $data = array(
                'UserFirstName' => $this->input->post('firstName'),
                'UserLastName' => $this->input->post('lastName'),
                'UserMobile' => $this->input->post('mobileNumber'),
                'UserEmail' => $this->input->post('emailID'),
                'UserID' => $this->input->post('userID'),
                'UserPassword' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );
    
            // Call your user model's registration method
            try {
                $result = $this->db->insert('users', $data);
    
                if ($result) {
                    
                    $response = array(
                        'success' => true,
                        'message' => 'Registration successful'
                    );
                   
                } else {
                    $response = array(
                        'success' => false,
                        'message' => 'Registration failed'
                    );
                }
            } catch (Exception $e) {
                // Handle database insertion errors here
                $response = array(
                    'success' => false,
                    'message' => 'Registration failed: ' . $e->getMessage()
                );
            }
        }
    
        // Send JSON response back to the client
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
    
    public function forgotpassword()
    {
        $data['user_data'] = array(
            'logged_in' => 0
        );
        $this->load->view('main/forgotpassword', $data);
    }

    public function forgotPassowrdProcess()
    {
        $username = $this->input->post('username');

        $query = $this->db->get_where('users', array('UserID' => $username));
        $user = $query->result_array();

        if (!empty($user)) {
            $to = $user[0]['UserEmail'];
            $fullname = $user[0]['UserFirstName'] . ' ' . $user[0]['UserFirstName'];

            $verificationCode = rand(100000, 999999);

            $messageBody = '<!DOCTYPE html>
                <html>
                
                <body>
                    <p><strong>Subject: Password Reset Verification Code</strong></p>
                    <p>Hello, <b> ' . $fullname . ' <b/> </p>

                    <p>You\'ve requested a password reset. Please use the following 6-digit verification code to reset your password:</p>

                    <p><strong>Verification Code:</strong> ' . $verificationCode . ' </p>

                    <p>If you didn\'t make this request, please disregard this email.</p>

                    <p>Best regards,<br>
                    Snowy Glow</p>
                </body>
                </html>';

            $this->load->helper('php_mailer_helper');
            if (sendEmail($to, "Forgot Passowrd", $messageBody, '', '', 'noreply@snowyglow.com', 'Snowy Glow Website')) {
                $response = array(
                    'success' => true,
                    'otp' => $verificationCode,
                    'message' => 'Vertification Code Sent on you Registerd Email id '
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'EMail Not Sent'
                );
            }
            $response = array(
                'success' => true,
                'otp' => $verificationCode,
                'message' => 'Vertification Code Sent on you Registerd Email id '
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Please Enter Valid Username'
            );
        }
        // Send JSON response back to the client
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
    function generateRandomPassword($length = 5)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[]|\/<>?';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $randomChar = $chars[rand(0, strlen($chars) - 1)];
            $password .= $randomChar;
        }

        return $password;
    }

    public function SendPassword()
    {
        $username = $this->input->post('username');

        $query = $this->db->get_where('users', array('UserID' => $username));
        $user = $query->result_array();
        $password = $this->generateRandomPassword(5);
        if (!empty($user)) {
            $data = array(
                'UserPassword' => password_hash($password, PASSWORD_DEFAULT) // Hash the password for security
            );

            $this->db->where('UserID', $username);
            $this->db->update('users', $data);

            $to = $user[0]['UserEmail'];
            $fullname = $user[0]['UserFirstName'] . ' ' . $user[0]['UserFirstName'];

            $messageBody = '<!DOCTYPE html>
<html>

<body>
    <p><strong>Subject: Password Reset Successful</strong></p>
    <p>Hello, <b>' . $fullname . '</b></p>

    <p>Your password has been successfully reset. Here is your new password:</p>

    <p><strong>New Password:</strong> ' . $password . '</p>

    <p>You can now use your new password to log in. Click the button below to go to the login page:</p>

    <a href="https://example.com/login" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Login</a>

    <p>If you didn\'t make this request, please disregard this email.</p>

    <p>Best regards,<br>
    Snowy Glow</p>
</body>
</html>';

            $this->load->helper('php_mailer_helper');
            if (sendEmail($to, "Forgot Passowrd", $messageBody, '', '', 'noreply@snowyglow.com', 'Snowy Glow Website')) {
                $response = array(
                    'success' => true,

                    'message' => 'Email Sent'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'EMail Not Sent'
                );
            }
        } else {
            $response = array(
                'success' => false,
                'message' => 'Something is wrong pls try again later'
            );
        }

        // Send JSON response back to the client
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}
