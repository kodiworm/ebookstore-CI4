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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//custom routes
//product routes
$route['products'] = 'product/products';
$route['products/addToCart/(:num)'] = 'product/products/addToCart/$1';
$route['login'] = 'products/customerLogin';

//cart routes
$route['cart'] = 'product/cart';

//checkout routes
$route['checkout/orderSuccess/(:num)'] = 'product/checkout/orderSuccess/$1';

//sells url routes//
$route['sells'] = 'sell/sells/index';
$route['sells/verifyLogin'] = 'sell/sells/verifyLogin';
$route['sells/register'] = 'sell/sells/register';
$route['sells/saveSeller'] = 'sell/sells/saveSeller';
$route['sells/dashboard'] = 'sell/sells/dashboard';

//admin url routes
$route['admin/verify_admin'] = 'admins/admin/verify_admin';
$route['admin/dashboard'] = 'admins/admin/index';
$route['admin/add_product'] = 'admins/admin/add_product';
$route['admin/delete_prod/(:num)'] = 'admins/dashboard/delete_prod/$1';
$route['admin/books'] = 'admins/dashboard/books';
$route['admin/orders'] = 'admins/dashboard/all_orders';
$route['admin/orders/items/(:num)'] = 'admins/dashboard/order_items/$1';
$route['admin/active_cust'] = 'admins/dashboard/display_cust';
$route['admin/sellers'] = 'admins/dashboard/display_sellers';
$route['admin/delete_sellers/(:num)'] = 'admins/dashboard/delete_sellers/$1'; 
$route['admin/sign_out'] = 'admins/admin/sign_out';
