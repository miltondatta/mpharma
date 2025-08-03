<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//CRON
Route::get('partner_cron', 'App\Http\Controllers\VendorOrderController@partner_cron');


//FINAL ROUTES
Route::post('customer/add_address', 'App\Http\Controllers\AddressController@add_address');
Route::post('customer/update_address', 'App\Http\Controllers\AddressController@update');
Route::post('customer/all_addresses', 'App\Http\Controllers\AddressController@all_addresses');
Route::post('customer/edit_address', 'App\Http\Controllers\AddressController@edit');
Route::post('customer/check_phone', 'App\Http\Controllers\CustomerController@check_phone');
Route::post('customer/reset_password', 'App\Http\Controllers\CustomerController@reset_password');
Route::post('customer/get_order_list', 'App\Http\Controllers\VendorOrderController@get_customer_order_list');
Route::post('customer/vendor_rating', 'App\Http\Controllers\VendorOrderController@vendor_rating');
Route::post('customer/login', 'App\Http\Controllers\CustomerController@login');
Route::post('customer/register', 'App\Http\Controllers\CustomerController@register');
Route::post('customer/forget_password', 'App\Http\Controllers\CustomerController@forget_password');
Route::post('customer/get_payment_mode', 'App\Http\Controllers\CustomerController@get_payment_mode');
Route::post('customer/vendor_list', 'App\Http\Controllers\VendorOrderController@vendor_list');
Route::post('customer/get_module_banners', 'App\Http\Controllers\CustomerController@get_module_banners');
Route::post('customer/get_promo', 'App\Http\Controllers\CustomerController@get_promo');
Route::post('customer/check_promo', 'App\Http\Controllers\CustomerController@check_promo');
Route::post('customer/get_taxes', 'App\Http\Controllers\CustomerController@get_taxes');
Route::post('customer/pharmacy_order', 'App\Http\Controllers\VendorOrderController@place_order');
Route::post('customer/vendor_sub_category', 'App\Http\Controllers\VendorOrderController@vendor_sub_category');
Route::post('customer/vendor_category', 'App\Http\Controllers\VendorOrderController@vendor_category');
Route::post('customer/vendor_products', 'App\Http\Controllers\VendorOrderController@vendor_products');
Route::post('customer/profile_picture', 'App\Http\Controllers\CustomerController@profile_picture');
Route::post('customer/profile_picture_update', 'App\Http\Controllers\CustomerController@profile_picture_update');
Route::post('customer/get_profile', 'App\Http\Controllers\CustomerController@get_profile');
Route::post('customer/profile_update', 'App\Http\Controllers\CustomerController@profile_update');
Route::get('customer_app_setting', 'App\Http\Controllers\AppSettingController@customer_app_setting');
Route::post('customer/upload_prescription', 'App\Http\Controllers\VendorOrderController@upload_prescription');
Route::post('vendor/address', 'App\Http\Controllers\VendorController@vendor_address');
Route::post('vendor/detail', 'App\Http\Controllers\VendorController@vendor_detail');
Route::get('customer/get_blog', 'App\Http\Controllers\CustomerController@get_blog');
Route::post('vendor/profile_update', 'App\Http\Controllers\VendorController@profile_update');
Route::post('vendor/profile_picture', 'App\Http\Controllers\VendorController@profile_picture');
Route::post('vendor/profile_picture_update', 'App\Http\Controllers\VendorController@profile_picture_update');
Route::post('vendor/forget_password', 'App\Http\Controllers\VendorController@forget_password');
Route::post('vendor/reset_password', 'App\Http\Controllers\VendorController@reset_password');
Route::post('vendor/document_details', 'App\Http\Controllers\VendorController@document_details');
Route::post('vendor/earning', 'App\Http\Controllers\VendorController@vendor_earning');
Route::post('vendor/wallet', 'App\Http\Controllers\VendorController@vendor_wallet');
Route::post('vendor/upload', 'App\Http\Controllers\VendorController@upload');
Route::post('vendor/document_upload', 'App\Http\Controllers\VendorController@document_upload');
Route::post('get_faq', 'App\Http\Controllers\FaqController@get_faq');
Route::post('vendor/withdrawal_request', 'App\Http\Controllers\VendorController@vendor_withdrawal_request');
Route::post('vendor/withdrawal_history', 'App\Http\Controllers\VendorController@vendor_withdrawal_history');
Route::post('vendor/dashboard', 'App\Http\Controllers\VendorController@vendor_dashboard');
Route::post('vendor/change_online_status', 'App\Http\Controllers\VendorController@change_online_status');
Route::post('vendor/get_order_list', 'App\Http\Controllers\VendorOrderController@get_vendor_order_list');
Route::post('vendor/get_order_detail', 'App\Http\Controllers\VendorOrderController@get_vendor_order_detail');
Route::post('get_notifications', 'App\Http\Controllers\CommonController@get_notifications');
Route::post('vendor/check_phone', 'App\Http\Controllers\VendorController@check_phone');
Route::post('vendor/register','App\Http\Controllers\VendorController@register');
Route::post('vendor/login','App\Http\Controllers\VendorController@login');
Route::post('get_privacy_policy', 'App\Http\Controllers\PrivacyPolicyController@get_privacy_policy');
Route::get('vendor_app_setting', 'App\Http\Controllers\AppSettingController@vendor_app_setting');
Route::post('delivery_boy/login', 'App\Http\Controllers\DeliveryBoyController@login');
Route::post('delivery_boy/check_phone', 'App\Http\Controllers\DeliveryBoyController@check_phone');
Route::post('delivery_boy/reset_password', 'App\Http\Controllers\DeliveryBoyController@reset_password');
Route::post('delivery_boy/forget_password', 'App\Http\Controllers\DeliveryBoyController@forget_password');
Route::post('delivery_boy/profile_update', 'App\Http\Controllers\DeliveryBoyController@profile_update');
Route::post('delivery_boy/get_profile', 'App\Http\Controllers\DeliveryBoyController@get_profile');
Route::post('delivery_boy/profile_picture', 'App\Http\Controllers\DeliveryBoyController@profile_picture');
Route::post('delivery_boy/change_online_status', 'App\Http\Controllers\DeliveryBoyController@change_online_status');
Route::post('delivery_boy/dashboard', 'App\Http\Controllers\DeliveryBoyController@dashboard');
Route::post('delivery_boy/get_new_status', 'App\Http\Controllers\VendorOrderController@get_new_status');
Route::post('delivery_boy/get_order_list', 'App\Http\Controllers\VendorOrderController@get_deliveryboy_order_list');
Route::post('delivery_boy/get_order_detail', 'App\Http\Controllers\VendorOrderController@get_deliveryboy_order_detail');
Route::post('deliveryboy/accept', 'App\Http\Controllers\VendorOrderController@partner_accept');
Route::post('deliveryboy/reject', 'App\Http\Controllers\VendorOrderController@partner_reject');
Route::post('order_status_change', 'App\Http\Controllers\VendorOrderController@order_status_change');
Route::get('delivery_boy_app_setting', 'App\Http\Controllers\AppSettingController@delivery_boy_app_setting');
Route::post('get_terms_and_conditions', 'App\Http\Controllers\PrivacyPolicyController@get_terms_and_conditions');
