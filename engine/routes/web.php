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
use App\Http\Controllers\admin\admSellerController;

// WebsiteController
use App\Http\Controllers\web\webHomeController;
use App\Http\Controllers\web\webProductController;
use App\Http\Controllers\web\webProductCatController;
use App\Http\Controllers\web\webSitemapController;

// Login Admin
use App\Http\Controllers\loginAdmin\loginAdminController;


// Amp 
Route::get('/amp', [webHomeController::class, 'index'])->name('amp.home.index');

// Website
Route::get('product/search/', [webProductController::class, 'search'])->name('web.product.search');
Route::get('/', [webHomeController::class, 'index'])->name('web.home.index');
Route::get('product/', [webProductController::class, 'index'])->name('web.product.index');
Route::get('product/{slug}/', [webProductController::class, 'show'])->name('web.product.show');

Route::get('/sitemap.xml', [webSitemapController::class, 'index'])->name('web.sitemap.index');


Route::get('category/{slug}', [webProductCatController::class, 'show'])->name('web.productCat.show');

// Login Admin
Route::get('login-admin', [loginAdminController::class, 'showFormLogin'])->name('login.admin.showFormLogin');
Route::post('login-admin', [loginAdminController::class, 'login'])->name('login.admin');
Route::get('login-admin/logout', [loginAdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {

    // Admin Route
    Route::get('admin/dashboard/', [admDashboardController::class, 'index'])->name('admin.dashboard.index');

    // Product
    Route::get('admin/product/', [admProductController::class, 'index'])->name('admin.product.index');
    Route::get('admin/product/create/', [admProductController::class, 'create'])->name('admin.product.create');
    Route::post('admin/product/store/', [admProductController::class, 'store'])->name('admin.product.store');
    Route::get('admin/product/show/{id}/', [admProductController::class, 'show'])->name('admin.product.show');
    Route::get('admin/product/edit/{id}/', [admProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('admin/product/update/{id}/', [admProductController::class, 'update'])->name('admin.product.update');
    Route::post('admin/product/add-size/{id}/', [admProductController::class, 'addSize'])->name('admin.product.addSize');
    Route::get('admin/product/search/', [admProductController::class, 'search'])->name('admin.product.search');

    // Product Cat
    Route::resource('admin/product-category', admProductCatController::class)->names('admin.productCat');
    Route::get('admin/product-category/t/search', [admProductCatController::class, 'search'])->name('admin.productCat.search');
    Route::resource('admin/product-type', admProductTypeController::class)->names('admin.productType');
    Route::resource('admin/product-gender', admProductGenderController::class)->names('admin.productGender');

    // Order
    Route::resource('admin/order', admOrderController::class)->names('admin.order');
    Route::get('admin/order/t/new-order', [admOrderController::class, 'indexNewOrder'])->name('admin.order.indexNewOrder');
    Route::get('admin/order/{id}/show-add-cart', [admOrderController::class, 'showAddCart'])->name('admin.order.showAddCart');
    Route::get('admin/order/t/checkout', [admOrderController::class, 'checkout'])->name('admin.order.checkout');

    // Cart
    Route::post('admin/product/product-cart/{id}/add', [admCartController::class, 'cart_store'])->name('admin.cart.store');
    Route::get('admin/product/product-cart/destroy', [admCartController::class, 'cart_destroy'])->name('admin.cart.destroy');

    // Seller
    Route::get('admin/seller', [admSellerController::class, 'index'])->name('admin.seller.index');

});
