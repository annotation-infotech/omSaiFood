<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VAjax extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session'); // Load the Session library
    }


    public function create_category()
    {

        $vendor_data = $this->session->userdata('vendor_data');
        if (isset($vendor_data)) {

            $roomSegregation = $this->input->post('RoomSegregation');
            $categoryName = $this->input->post('CategoryName');
            $subcategoryName = $this->input->post('SubCategoryName');

            // Validate input
            if (empty($categoryName)) {
                echo json_encode(['success' => false, 'message' => 'Category Name is required']);
                return;
            }
            if (empty($subcategoryName)) {
                $data = array(
                    'VendorID' => $vendor_data['vendor_id'],
                    'RoomSegregation' => $roomSegregation,
                    'CategoryName' => $categoryName
                );
            } else {
                $data = array(
                    'VendorID' => $vendor_data['vendor_id'],
                    'RoomSegregation' => $roomSegregation,
                    'CategoryName' => $categoryName,
                    'SubCategoryName' => $subcategoryName
                );
            }


            $result = $this->db->insert('productcategories', $data);

            if ($result) {

                $response = array(
                    'success' => true,
                    'message' => 'Category created successfully'
                );
            } else {

                $response = array(
                    'success' => false,
                    'message' => 'An error occurred while creating the category'
                );
            }
            // Send the JSON response back to the client
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        }
    }

    public function create_product()
    {

        $vendor_data = $this->session->userdata('vendor_data');
        if (isset($vendor_data)) {
            // Prepare the form data for database insertion
            $formData = array(
                'ProductCategoryName' => $this->input->post('CategoryID'),
                'ProductName' => $this->input->post('ProductName'),
                'ProductShades' => $this->input->post('colorCodes'),
                'ProductTypes' => $this->input->post('productTypesData'),
                'ProductSizes' => $this->input->post('productSizesData'),

                'ProductLongDesc' => $this->input->post('ProductDescription'),
                'ProductCaution' => $this->input->post('Caution'),
                'ProductIngredients' => $this->input->post('Ingredients'),
                'ProductAdditionalInformation' => $this->input->post('AdditionalInformation'),
            );

            if ($this->db->insert('products', $formData)) {
            } else {
                echo "Insert failed: " . $this->db->error();
            }




            $response = array(
                'success' => true,
                'message' => 'Product created successfully'
            );
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        }
    }



    public function uploadImage()
    {
        $this->load->library('upload');
        $productId = $this->input->post('productId');

        // Define upload configuration
        $config['upload_path'] = './assets/uploads/products/';
        $config['allowed_types'] = 'gif|jpeg|jpg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = true;

        // Initialize the upload library with the configuration
        $this->upload->initialize($config);

        // Retrieve uploaded files
        $files = $_FILES['ProductImages'];

        // Number of files uploaded
        $num_files = count($files['name']);

        // Array to store uploaded file names
        $uploadedFileNames = array();

        // Perform individual file uploads
        $uploadErrors = array();

        for ($i = 0; $i < $num_files; $i++) {
            $_FILES['userfile'] = array(
                'name' => $files['name'][$i],
                'type' => $files['type'][$i],
                'tmp_name' => $files['tmp_name'][$i],
                'error' => $files['error'][$i],
                'size' => $files['size'][$i]
            );

            if (!$this->upload->do_upload('userfile')) {
                // Handle the upload error for this file
                $uploadErrors[] = $this->upload->display_errors();
            } else {
                // File uploaded successfully
                $uploadData = $this->upload->data();
                $file_name = $uploadData['file_name'];

                // Add the file name to the array
                $uploadedFileNames[] = $file_name;
            }
        }

        if (!empty($uploadErrors)) {
            // Handle the upload errors as needed
            foreach ($uploadErrors as $error) {
                echo "Upload failed: $error<br>";
            }
        } else {
            // All files uploaded successfully

            // Combine uploaded file names into a comma-separated string
            $fileNamesString = implode(',', $uploadedFileNames);


            $data = array(
                'ProductImage' => $fileNamesString
            );

            $this->db->where('ProductID', $productId);
            $this->db->update('products', $data);
            $response = array('success' => true, 'message' => 'Images added/updated successfully');
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        }
    }


    public function addPromoCode()
    {
        $vendor_data = $this->session->userdata('vendor_data');
        if (isset($vendor_data)) {
            // Get data from the form
            $promoCode = $this->input->post('PromoCode');
            $promoCodeAmount = $this->input->post('PromoCodeAmount');
            $description = $this->input->post('Description');
            $startDate = $this->input->post('StartDate');
            $expiryDate = $this->input->post('ExpiryDate');

            // Insert data into the database
            $data = array(
                'VendorID' => $vendor_data['vendor_id'],
                'promo_code' => $promoCode,
                'promo_code_amount' => $promoCodeAmount,
                'description' => $description,
                'start_date' => $startDate,
                'expiry_date' => $expiryDate
            );

            $this->db->insert('promo_codes', $data);

            // Send a response (e.g., success or error message)
            if ($this->db->affected_rows() > 0) {
                $response = array('success' => true, 'message' => 'Promo code added successfully.');
            } else {
                $response = array('success' => false, 'message' => 'Failed to add promo code.');
            }

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        }
    }

    public function importProducts()
    {

        $this->load->library('excel');
        if (isset($_FILES["uploadExcel"]["name"])) {
            $path = $_FILES["uploadExcel"]["tmp_name"];

            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $ProductName = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $ProductLongDesc = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    // $ProductCaution = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    // $ProductIngredients = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    // $ProductAdditionalInformation = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $ProductShades = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $ProductTypes = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $ProductSizes = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $ProductCategoryName = $worksheet->getCellByColumnAndRow(2, $row)->getValue();


                    // Split the string into an array using the comma as a separator
                    $shadesArray = explode(',', $ProductShades);

                    // Modify each value by adding '#' and single quotes
                    $modifiedShadesArray = array_map(function ($shade) {
                        return   trim($shade); // Assuming you want to remove leading/trailing spaces
                    }, $shadesArray);

                    // Convert the modified array into a single string, enclosed in square brackets
                    $modifiedProductShades = '[' . implode(',', $modifiedShadesArray) . ']';



                    $data[] = array('ProductName' => $ProductName, 'ProductLongDesc' => $ProductLongDesc, 'ProductShades' => $modifiedProductShades, 'ProductTypes' => $ProductTypes,  'ProductSizes' => $ProductSizes,  'ProductCategoryName' => $ProductCategoryName);
                }
            }

           

            if ($this->db->insert_batch('products', $data)) {
                $response = array('success' => true, 'message' => 'Product Added');
            }else{
                $response = array('success' => false, 'message' => 'Failed to add products.');
            }

            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

        }
    }
}
