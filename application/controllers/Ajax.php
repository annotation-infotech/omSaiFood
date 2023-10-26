<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session'); // Load the Session library
    }

    // Users AJax Code 
    public function addCartDirectly()
    {

        $user_data = $this->session->userdata('user_data');
        $product_id = $_POST['product_id'];
        $type = $_POST['type'];


        if (!empty($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
        }

        if (empty($quantity)) {
            $quantity = 1;
        }

        // Check if the record already exists
        $this->db->where('ProductID', $product_id);
        $this->db->where('ProductType', $type);
        $this->db->where('UserID', $user_data['user_id']);
        $query = $this->db->get('addtocart');

        if ($query->num_rows() > 0) {

            $existingData = $query->row();
            $isRemoved = $existingData->isRemoved;
            if ($isRemoved == 1) {


                $data = array(
                    'ProductQuantity' => 1,
                    'isRemoved' => 0,
                );
            } else {
                $newQuantity = $existingData->ProductQuantity + $quantity;

                $data = array(
                    'ProductQuantity' => $newQuantity,
                );
            }


            $this->db->where('ProductID', $product_id);
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->update('addtocart', $data);

            $response = array(
                'success' => true,
                'message' => 'Product Updated to Cart'
            );
        } else {
            // Record doesn't exist, so insert it
            $data = array(
                'ProductID' => $product_id,
                'ProductQuantity' => $quantity,
                'UserID' => $user_data['user_id'],
                'ProductType' => $type
            );

            $this->db->insert('addtocart', $data);


            $response = array(
                'success' => true,
                'message' => 'New Product Added to Cart'
            );
        }

        $this->db->where('UserID', $user_data['user_id']);
        $cart = $this->db->get('addtocart')->result_array();


        $response = array(
            'success' => true,
            'cartCount' => count($cart),
            'message' => 'Product Added to Cart'
        );
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function AddtoCart()
    {

        $user_data = $this->session->userdata('user_data');


        $jsonData = $this->input->post('jsonData');

        // Decode the JSON data into a PHP associative array
        $data = json_decode($jsonData, true);

        $productID = $data['productID'];
        $productPrice = $data['productPrice'];
        $discountedPrice = $data['discountedPrice'];
        $percentageDiscount = $data['percentageDiscount'];
        $selectedColors = $data['selectedColors'];
        $selectedSizes = $data['selectedSizes'];

        $productPrice = (int)str_replace('₹', '', $data['productPrice']);
        $discountedPrice = (int)str_replace('₹', '', $data['discountedPrice']);


        // Check if the record already exists
        $existingCartItem = $this->db->where('ProductID', $productID)
            ->where('ProductColor', $selectedColors)
            ->where('ProductSize', $selectedSizes)
            ->where('ProductPrice', $productPrice)
            ->get('addtocart')
            ->row();



        if ($existingCartItem) {
            $response = array(
                'success' => false,
                'message' => 'This product is already in the cart.'
            );
        } else {



            $data = [
                'UserID' => $user_data['user_id'], // You should replace this with the actual user ID
                'ProductID' => $productID,
                'ProductQuantity' => 1,
                'ProductType' => '', // You should replace this with the actual product type
                'ProductColor' => $selectedColors,
                'ProductSize' => $selectedSizes,
                'ProductPrice' => $productPrice, // You should replace this with the actual product price
                'ProductDiscountPrice' => $discountedPrice, // You should replace this with the actual discounted price
                'ProductDicountPercentage' => $percentageDiscount // You should replace this with the actual discount percentage
            ];

            // Insert the item into the cart
            $this->db->insert('addtocart', $data);

            $response = array(
                'success' => true,
                'message' => 'Product added to the cart successfully.'
            );
        }

        $this->db->where('UserID', $user_data['user_id']);
        $cart = $this->db->get('addtocart')->result_array();



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function removeCart()
    {
        $user_data = $this->session->userdata('user_data');
        $product_id = $_POST['product_id'];

        $data = array(
            'ProductQuantity' => 0,
            'isRemoved' => 1,
        );

        $this->db->where('ProductID', $product_id);
        $this->db->where('UserID', $user_data['user_id']);
        $this->db->update('addtocart', $data);

        $response = array(
            'success' => true,
            'message' => 'Product removed from Cart'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function getCartCount()
    {
        $user_data = $this->session->userdata('user_data');

        $this->db->where('isRemoved', 0);
        $this->db->where('UserID', $user_data['user_id']);
        $this->db->where('OrderStatus', '0');
        $cart = $this->db->get('addtocart')->result_array();

        $response = array(
            'success' => true,
            'cartCount' => count($cart),

        );
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function UpdateQuantity()
    {

        $user_data = $this->session->userdata('user_data');
        $productId = $_POST['productId'];
        $quantity = $_POST['quantity'];
        $type = $_POST['type'];
        $productColor = trim($_POST['productColor']);


        // print_r($quantity);
        // print_r($user_data['user_id']);
        $this->db->where('ProductID', $productId);
        $this->db->where('ProductColor', $productColor);
        $this->db->where('UserID', $user_data['user_id']);
        $query = $this->db->get('addtocart');

        if ($query->num_rows() == 1) {
            $existingData = $query->row();
            $currentQuantity = $existingData->ProductQuantity;

            $this->db->where('ProductID', $productId);
            $this->db->where('ProductColor',  $productColor);
            $query = $this->db->get('productprice');

            if ($type == 'decrement') {
                // Decrement the quantity
                $newQuantity = $currentQuantity - 1;

                // Product Price 

                $productData = $query->row();
                $qty = $newQuantity;
                $ProductPrice = $productData->ProductPrice;
                $FinalAmount = $ProductPrice * $qty;

                // Discount Price 

                $productDiscountPrice = $productData->DiscountedPrice;
                $productDiscountPrice = $productDiscountPrice * $qty;



                $response = array(
                    'success' => true,
                    'productPrice' => $FinalAmount,
                    'productID' => $productId,
                    'productDiscountPrice' => $productDiscountPrice,

                );
            } else {
                // Increment the quantity
                $newQuantity = $currentQuantity + 1;

                // Product Price 

                $productData = $query->row();

                $qty = $newQuantity;
                $ProductPrice = $productData->ProductPrice;
                $FinalAmount = $ProductPrice * $qty;

                // Discount Price 

                $productDiscountPrice = $productData->DiscountedPrice;
                $productDiscountPrice = $productDiscountPrice * $qty;

                // Total Product Price 


                $response = array(
                    'success' => true,
                    'productPrice' => $FinalAmount,
                    'productID' => $productId,
                    'productDiscountPrice' => $productDiscountPrice
                );
            }

            $data = array(
                'ProductQuantity' => $newQuantity,
            );

            $this->db->where('ProductID', $productId);
            $this->db->where('ProductColor',  $productColor);
            $this->db->where('UserID', $user_data['user_id']);
            $this->db->update('addtocart', $data);

            // Respond with a success message
            // echo json_encode(['status' => 'success', 'message' => 'Quantity updated successfully']);

        } else {
            // Handle the case where the product is not in the user's cart
            echo json_encode(['status' => 'error', 'message' => 'Product not found in the cart']);
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function getProductPrice()
    {
        $user_data = $this->session->userdata('user_data');
        // Check if the user is logged in (you can implement your authentication logic)
        if (!$this->session->userdata('user_data')) {
            // Handle the case where the user is not logged in, e.g., redirect to login page
            redirect('login'); // Adjust the URL to your login page
        }

        //  Total Product Price 
        $this->db->where('UserID', $user_data['user_id']);
        $this->db->where('isRemoved', 0);
        $query = $this->db->get('addtocart');
        $addtocart = $query->result_array();
        $totalProductPrice = 0;
        $totalDiscountProductPrice = 0;
        foreach ($addtocart as $key => $value) {

            $this->db->where('ProductID', $value['ProductID']);
            $query = $this->db->get('products');
            $productsData = $query->result_array();
            foreach ($productsData as $key => $value2) {
                $totalProductPrice += $value2['ProductPrice'];
                $totalDiscountProductPrice += $value2['ProductDiscountedPrice'];
            }
        }


        $response = array(
            'success' => true,
            'productPrice' => $totalProductPrice,
            'productDiscountPrice' => $totalDiscountProductPrice
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function removeProductFromCart()
    {
        // print_r($_POST);
        // die;
        $user_id = $this->session->userdata('user_data')['user_id'];
        // Retrieve the product ID from the POST data
        $productId = trim($this->input->post('productId'));
        $ProductColor = trim($this->input->post('ProductColor'));



        // Check if the user is logged in (you can implement your authentication logic)
        if (!$this->session->userdata('user_data')) {
            // Handle the case where the user is not logged in, e.g., redirect to login page
            redirect('login'); // Adjust the URL to your login page
        }

        // Check if the product exists in the user's cart

        $this->db->where('ProductID', $productId);
        $this->db->where('ProductColor', $ProductColor);
        $this->db->where('UserID', $user_id);
        $query = $this->db->get('addtocart');

        // echo $this->db->last_query();

        if ($query->num_rows() == 1) {
            // Product exists in the cart, remove it
            $data = array(
                'isRemoved' => 1,
                'ProductQuantity' => 0
            );

            $this->db->where('ProductID', $productId);
            $this->db->where('ProductColor', $ProductColor);
            $this->db->where('UserID', $user_id);
            $this->db->update('addtocart', $data);

            // Respond with a success message
            echo json_encode(['status' => 'success', 'message' => 'Product removed from the cart']);
        } else {
            // Handle the case where the product is not in the user's cart
            echo json_encode(['status' => 'error', 'message' => 'Product not found in the cart']);
        }
    }

    public function checkPromoCode()
    {
        // Get the promo code from the AJAX request
        $user_data = $this->session->userdata('user_data');
        $promoCode = $this->input->post('promoCode');


        // Perform your promo code validation here
        // You can query your promo codes table in the database
        // Example: Check if the promo code exists in the database
        $query = $this->db->get_where('promo_codes', array('promo_code' => $promoCode));

        if ($query->num_rows() > 0) {
            // Promo code is valid
            $result = $query->result_array();
            $amount = $result[0]['promo_code_amount'];
            $promo_code = $result[0]['promo_code'];
            $response = array('status' => 'success', 'message' => 'Valid promo code.', 'amount' => $amount);

            $data = array(
                'UserID' => $user_data['user_id'],
                'promo_code' => $promo_code,
                'code_status' => 'not_used',
                'created_at' => date("Y-m-d H:i:s"),
            );

            $this->db->insert('promo_codes_applied', $data);
        } else {
            // Promo code is not valid
            $response = array('status' => 'error', 'message' => 'Invalid promo code.');
        }

        // Send the JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    public function AddUserAddress()
    {
        $this->load->library('form_validation');
        $user_id = $this->session->userdata('user_data')['user_id'];
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phoneno', 'Phone No.', 'required');
        $this->form_validation->set_rules('address1', 'Address Line 1', 'required');
        $this->form_validation->set_rules('address2', 'Address Line 2', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|exact_length[6]|numeric');
        $this->form_validation->set_rules('country', 'Country', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed, handle errors
            // Load the view with the form and error messages
            $this->load->view('address_form_view');
        } else {
            // Form validation passed, insert data into the database
            $data = array(
                'userID' => $user_id,
                'email' => $this->input->post('email'),
                'phoneno' => $this->input->post('phoneno'),
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'country' => $this->input->post('country')
            );

            $this->db->insert('user_addresses', $data);
            $response = array('status' => 'success', 'message' => 'address added successfully');
            // Send the JSON response
            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        }
    }

    public function updateTrending()
    {
        if ($this->input->is_ajax_request()) {
            $product_id = $this->input->post('product_id');
            $trending = $this->input->post('trending');

            // Check the current count of products with trending status = 1
            $this->db->select('COUNT(*) as count');
            $this->db->where('trending', 1); // Assuming 'trending' is the column for trending status
            $query = $this->db->get('products'); // Replace 'your_table_name' with your actual table name
            $result = $query->row();
            $countTrending = $result->count;

            // Define the maximum number of trending products allowed (e.g., 4)
            $maxTrending = 4;

            if ($countTrending < $maxTrending) {
                // If the count is less than the maximum, set the trending status to 1
                $data = array(
                    'trending' => 1 // Assuming 'trending' is the column for trending status
                );

                $this->db->where('ProductID', $product_id); // Assuming 'product_id' is the primary key column
                $this->db->update('products', $data);
            } else {
                // Retrieve the oldest trending product
                $this->db->select('ProductID');
                $this->db->where('trending', 1); // Assuming 'trending' is the column for trending status
                $this->db->order_by('trending', 'asc'); // Assuming 'date_added' is a timestamp indicating when the product was added
                $this->db->limit(1);
                $query = $this->db->get('products');
                $oldestProduct = $query->row();

                // Set the trending status of the oldest product to 0
                $data = array(
                    'trending' => 0 // Set to 0 to mark as not trending
                );

                $this->db->where('ProductID', $oldestProduct->ProductID);
                $this->db->update('products', $data);

                // Set the trending status of the new product to 1
                $data = array(
                    'trending' => 1 // Assuming 'trending' is the column for trending status
                );

                $this->db->where('ProductID', $product_id);
                $this->db->update('products', $data);
            }

            // Respond with a JSON success message
            $response = array('success' => true, 'message' => 'Trending status updated successfully');
            echo json_encode($response);
        } else {
            // Return an error for non-AJAX requests
            show_404();
        }
    }



    public function UpdateBestSale()
    {
        if ($this->input->is_ajax_request()) {
            $product_id = $this->input->post('product_id');
            $trending = $this->input->post('trending');

            // Check the current count of products with trending status = 1
            $this->db->select('COUNT(*) as count');
            $this->db->where('bestsale', 1); // Assuming 'trending' is the column for trending status
            $query = $this->db->get('products'); // Replace 'your_table_name' with your actual table name
            $result = $query->row();
            $countTrending = $result->count;

            // Define the maximum number of trending products allowed (e.g., 4)
            $maxTrending = 4;

            if ($countTrending < $maxTrending) {
                // If the count is less than the maximum, set the trending status to 1
                $data = array(
                    'bestsale' => 1 // Assuming 'trending' is the column for trending status
                );

                $this->db->where('ProductID', $product_id); // Assuming 'product_id' is the primary key column
                $this->db->update('products', $data);
            } else {
                // Retrieve the oldest trending product
                $this->db->select('ProductID');
                $this->db->where('bestsale', 1); // Assuming 'trending' is the column for trending status
                $this->db->order_by('bestsale', 'asc'); // Assuming 'date_added' is a timestamp indicating when the product was added
                $this->db->limit(1);
                $query = $this->db->get('products');
                $oldestProduct = $query->row();

                // Set the trending status of the oldest product to 0
                $data = array(
                    'bestsale' => 0 // Set to 0 to mark as not trending
                );

                $this->db->where('ProductID', $oldestProduct->ProductID);
                $this->db->update('products', $data);

                // Set the trending status of the new product to 1
                $data = array(
                    'bestsale' => 1 // Assuming 'trending' is the column for trending status
                );

                $this->db->where('ProductID', $product_id);
                $this->db->update('products', $data);
            }

            // Respond with a JSON success message
            $response = array('success' => true, 'message' => 'Best Sale status updated successfully');
            echo json_encode($response);
        } else {
            // Return an error for non-AJAX requests
            show_404();
        }
    }

    public function getStock()
    {
        if ($this->input->is_ajax_request()) {
            $product_id = $this->input->post('product_id');
            $productSize = $this->input->post('productSize');

            $query = $this->db->select('ProductStock')
                ->where('ProductId', $product_id)
                ->where('Type', $productSize)
                ->get('productprice');
            $stockInfo =  $query->row_array();

            if ($stockInfo !== false) {
                // Prepare the response
                $response = (int)$stockInfo['ProductStock'];

                // Return the response as JSON
                echo json_encode($response);
            } else {
                echo "Stock information not available";
            }
        } else {
            show_404(); // Return an error for non-AJAX requests
        }
    }

    public function addToWishlist()
    {
        $user_data = $this->session->userdata('user_data');
        $product_id = $this->input->post('productID');



        if (!empty($product_id)) {
            $data = array(
                'UserID' =>  $user_data['user_id'],
                'ProductID' =>  $product_id,
                'created_at' =>  date('Y-m-d H:i:s'),
                'isremoved' => 0
            );
            $this->db->insert('wishlist', $data);
            $response = array('status' => 'success', 'message' => 'Product Added to Wishlist');
        } else {
            $response = array('status' => 'error', 'message' => 'product not found');
        }

        // Send the JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    public function getSubcategory()
    {

        // Get the categoryID from the AJAX request
        $categoryID = $this->input->get('selectedCategoryName');

        $this->db->where('CategoryName', $categoryID);
        $subCategory = $this->db->get('productcategories')->result_array();

        // Create HTML options for subcategories
        $options = '<label class="form-label" for="SubCategorySelect">Select Subcategory</label>';
        $options .= '<select name="SubCategoryID" class="form-select" id="SubCategoryName">';
        $options .= '<option value="">Select a subcategory</option>';
        foreach ($subCategory as $subcategory) {
            $options .= '<option value="' . $subcategory['CategoryID'] . '">' . $subcategory['SubCategoryName'] . '</option>';
        }
        $options .= '</select>';

        // Return the HTML options as a response
        echo $options;
    }

    public function getAllProductData()
    {
        // Get the ProductID from the AJAX request
        $ProductID = $this->input->get('selectedProductName');

        // Fetch distinct values for Product Shades, Product Types, and Product Sizes based on the ProductID
        $this->db->distinct();
        $this->db->select('ProductShades');
        $this->db->where('ProductID', $ProductID);
        $shades = $this->db->get('products')->result_array();

        $this->db->distinct();
        $this->db->select('ProductTypes');
        $this->db->where('ProductID', $ProductID);
        $types = $this->db->get('products')->result_array();

        $this->db->distinct();
        $this->db->select('ProductSizes');
        $this->db->where('ProductID', $ProductID);
        $sizes = $this->db->get('products')->result_array();

        // Extract values into separate arrays
        $shadesArray = array_column($shades, 'ProductShades');
        $typesArray = array_column($types, 'ProductTypes');
        $sizesArray = array_column($sizes, 'ProductSizes');

        // Return the values as JSON response
        $data = array(
            'shades' => $shadesArray,
            'types' => $typesArray,
            'sizes' => $sizesArray,
        );

        echo json_encode($data);
    }

    public function create_product_price()
    {
        // Get the form data from POST
        $product_id = $this->input->post('ProductID');
        $product_colors = $this->input->post('ProductColors');
        $product_type = $this->input->post('ProductType');
        $product_size = $this->input->post('ProductSize');
        $product_price = $this->input->post('ProductPrice');
        $discounted_price = $this->input->post('DiscountedPrice');
        $product_stock = $this->input->post('ProductStock');

        // Create a data array
        $data = array(
            'ProductId' => $product_id,
            'ProductColor' => $product_colors,
            'ProductType' => $product_type,
            'ProductSize' => $product_size,
            'ProductPrice' => $product_price,
            'DiscountedPrice' => $discounted_price,
            'ProductStock' => $product_stock

        );

        $inserted =  $this->db->insert('productprice', $data);

        if ($inserted) {

            $response = array(
                'success' => true,
                'message' => 'Added Product Price successfully'
            );
        } else {
            $response = array(
                'success' => false,
                'message' => 'Added to failed produce price'
            );
        }


        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }


    // Method to get filtered product data
    public function getFilteredProduct()
    {
        // Receive the selected filters from the AJAX request
        $selectedFilters = $this->input->post();
        $requestType = $_POST['requestType'];
        // Construct the CodeIgniter query
        $this->db->select('products.*, productprice.*,');
        $this->db->from('products');
        $this->db->where('products.ProductCategoryName', $requestType);
        $this->db->join('productprice', 'products.ProductID = productprice.ProductId', 'inner');
        // $this->db->join('productcategories', 'productcategories.SubCategoryName = products.ProductCategoryName', 'inner');

        // Add filter conditions based on selected filters
        if (!empty($selectedFilters['type'])) {
            $this->db->where_in('productcategories.SubCategoryName', $selectedFilters['type']);
        }
        if (!empty($selectedFilters['size'])) {
            $this->db->where_in('productprice.ProductSize', $selectedFilters['size']);
        }
        if (!empty($selectedFilters['color'])) {
            $this->db->where_in('productprice.ProductColor', $selectedFilters['color']);
        }
        if (!empty($selectedFilters['material'])) {
            $this->db->where_in('productprice.ProductType', $selectedFilters['material']);
        }

        // Execute the query and fetch the filtered product data
        $query = $this->db->get();
        $filteredProducts = $query->result_array();
        print_r($filteredProducts);
        $html = '';

        // Loop through $filteredProducts and append HTML to $html
        foreach ($filteredProducts as $product) {
            $productImages = explode(',', $product['ProductImage']);
            $firstImagePath = $productImages[0];
            $productID = $product['ProductID'];

            $html .= '<div class="col-lg-4 col-md-6">';
            $html .= '<div class="card whishcard" style="width: 15rem; position: relative;">';
            $html .= '<a href="productdetails/' . $productID . '">';
            $html .= '<img src="' . base_url() . 'assets/uploads/products/' . $firstImagePath . '" class="card-img-top" alt="...">';
            $html .= '</a>';
            $html .= '<div class="card-body whishbody">';
            $html .= '<h5 class="card-title whhead">' . $product['ProductName'] . '</h5>';
            $html .= '<div class="bttxt d-flex">';
            $html .= '<p class="card-text"><span class="price">₹' . $product['ProductPrice'] . '</span><del>₹' . $product['DiscountedPrice'] . '</del></p>';
            $html .= '</div>';
            $html .= '<div class="star-rating">';
            for ($i = 0; $i < 5; $i++) {
                $html .= '<span class="star-filled"></span>';
            }
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<svg id="heart-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="position: absolute; top: 10px; right: 10px;">';
            $html .= '<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#d7b5b7" />';
            $html .= '</svg>';
            $html .= '</div>';
            $html .= '</div>';
        }

        // Send the HTML response to the client
        echo $html;
    }

    public function getProductViewFilteredPrice()
    {

        $ProductID = $_POST['productID'];
        $size = $_POST['size'];
        $color = $_POST['color'];


        $this->db->where('ProductId', $ProductID);
        $this->db->where('ProductSize', $size);
        $this->db->where('ProductColor', $color);
        $productprice = $this->db->get('productprice')->result_array();
        // print_r( $productprice);
        //         $query = $this->db->get('productprice');
        // echo $this->db->last_query();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($productprice));
    }

    public function changePassword()
    {
        // Load the form validation library
        $this->load->library('form_validation');

        // Validate the form input
        $this->form_validation->set_rules('oldPassword', 'Current Password', 'required');
        $this->form_validation->set_rules('newPassword', 'New Password', 'required|min_length[1]');
        $this->form_validation->set_rules('confirmNewPassword', 'Confirm Password', 'required|matches[newPassword]');

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed
            $response['success'] = false;
            $response['errors'] = $this->form_validation->error_array(); // Include the error keys as an array
        } else {
            // Form validation passed, update the password
            $user_data = $this->session->userdata('user_data'); // Assuming you have a logged-in user
            $userID = $user_data['username'];
            $current_password = $this->input->post('oldPassword');
            $new_password = $this->input->post('newPassword');

            // Get the stored hashed password from the database
            $this->db->select('UserPassword');
            $this->db->where('userID', $userID);
            $query = $this->db->get('users');

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $stored_hashed_password = $row->UserPassword;

                // Verify the entered password with the stored hashed password
                if (password_verify($current_password, $stored_hashed_password)) {
                    // Password matches, update the hashed password in the database
                    $hashed_new_password = password_hash($new_password, PASSWORD_BCRYPT);
                    $this->db->where('userID', $userID);
                    $this->db->update('users', array('UserPassword' => $hashed_new_password));

                    $response['success'] = true;
                    $response['message'] = 'Password updated successfully.';
                } else {
                    // Password does not match
                    $response['success'] = false;
                    $response['errors'] = 'Current password is incorrect.'; // Add the error key
                }
            } else {
                // Member ID not found
                $response['success'] = false;
                $response['errors'] = 'User not found.';
            }
        }

        // Send the JSON response
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    // Vendor Regisration 
    public function create_vendor()
    {
        $this->load->library('form_validation');
        // Ensure this is an AJAX request
        if (!$this->input->is_ajax_request()) {
            show_404(); // Return a 404 error if it's not an AJAX request
        }

        // Form validation rules
        $this->form_validation->set_rules('VendorName', 'Vendor Name', 'required');
        $this->form_validation->set_rules('VendorBrandName', 'Vendor Brand Name', 'required');
        $this->form_validation->set_rules('VendorMobileNumber', 'Vendor Mobile Number', 'required|numeric');
        $this->form_validation->set_rules('VendorEMailID', 'Vendor Email ID', 'required|valid_email');
        $this->form_validation->set_rules('VendorUserID', 'Vendor User ID', 'required');
        $this->form_validation->set_rules('VendorPassword', 'Vendor Password', 'required');
        $this->form_validation->set_rules('VendorConfirmPassword', 'Vendor Confirm Password', 'required|matches[VendorPassword]');

        // Check if form validation passes
        if ($this->form_validation->run() == FALSE) {
            $response = array(
                'success' => false,
                'message' => validation_errors()
            );
        } else {
            // Registration logic (replace with your actual registration process)
            $data = array(
                'VendorName' => $this->input->post('VendorName'),
                'VendorBrandName' => $this->input->post('VendorBrandName'),
                'VendorMobileNumber' => $this->input->post('VendorMobileNumber'),
                'VendorEmailID' => $this->input->post('VendorEMailID'),
                'VendorUserID' => $this->input->post('VendorUserID'),
                'VendorPassword' => password_hash($this->input->post('VendorPassword'), PASSWORD_BCRYPT),
                'created_at' => date("Y-m-d H:i:s"),
            );

            // Call your vendor model's registration method or insert data into your vendor table
            $result = $this->db->insert('vendor', $data);

            if ($result) {
                $response = array(
                    'success' => true,
                    'message' => 'Vendor registration successful'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Vendor registration failed'
                );
            }
        }

        // Send JSON response back to the client
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

      // Update Package Status Code
      public function updateVendorStatus()
      {
          // Get the sr and status values from the AJAX request
          $sr = $this->input->post('sr');
          $status = $this->input->post('status');
        
     
          if (!empty($sr) || !empty($status)) {
            $data = array('status' => $status);
              if ($this->db->where('ID', $sr)->update('vendor', $data)) {
                  // Status updated successfully
                  $response = array('status' => 'success', 'message' => 'Status updated successfully');
              } else {
                  // Failed to update status
                  $response = array('status' => 'error', 'message' => 'Failed to update status');
              }
          } else {
              $response = array('status' => 'error', 'message' => 'The status is blank');
          }
  
  
          // Send the JSON response back to the client
          $this->output->set_content_type('application/json')->set_output(json_encode($response));
      }
}
