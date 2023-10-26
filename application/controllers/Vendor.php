<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session'); // Load the Session library
        $vendor_data = $this->session->userdata('vendor_data');
        if (empty($vendor_data)) {
            // Destroy the session
            $this->session->unset_userdata('vendor_data');

            // Set flash data and redirect to the login page
            $this->session->set_flashdata('msg', 'Your Login Expired');
            redirect(base_url() . 'VendorAuth/login');
        }
    }

	public function index()
	{
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;
		 
		$this->db->where('ID',$vendor_data['vendor_id']);
        $query = $this->db->get('vendor');
        $data['vendor_info'] = $query->result_array();
 

		$this->load->view('vendor/index', $data);
	}

	public function createCategory()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;
		
        $this->load->view('vendor/createCategory',$data);
    }

    public function UploadCategories()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;
		
        $this->load->view('vendor/uploadCategories',$data);
    }

    

    public function createProducts()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;

        $query = $this->db->distinct()
            ->select('CategoryName')
            ->get('productcategories');

        $data['categories'] = $query->result_array();


        $this->load->view('vendor/createProducts', $data);
    }

    public function UploadProducts()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;
		
        $this->load->view('vendor/uploadProducts',$data);
    }

    public function productPrice()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;

        $query = $this->db->get('products');
        $data['products'] = $query->result_array();


        $this->load->view('vendor/productPrice', $data);
    }

    public function uploadProductsImages()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;

        $query = $this->db->get('products');
        $data['products'] = $query->result_array();

        $this->load->view('vendor/uploadProductImages', $data);
    }

    public function createPromoCode()
    {
		$vendor_data = $this->session->userdata('vendor_data');
		$data['vendor_data'] = $vendor_data;

        $vendor_data = $this->session->userdata('vendor_data');
        $data['vendor_data'] = $vendor_data;

        $this->load->view('vendor/createPromoCode', $data);
    }


    public function productList()
    {
        $vendor_data = $this->session->userdata('vendor_data');
        $data['vendor_data'] = $vendor_data;
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productprice', 'products.ProductID = productprice.ProductID', 'inner');
        $this->db->join('productcategories', 'products.ProductCategoryID = productcategories.CategoryID', 'inner');
        $query = $this->db->get();
        $data['products'] = $query->result_array();
        $this->load->view('vendor/productList', $data);
    }

}
