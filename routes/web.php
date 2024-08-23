<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;


Route::get('/', function () {
    return view('welcome');
});




Route::resource('customers', CustomerController::class);
Route::resource('categories', CategoryController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('products', ProductController::class);
Route::resource('purchases', PurchaseController::class);
Route::resource('sales', SaleController::class);
