<?php

use Illuminate\Support\Facades\Route;
// Admin Controller
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\productCatController;

// WebsiteController
use App\Http\Controllers\website\homeController;

// Website Route
Route::get('/', [homeController::class, 'index'])->name('website.home');

// Admin Route
Route::resource('admin/dashboard', dashboardController::class)->only('index')->names('admin.dashboard');
Route::resource('admin/product', productController::class)->only(['index','show'])->names('admin.product');
Route::resource('admin/product-category', productCatController::class)->names('admin.productCat');
