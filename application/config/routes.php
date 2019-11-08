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





$route['trang-chu'] = "home/index";

 $route['default_controller'] = "home/index";

$route['thong-ke-online'] = 'visitorcontroller';

$route['404_override'] = 'error';

//$route['([a-zA-Z0-9_-]+)'] = "home/index/$1";

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

$route['vnadmin/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)'] = 'admin/$1/$2';

$route['vnadmin/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)/([a-zA-Z0-9_-]+)'] = 'admin/$1/$2/$3';

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/



$route['vnadmin'] = 'admin/defaults/index';

$route['vnadmin/doi-mat-khau'] = 'admin/admin/admin_change_password';

$route['vnadmin/site_option'] = 'admin/admin/site_option';

$route['vnadmin/huong-dan-su-dung'] = 'admin/admin/documentation';

//Modules=================================================================

$route['vnadmin/danh-sach-modules'] = 'admin/modules/list';

$route['vnadmin/quan-ly-modules'] = 'admin/modules/modulemanager';

$route['vnadmin/edit-modules/(:num)'] = 'admin/modules/modulemanager/$1';

$route['vnadmin/delete-module/(:num)'] = 'admin/modules/delete/$1';



//phan quyen admin

$route['vnadmin/admin-permission'] = 'admin/admin/admin_permission';

$route['vnadmin/admin-permission-edit/(:num)'] = 'admin/admin/admin_permission/$1';

$route['vnadmin/admin-reset-pass/(:num)'] = 'admin/admin/reset_pass/$1';

$route['vnadmin/admin-permission-delete/(:num)'] = 'admin/admin/delete_acc/$1';



// save menu



$route['vnadmin/menu/savelist'] = 'admin/menu/saveList';



/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/**User login router***/

$route['lien-he'] = 'contact';

$route['contact'] = 'contact';

// tim kiem

$route['tim-kiem'] = 'search/searchPro';

$route['search'] = 'search/searchPro';

// add email

$route['lien-he/email'] = 'contact/add_email';

// binh luan

$route['gop-y'] = 'comment';

/*++++++++ san pham ++++++*/


$route['danh-muc/([a-zA-Z0-9_-]+)'] = 'products/pro_bycategory/$1/$2';

$route['danh-muc/([a-zA-Z0-9_-]+)/(:num)'] = 'products/pro_bycategory/$1/$2/$3';

$route['san-pham/([a-zA-Z0-9_-]+)'] = 'products/detail/$1/$2';

$route['san-pham'] = 'products/all_products';

$route['tin-rao'] = 'raovat2/all_products';

$route['sua-tin-rao/([a-zA-Z0-9_-]+)'] = 'raovat/edit/$1';

$route['xoa-tin-rao/([a-zA-Z0-9_-]+)'] = 'raovat2/delete_raovat_once/$1';

$route['tin-dang'] = 'raovat/add_raovat';

$route['quan-ly-tin'] = 'raovat2/quan_ly_tin';

$route['tin-rao-chi-tiet/([a-zA-Z0-9_-]+)'] = 'raovat2/detail2/$1';

$route['bai-dang-chi-tiet/([a-zA-Z0-9_-]+)'] = 'raovat2/bai_dang/$1';

$route['tat-ca-phu-tung'] = 'phu_tung/all_products';

$route['chi-tiet-phu-tung/([a-zA-Z0-9_-]+)'] = 'phu_tung/detail/$1';

$route['danh-muc-phu-tung/([a-zA-Z0-9_-]+)'] = 'phu_tung/pro_bycategory/$1';

/*++++++++ tin tuc ++++++*/

$route['danh-muc-tin/([a-zA-Z0-9_-]+)'] = 'news/new_bycategory/$1';

$route['danh-muc-tin/([a-zA-Z0-9_-]+)/(:num)'] = 'news/new_bycategory/$1/$2';

$route['new/([a-zA-Z0-9_-]+)'] = 'news/detail/$1';

$route['tin-tuc/([a-zA-Z0-9_-]+)'] = 'news/detail/$1';

$route['tin-tuc'] = 'news/new_all';

/*++++++++ tin rao ++++++*/

$route['rao-vat/([a-zA-Z0-9_-]+)'] = 'raovat/tinrao_bycategory/$1';

$route['rao-vat/([a-zA-Z0-9_-]+)/(:num)'] = 'raovat/tinrao_bycategory/$1/$2';

$route['tin-rao/([a-zA-Z0-9_-]+)'] = 'raovat/detail/$1';

$route['tin-rao/([a-zA-Z0-9_-]+)'] = 'raovat2/detail/$1';

$route['user-info'] = 'login/users_info';

$route['tim-kiem-tin-rao'] = 'search/filter1';

$route['tim-kiem-theo-key'] = 'search/searchPro1';
$route['xe-cu'] = 'products/all_oldcar';
$route['danh-muc-xe-cu/([a-zA-Z0-9_-]+)'] = 'products/pro_by_oldcar/$1';
$route['thong-tin-xe-cu/([a-zA-Z0-9_-]+)'] = 'products/detail_oldcar/$1';
$route['xe-moi'] = 'products/all_products';
$route['xe-moi/([a-zA-Z0-9_-]+)'] = 'products/pro_bycategory/$1';
$route['thong-tin-xe-moi/([a-zA-Z0-9_-]+)'] = 'products/detail/$1';




