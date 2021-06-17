<?php

use Illuminate\Support\Facades\Route;
// Admin Controller
use App\Http\Controllers\admin\admCartController;
use App\Http\Controllers\admin\admDashboardController;
use App\Http\Controllers\admin\admProductCatController;
use App\Http\Controllers\admin\admProductController;
use App\Http\Controllers\admin\admProductGenderController;
use App\Http\Controllers\admin\admOrderController;
use App\Http\Controllers\admin\admProductTypeController;

// WebsiteController
use App\Http\Controllers\web\webHomeController;
use App\Http\Controllers\web\webProductController;

// Login Admin
use App\Http\Controllers\loginAdmin\loginAdminController;
// Website Route
Route::get('/', [webHomeController::class, 'index'])->name('web.home.index');
Route::resource('product', webProductController::class)->names('web.product');


// Login Admin
Route::get('login-admin', [loginAdminController::class, 'index'])->name('login.admin.index');

// Admin Route
Route::resource('admin/dashboard', admDashboardController::class)->only('index')->names('admin.dashboard');

// Product
Route::resource('admin/product', admProductController::class)->names('admin.product');
Route::post('admin/product/add-size/{id}', 'App\Http\Controllers\admin\admProductController@add_size')->name('admin.product.addSize');
Route::resource('admin/product-category', admProductCatController::class)->names('admin.productCat');
Route::resource('admin/product-type', admProductTypeController::class)->names('admin.productType');
Route::resource('admin/product-gender', admProductGenderController::class)->names('admin.productGender');

Route::resource('admin/product-order', admOrderController::class)->names('admin.order');
Route::get('admin/product-order/{id}/show-add-cart', 'App\Http\Controllers\admin\admOrderController@show_addcart')->name('admin.order.showAddCart');

// Cart
Route::post('admin/product/product-cart/{id}/add', 'App\Http\Controllers\admin\admCartController@cart_store')->name('admin.cart.store');
Route::get('admin/product/product-cart/checkout', 'App\Http\Controllers\admin\admCartController@cart_checkout')->name('admin.cart.checkout');
Route::get('admin/product/product-cart/destroy', 'App\Http\Controllers\admin\admCartController@cart_destroy')->name('admin.cart.destroy');
