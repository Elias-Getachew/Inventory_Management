<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
Route::resource('customers', CustomerController::class);
Route::resource('categories', CategoryController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('products', ProductController::class);
Route::resource('purchases', PurchaseController::class);
Route::resource('sales', SaleController::class);



// // Protect routes with role middleware example to be done

//     Route::resource('customers', CustomerController::class)->middleware('role:admin');
//     Route::resource('categories', CategoryController::class)->middleware('role:admin');
//     Route::resource('suppliers', SupplierController::class)->middleware('role:admin');
//     Route::resource('products', ProductController::class)->middleware('role:admin,staff');
//     Route::resource('purchases', PurchaseController::class)->middleware('role:admin,staff');
//     Route::resource('sales', SaleController::class)->middleware('role:admin,staff,customer');

});

require __DIR__.'/auth.php';