/*++++++++ xuat xứ ++++++*/

$route['xuat-xu/([a-zA-Z0-9_-]+)'] = 'locale/local_bycategory/$1';

$route['xuat-xu/([a-zA-Z0-9_-]+)/(:num)'] = 'locale/local_bycategory/$1/$2';

/*++++++++ thuong hieu ++++++*/

$route['thuong-hieu/([a-zA-Z0-9_-]+)'] = 'brand/brand_bycategory/$1';

$route['thuong-hieu/([a-zA-Z0-9_-]+)/(:num)'] = 'brand/brand_bycategory/$1/$2';

/*++++++++ trang noi dung page ++++++*/

$route['page/([a-zA-Z0-9_-]+)'] = 'pages/page_content/$1';

/*++++++++++++++*/

$route['danh-sach-don-hang'] = 'users/orders';

$route['san-pham-yeu-thich'] = 'users/myWishlist';

/*+++++++ tag product +++++++*/

$route['tags-pro/(:any)'] = 'tags/tags_pro/$1';

$route['tags-new/(:any)'] = 'tags/tags_new/$1';

/*++++++++ media ++++++*/

$route['media/([a-zA-Z0-9_-]+)'] = 'media/category/$1/$2';

$route['media/([a-zA-Z0-9_-]+)/(:num)'] = 'media/pro_bycategory/$1/$2/$3';

$route['media-detail/([a-zA-Z0-9_-]+)-(:num)'] = 'media/detail/$1/$2';

/*++++++++ video ++++++*/

$route['video/([a-zA-Z0-9_-]+)'] = 'video/pro_bycategory/$1/$2';

$route['video/([a-zA-Z0-9_-]+)/(:num)'] = 'video/pro_bycategory/$1/$2/$3';

$route['video-detail/([a-zA-Z0-9_-]+)-(:num)'] = 'video/detail/$1/$2';

/**User front end**/

$route['dang-ky'] = 'users_frontend/createpost';

$route['dang-ky-thanh-cong'] = 'users_frontend/success_signup';

$route['kich-hoat-tai-khoan'] = 'users_frontend/userActive';

$route['kich-hoat-thanh-cong'] = 'users_frontend/success_active_user';



$route['dang-nhap'] = 'users_frontend/login';

$route['dang-xuat'] = 'users_frontend/logout';

$route['thong-tin-tai-khoan'] = 'users_frontend/acount';

$route['doi-mat-khau'] = 'users/changePass';

$route['them-san-pham-yeu-thich'] = 'users_frontend/addWishList';

$route['don-hang'] = 'users_frontend/acount_order';

// thay doi mat khau khi quen mat khau

$route['changepass']="users_frontend/changePass";

$route['customer-forgotpass'] = 'users_frontend/forgotPass';

$route['thay-doi-mat-khau-thanh-cong'] = 'users_frontend/success_changepass';

//$route['users/check-email'] = 'users_frontend/check_email';

$route['users/check-register-user'] = 'users_frontend/checkRegisterUser';

$route['users/check-pass'] = 'users_frontend/check_old_pass';

$route['users/check-register-user'] = 'users_frontend/checkRegisterUser';



// gio hang

$route['shipping'] = 'cart/order';

$route['gio-hang/(:num)'] = 'cart/addCartItemSelect/$1';

$route['onepage'] = 'cart/sendOnpage';

$route['dat-hang-thanh-cong'] = 'cart/order_success';





// $route['thanh-toan-dat-hang'] = 'shoppingcart/Payment'

$route['cap-nhat-gio-hang'] = 'cart/update';

$route['add-to-cart'] = 'cart/add';

$route['xoa-gio-hang'] = 'cart/deleteone/';

$route['xoa-toan-bo-gio-hang'] = 'cart/deleteAll';

$route['addCart_now'] = 'cart/addCart_now';
$route['update_ajax'] = 'cart/update_ajax';

$route['addCart_now_ajax'] = 'cart/addCart_now_ajax';




// $route['payment'] = 'cart/Payment';



// $route['check-code'] = 'cart/checkCode';

// $route['check-coupon'] = 'cart/checkCoupon';



//************ them moi router viet o day *****************************************************************************

//filtes

$route['loc-san-pham'] = 'filters/filter';

$route['login-facebook'] = 'fblogin/login';

$route['get-data-search'] = 'search/autoComplete';

$route['chuoi-cua-hang'] = 'stores/listStore';

$route['xem-tat-ca'] = 'home/view_all';

$route['them-thuoc-tinh'] = 'users/add_value';

//comment

$route['gui-binh-luan'] = 'comment/Add_comment_binhluan';

$route['danh-sach-binh-luan'] = 'comment/getcomments';



// phan trang ajax

$route['phan-trang-home'] = 'ajax/ajax/phan_trang_pro_home';



//Phan mem//ket thuc phan mem

