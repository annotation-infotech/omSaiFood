<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// User Module 
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['forgotpassword'] = 'auth/forgotpassword';

$route['beds'] = 'user/beds';
$route['sofa'] = 'user/sofa';
$route['mattressess'] = 'user/mattressess';
$route['kids'] = 'user/kids';
$route['contact'] = 'user/contact';
$route['profile'] = 'user/profile';

$route['productdetails/(:num)'] = 'user/productdetails/$1';
$route['cart'] = 'user/cart';
$route['checkout'] = 'user/checkout';
$route['orderOverview/(:num)/(:num)'] = 'user/orderOverview/$1/$2';
$route['offlineOrder/(:num)'] = 'user/offlineOrder/$1';

// Vendor Module 
$route['vendorlogin'] = 'VendorAuth/login';
$route['createVendor'] = 'vendor/createVendor';
$route['createCategory'] = 'vendor/createCategory';
$route['createProducts'] = 'vendor/createProducts';
$route['productPrice'] = 'vendor/productPrice';
$route['uploadProductsImages'] = 'vendor/uploadProductsImages';
$route['createPromoCode'] = 'vendor/createPromoCode';
$route['productList'] = 'vendor/productList';
$route['UploadCategories'] = 'vendor/UploadCategories';
$route['UploadProducts'] = 'vendor/UploadProducts';


// Admin Module 
$route['dashboard'] = 'admin/index';
$route['users'] = 'admin/users';
$route['createVendor'] = 'admin/createVendor';
$route['vendorList'] = 'admin/vendorList';
// $route['createCategory'] = 'admin/createCategory';
// $route['createProducts'] = 'admin/createProducts';
// $route['productPrice'] = 'admin/productPrice';
// $route['uploadProductsImages'] = 'admin/uploadProductsImages';
// $route['createPromoCode'] = 'admin/createPromoCode';
// $route['productList'] = 'admin/productList';
$route['trendingBestSales'] = 'admin/trendingBestSales';

