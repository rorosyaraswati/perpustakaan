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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['buku'] =tubes::class.'/buku'; 
$route['delete_databuku/(:any)'] =tubes::class."/delete_databuku/$1";
$route['add_databuku/(:any)'] =tubes::class."/add_databuku/$1";
$route['save_databuku'] =tubes::class."/save_databuku";
$route['edit_dtbk/(:any)'] =tubes::class."/edit_dtbk/$1";
$route['update_databuku/(:any)'] =tubes::class."/update_databuku/$1";

$route['peminjam_view'] =tubes::class.'/peminjam_view'; 
$route['delete_peminjam/(:any)'] =tubes::class."/delete_peminjam/$1";
$route['add_peminjam/(:any)'] =tubes::class."/add_peminjam/$1";
$route['save_peminjam'] =tubes::class."/save_peminjam";
$route['edit_pnjm/(:any)'] =tubes::class."/edit_pnjm/$1";
$route['update_peminjam/(:any)'] =tubes::class."/update_peminjam/$1";


$route['admin'] =tubes::class."/admin";
$route['penjaga'] =tubes::class."/penjaga";
$route['member'] =tubes::class."/member";
$route['login'] =tubes::class."/login";
$route['checkLogin'] =tubes::class."/checkLogin";
$route['logout'] =tubes::class."/logout";
$route['transaksi'] =tubes::class."/transaksi";
$route['password'] =tubes::class."/password";
$route['users'] =tubes::class."/users";
$route['save_transaksibuku'] =tubes::class."/save_transaksibuku";
$route['update_transaksibuku/(:any)'] =tubes::class."/update_transaksibuku/$1";
$route['delete_transaksibuku/(:any)'] =tubes::class."/delete_transaksibuku/$1";
$route['save_user'] =tubes::class."/save_user";
$route['update_user/(:any)'] =tubes::class."/update_user/$1";
$route['delete_user/(:any)'] =tubes::class."/delete_user/$1";