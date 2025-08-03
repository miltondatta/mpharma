<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('get_sub_category', 'GeneralController@GetSubCategory');
    $router->get('get_vendor_sub_category', 'GeneralController@GetVendorSubCategory');
    $router->get('view_orders/{id}', 'ViewOrderController@index');
    $router->get('view_prescription/{id}', 'ViewOrderController@view_prescription');
    $router->resource('prescription', PrescriptionController::class);
    $router->resource('notification', NotificationController::class);
    $router->resource('customers', CustomerController::class);
    $router->resource('privacy_policies', PrivacyPolicyController::class);
    $router->resource('faq-categories', FaqCategoryController::class);
    $router->resource('faqs', FaqController::class);
    $router->resource('user-types', UserTypeController::class);
    $router->resource('customer_app_settings', CustomerAppSettingController::class);
    $router->resource('payment_modes', PaymentModeController::class);
    $router->resource('payment-types', PaymentTypeController::class);
    $router->resource('customer-wallet-histories', CustomerWalletHistoryController::class);
    $router->resource('statuses', StatusController::class);
    $router->resource('fcm-notifications', FcmNotificationController::class);
    $router->resource('delivery_boys', DeliveryBoyController::class);
    $router->resource('vendors', VendorController::class);
    $router->resource('vendor-documents', VendorDocumentController::class);
    $router->resource('vendor-withdrawals', VendorWithdrawalController::class);
    $router->resource('vendor-earnings', VendorEarningController::class);
    $router->resource('vendor-wallet-histories', VendorWalletHistoryController::class);
    $router->resource('delivery_boy_app_settings', DeliveryBoyAppSettingController::class);
    $router->resource('vendor_app_settings', VendorAppSettingController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('unit_measurements', UnitMeasurementController::class);
    $router->resource('sub_categories', SubCategoryController::class);
    $router->resource('products', ProductController::class);
    $router->resource('orders', OrderController::class);
    $router->resource('vendor-promo-codes', VendorPromoCodeController::class);
    $router->resource('promo-types', PromoTypeController::class);
    $router->resource('order-statuses', OrderStatusController::class);
    $router->resource('import-excels', ImportExcelController::class);
    $router->resource('terms-and-conditions', TermsAndConditionController::class);
});







