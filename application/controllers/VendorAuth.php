<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VendorAuth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model'); // Replace with your user model
        $this->load->library('form_validation');
    }

    public function login()
    {
        $data['vendor_data'] = array(
            'logged_in' => 0
        );
        $this->load->view('vendor/login', $data);
    }


    public function login_auth()
    {
        // Form validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // $data['validation_errors'] = validation_errors(); // Get the validation errors
            $data['vendor_data'] = array(
                'logged_in' => 0
            );
            $this->load->view('vendor/login', $data); // Pass the errors to the view
        } else {
            // Validation passed, attempt to authenticate user
            // Validation passed, attempt to authenticate user
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Check user credentials against the database (replace with your authentication logic)
            $query = $this->db->get_where('vendor', array('VendorUserID' => $username));
            $vendor = $query->row_array();
            if ($vendor['status'] == 0) {
                
            if ($vendor && password_verify($password, $vendor['VendorPassword'])) {
                // Authentication successful, create a session
                $vendor_data = array(
                    'vendor_id' => $vendor['ID'],
                    'username' => $vendor['VendorUserID'],
                    'logged_in' => TRUE
                );

                $this->session->set_userdata('vendor_data', $vendor_data);

                // Redirect to the dashboard or home page
                redirect(base_url('Vendor/index'));
            } else {
                // Authentication failed, redirect back to the login page with an error message
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect(base_url('VendorAuth/login'));
            }
            }else{
                  // Authentication failed, redirect back to the login page with an error message
                  $this->session->set_flashdata('error', 'Your ID is Blocked by Super Admin');
                  redirect(base_url('VendorAuth/login'));
            }
        }
    }



    public function logout()
    {
        // Clear user data from session and redirect to login page
        $this->session->unset_userdata('admin_data');
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Your Session End Successfully');
        redirect('VendorAuth/login');
    }
}
