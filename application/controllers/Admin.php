<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session'); // Load the Session library
        $admin_data = $this->session->userdata('admin_data');
        
        if (empty($admin_data)) {
            // Destroy the session
            $this->session->unset_userdata('admin_data');

            // Set flash data and redirect to the login page
            $this->session->set_flashdata('msg', 'Your Login Expired');
            redirect(base_url() . 'AdminAuth/login');
        }
    }

    public function index()
    {
        $admin_data = $this->session->userdata('admin_data');
        $data['admin_data'] = $admin_data;
        $this->db->where('sr', $admin_data['admin_id']);
        $query = $this->db->get('admin');
        $data['admin_info'] = $query->result_array();
        $this->load->view('admin/index', $data);
    }

    public function createVendor()
    {

        $admin_data = $this->session->userdata('admin_data');
        $data['admin_data'] = $admin_data;
        $this->load->view('admin/createVendor', $data);
        
    }

    public function vendorList()
    {
        $admin_data = $this->session->userdata('admin_data');
        $data['admin_data'] = $admin_data;

        $query = $this->db->get('vendor');
        $data['vendorList'] = $query->result_array();

        $this->load->view('admin/vendorList', $data);
    }

    public function users()
    {
        // $admin_data = $this->session->userdata('admin_data');
        $query = $this->db->get('users');
        $data['users'] = $query->result_array();

        $this->load->view('admin/users', $data);
    }


    public function createCategory()
    {
        // $admin_data = $this->session->userdata('admin_data');


        $this->load->view('admin/createCategory');
    }

    public function createProducts()
    {
        // $admin_data = $this->session->userdata('admin_data');
        $query = $this->db->distinct()
            ->select('CategoryName')
            ->get('productcategories');

        $data['categories'] = $query->result_array();


        $this->load->view('admin/createProducts', $data);
    }

    public function productPrice()
    {
        $query = $this->db->get('products');
        $data['products'] = $query->result_array();


        $this->load->view('admin/productPrice', $data);
    }

    public function uploadProductsImages()
    {
        // $admin_data = $this->session->userdata('admin_data');
        $query = $this->db->get('products');
        $data['products'] = $query->result_array();

        $this->load->view('admin/uploadProductImages', $data);
    }

    public function createPromoCode()
    {
        $admin_data = $this->session->userdata('admin_data');
        $data['admin_data'] = $admin_data;

        $this->load->view('admin/createPromoCode', $data);
    }


    public function productList()
    {
        $admin_data = $this->session->userdata('admin_data');
        $data['admin_data'] = $admin_data;
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productprice', 'products.ProductID = productprice.ProductID', 'inner');
        $this->db->join('productcategories', 'products.ProductCategoryID = productcategories.CategoryID', 'inner');
        $query = $this->db->get();
        $data['products'] = $query->result_array();
        $this->load->view('admin/productList', $data);
    }

    public function trendingBestSales()
    {
        $admin_data = $this->session->userdata('admin_data');
        $data['admin_data'] = $admin_data;
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories', 'products.ProductCategoryID = productcategories.CategoryID', 'inner');
        $query = $this->db->get();
        $data['products'] = $query->result_array();
        $this->load->view('admin/trendingBestSales', $data);
    }
}
