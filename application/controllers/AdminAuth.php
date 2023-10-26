<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAuth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('user_model'); // Replace with your user model
        $this->load->library('form_validation');
    }

    public function login()
	{
        $data['user_data'] = array(
            'logged_in' => 0
        );
		$this->load->view('admin/login',$data);
	}
 

    public function login_auth() {
        // Form validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Validation failed, redisplay login form with errors
            $this->load->view('admin/login');
        } else {
            // Validation passed, attempt to authenticate user
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            // Check user credentials against the database (replace with your authentication logic)
            $query = $this->db->get_where('admin', array('username' => $username));
            $admin = $query->row_array();
    
            if ($admin) {
                // Authentication successful, create a session
                $admin_data = array(
                    'admin_id' => $admin['sr'],
                    'username' => $admin['username'],
                    'logged_in' => TRUE
                );
               
    
                $this->session->set_userdata('admin_data', $admin_data);
    
                // Redirect to the dashboard or home page
                redirect(base_url('Admin/index'));
            } else {
                // Authentication failed, redirect back to the login page with an error message
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect(base_url('AdminAuth/login'));
            }
        }
    }
    

    public function register_process() {
        // Ensure this is an AJAX request
        if (!$this->input->is_ajax_request()) {
            show_404(); // Return a 404 error if it's not an AJAX request
        }

        // Form validation rules
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('mobileNumber', 'Mobile Number', 'required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('emailID', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('userID', 'User ID', 'required');
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
            $result = $this->db->insert('users',$data);

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
        }

        // Send JSON response back to the client
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }   


    public function logout() {
        // Clear user data from session and redirect to login page
        $this->session->unset_userdata('admin_data');
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Your Session End Successfully');
        redirect('AdminAuth/login');
     }

    
}
