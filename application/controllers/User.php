<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session'); // Load the Session library
    }

    public function index()
    {
        $user_data = $this->session->userdata('user_data');

        $products = $this->db->get('products')->result_array();

        $data['products'] = $products;

        if (!empty($user_data)) {
            // User is logged in, provide $user_data
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;
            
            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }

        $this->load->view('main/index', $data);
    }

    public function beds()
    {
 
        $user_data = $this->session->userdata('user_data');
        $this->db->select('products.*');
        $this->db->from('products');
         
        $this->db->where('products.ProductCategoryName', 1);
        $products = $this->db->get()->result_array();
        $data['products'] = $products;
       
     
        $this->db->from('productcategories');
        $this->db->where('CategoryName', 'Bed');
        $categories = $this->db->get()->result_array();
        $data['categories'] = $categories;
       
      
       
        $this->db->from('productprice');
        $this->db->where('ProductId', $products[0]['ProductID']);
        $productprice = $this->db->get()->result_array();
        $data['productprice'] = $productprice;

       

        if (!empty($user_data)) {
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;


            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/beds', $data);
    }

    public function sofa()
    {
      
        $user_data = $this->session->userdata('user_data');

        $this->db->select('products.*');
        $this->db->from('products');
         
        $this->db->where('products.ProductCategoryName', 'Sofa');
        $products = $this->db->get()->result_array();
        $data['products'] = $products;
        
 

        $this->db->from('productcategories');
        $this->db->where('CategoryName', 'Sofa');
        $categories = $this->db->get()->result_array();
        $data['categories'] = $categories;
       
      
       
        $this->db->from('productprice');
        $this->db->where('ProductId', $products[0]['ProductID']);
        $productprice = $this->db->get()->result_array();
        $data['productprice'] = $productprice;
  

        if (!empty($user_data)) {
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;


            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/sofa', $data);
    }

    public function mattressess()
    {
        $user_data = $this->session->userdata('user_data');

        $this->db->select('products.*');
        $this->db->from('products');
         
        $this->db->where('products.ProductCategoryName', 'Matresses');
        $products = $this->db->get()->result_array();
        $data['products'] = $products;
        
 

        $this->db->from('productcategories');
        $this->db->where('CategoryName', 'Matresses');
        $categories = $this->db->get()->result_array();
        $data['categories'] = $categories;
       
       
        $this->db->from('productprice');
        $this->db->where('ProductId', $products[0]['ProductID']);
        $productprice = $this->db->get()->result_array();
        $data['productprice'] = $productprice;
  
        if (!empty($user_data)) {
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;



            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/mattressess', $data);
    }

    public function kids()
    {
        $user_data = $this->session->userdata('user_data');

        $this->db->select('products.*, productcategories.*');
        $this->db->join('productcategories', 'products.ProductCategoryID = productcategories.CategoryID', 'inner');
        $this->db->where('productcategories.CategoryName', 'Combo');
        $products = $this->db->get('products')->result_array();

        $data['products'] = $products;

        if (!empty($user_data)) {
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;



            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/kids', $data);
    }

    public function contact()
    {
        $user_data = $this->session->userdata('user_data');

        $this->db->select('products.*, productcategories.*');
        $this->db->join('productcategories', 'products.ProductCategoryID = productcategories.CategoryID', 'inner');
        $this->db->where('productcategories.CategoryName', 'Body Care');
        $products = $this->db->get('products')->result_array();

        $data['products'] = $products;

        if (!empty($user_data)) {
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;



            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/contact', $data);
    }

    public function about()
    {
        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;

            $products = array(); // Create an empty array to collect all products

            foreach ($cart as $key => $value) {
                $this->db->where('ProductID', $value['ProductID']);
                $product = $this->db->get('products')->row_array(); // Use row_array to get a single product
                $products[] = $product; // Add the product to the array
            }

            $data['products'] = $products; // Assign the array of products

            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/about', $data);
    }

    public function profile()
    {
        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {

            $this->db->where('OrderUserID', $user_data['user_id']);
            $order_info = $this->db->get('orders')->result_array();
            $data['order_info'] = $order_info;
            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);
            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }

        $this->load->view('main/myprofile', $data);
    }

    public function productdetails($productID)
    {
 


        $this->db->select('products.*, productprice.*');
        $this->db->join('productprice', 'products.ProductID = productprice.ProductId',);
        $this->db->group_by('products.ProductID'); 
        $this->db->where('products.ProductID', $productID);
        $products = $this->db->get('products')->result_array();

        $data['products'] = $products;

         

        if (!empty($user_data)) {
            // User is logged in, providing $user_data
            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);
            $data['user_data'] = $user_data;

            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('ProductID', $products[0]['ProductID']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }

        $this->load->view('main/productdetails', $data);
    }


    public function cart()
    {
        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {


            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;

            $this->db->where('UserID', $user_data['user_id']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $data['user_data'] = $user_data;

        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/cart', $data);
    }

    public function checkout()
    {
        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {
             $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;

            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $this->db->where('UserID', $user_data['user_id']);
            $user_address = $this->db->get('user_addresses')->result_array();
            $data['user_address'] = $user_address;

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/checkout', $data);
    }

    public function orderOverview($a, $p)
    {

        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {
   
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->where('isRemoved', 0);
            $cart = $this->db->get('addtocart')->result_array();
            $data['cart'] = $cart;
            
            $para = array(
                'userAddress' => $a,
                'pormoCode' => $p
            );

            $data['para'] = $para;

            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);

            $this->db->where('UserID', $user_data['user_id']);
            $user_address = $this->db->get('user_addresses')->result_array();
            $data['user_address'] = $user_address;

            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }


        $this->load->view('main/orderOverview', $data);
    }



    public function paymentProcess($urlEncodedJson)
    {
        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {
            // Decode the URL-encoded JSON data
            $jsonData = urldecode($urlEncodedJson);

            // Parse the JSON data into a PHP array
            $arrayData = json_decode($jsonData, true);
            $OrderAmount = 0;
            foreach ($arrayData as $key => $value) {
                $promoCode = $value['promoCode'];
                $ProductQuantity = $value['ProductQuantity'];
                $Price = $value['Price'];

                $OrderAmount = $Price * $ProductQuantity;
                $OrderAmount = $OrderAmount - $promoCode;
            }

            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();



            $key_id = 'rzp_test_FuJhV2UFQoPMYn';
            $secret = 'JBNbbtPLLh0iXmhgmMVEhQIr';
            // $key_id = 'rzp_live_pFfxQnbCZfZnli';
            // $secret = 'gLUxD2pgPp0SBAovxeqGjxU5';

            $api = new Api($key_id, $secret);
            $OrderAmount =  $OrderAmount * 100;
            $order = $api->order->create(array('receipt' => '123', 'amount' => $OrderAmount, 'currency' => 'INR', 'notes' => array('key1' => 'value3', 'key2' => 'value2')));

            $this->load->view('main/rozarpaycheckout', ['data' => $user_info, 'urlEncodedJson' => $urlEncodedJson, 'order' => $order, 'key_id' => $key_id, 'secret' => $secret]);
        }
    }

    public function payment_status($urlEncodedJson)
    {

        $user_data = $this->session->userdata('user_data');
        if (!empty($user_data)) {
            $key_id = 'rzp_test_FuJhV2UFQoPMYn';
            $secret = 'JBNbbtPLLh0iXmhgmMVEhQIr';
            $api = new Api($key_id, $secret);
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $razorpay_order_id = $this->input->post('razorpay_order_id');
            $razorpay_signature = $this->input->post('razorpay_signature');
            $secret = 'JBNbbtPLLh0iXmhgmMVEhQIr';
            $data = $razorpay_order_id . "|" . $razorpay_payment_id;
            $generated_signature = hash_hmac('sha256', $data,  $secret);
            $pay = $api->payment->fetch($razorpay_payment_id);
            if ($generated_signature == $razorpay_signature) {



                // Decode the URL-encoded JSON data
                $jsonData = urldecode($urlEncodedJson);

                // Parse the JSON data into a PHP array
                $arrayData = json_decode($jsonData, true);

                $this->db->select('*');
                $this->db->from('orders');
                $this->db->order_by('OrderNumber', 'DESC');
                $this->db->limit(1);
                $query = $this->db->get();
                $lastRow = $query->row_array();

                $dataToInsert = array();

                foreach ($arrayData as $key => $value) {


                    $data1 = array(
                        'OrderStatus' => 1,
                    );


                    $this->db->where('ID', $value['ID']);
                    $this->db->update('addtocart', $data1);

                    $promoCode = $value['promoCode'];
                    $ProductQuantity = $value['ProductQuantity'];
                    $Price = $value['Price'];
                    $DiscountedPrice = $value['DiscountedPrice'];
                    $OrderAmount = $Price * $ProductQuantity;
                    $OrderDiscountAmount = $DiscountedPrice * $ProductQuantity;
                    $newOrderNumber = str_pad((intval($lastRow['OrderNumber']) + 1), strlen($lastRow['OrderNumber']), '0', STR_PAD_LEFT);
                    $data = array(
                        'transaction_Id' =>   $razorpay_payment_id,
                        'rozarpay_order_number' =>   $razorpay_order_id,
                        'OrderUserID' =>  $user_data['user_id'],
                        'OrderNumber' =>  $newOrderNumber,
                        'OrderAmount' => $OrderAmount,
                        'OrderDiscountAmount' => $OrderDiscountAmount,
                        'CouponDiscountAmount' => $promoCode,
                        'OrderShipAddressID' => '',
                        'PaymentMode' => 'Online',
                        'OrderDate' => date("Y-m-d H:i:s"),
                    );
                    $dataToInsert[] = $data;
                }
                $this->db->insert_batch('orders', $dataToInsert);

                $this->session->set_userdata('order_data', $order_data);

                // Redirect to the dashboard or home page
                redirect(base_url('User/index'));
            } else {
                echo 'payment is failed';
            }

            
        }
    }

    public function offlineOrder($urlEncodedJson)
    {
        $user_data = $this->session->userdata('user_data');

        if (!empty($user_data)) {
            // Decode the URL-encoded JSON data
            $jsonData = urldecode($urlEncodedJson);

            // Parse the JSON data into a PHP array
            $arrayData = json_decode($jsonData, true);

            $this->db->select('*');
            $this->db->from('orders');
            $this->db->order_by('OrderNumber', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get();
            $lastRow = $query->row_array();

            $dataToInsert = array();

            foreach ($arrayData as $key => $value) {


                $data1 = array(
                    'OrderStatus' => 1,
                );


                $this->db->where('ID', $value['ID']);
                $this->db->update('addtocart', $data1);

                $promoCode = $value['promoCode'];
                $ProductQuantity = $value['ProductQuantity'];
                $Price = $value['Price'];
                $DiscountedPrice = $value['DiscountedPrice'];
                $OrderAmount = $Price * $ProductQuantity;
                $OrderDiscountAmount = $DiscountedPrice * $ProductQuantity;
                $newOrderNumber = str_pad((intval($lastRow['OrderNumber']) + 1), strlen($lastRow['OrderNumber']), '0', STR_PAD_LEFT);
                $data = array(
                    'OrderUserID' =>  $user_data['user_id'],
                    'OrderNumber' =>  $newOrderNumber,
                    'OrderAmount' => $OrderAmount,
                    'OrderDiscountAmount' => $OrderDiscountAmount,
                    'CouponDiscountAmount' => $promoCode,
                    'OrderShipAddressID' => '',
                    'PaymentMode' => 'Offline',
                    'OrderDate' => date("Y-m-d H:i:s"),
                );
                $dataToInsert[] = $data;
            }
            $this->db->insert_batch('orders', $dataToInsert);

            $order_data =  $dataToInsert;
           
            $this->load->library('session');
            $this->session->set_userdata('order_data', $order_data);

            // Redirect to the dashboard or home page
            redirect(base_url('User/confirmorder'));

        }
    }
    
    public function confirmorder()
    {
        $user_data = $this->session->userdata('user_data');
    
        if (!empty($user_data)) {
            // User is logged in, providing $user_data
            $order_data = $this->session->userdata('order_data'); // Fix the variable name here
         
            $data['order_data'] =  $order_data; // Fix the variable name here
            $this->db->where('UserID', $user_data['username']);
            $user_info = $this->db->get('users')->result_array();
            $data['user_info'] = reset($user_info);
            $data['user_data'] = $user_data;
        } else {
            $data['user_data'] = array(
                'logged_in' => 0
            );
        }
    
        $this->load->view('main/confirmorder', $data);
    }
    
}
