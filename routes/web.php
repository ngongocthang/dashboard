<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::resource('products', ProductController::class, ['names' => 'products']);
Route::resource('categories', CategoryController::class, ['names' => 'categories']);
Route::resource('orders', OrderController::class, ['names' => 'orders']);
Route::resource('order-items', OrderItemController::class, ['names' => 'order-items']);
Route::resource('users', UserController::class, ['names' => 'users']);
Route::resource('profile', ProfileController::class, ['names' => 'profile']);

//product sale
Route::get('product-sale', [ProductController::class, 'getProductSales'])->name('product-sale');
Route::get('show-sale/{id}', [ProductController::class, 'showProductSales'])->name('show-sale');
Route::get('create-sale', [ProductController::class, 'createProductSales'])->name('create-sale');
Route::post('store-sale', [ProductController::class, 'storeProductSales'])->name('store-sale');
Route::get('edit-sale/{id}', [ProductController::class, 'editProductSales'])->name('edit-sale');
Route::put('update-sale/{id}', [ProductController::class, 'updateProductSales'])->name('update-sale');
Route::delete('delete-sale/{id}', [ProductController::class, 'deleteProductSales'])->name('delete-sale');

//product sold
Route::get('product-sold', [ProductController::class, 'getProductSolds'])->name('product-sold');
Route::get('show-sold/{id}', [ProductController::class, 'showProductSolds'])->name('show-sold');
Route::get('edit-sold/{id}', [ProductController::class, 'editProductSolds'])->name('edit-sold');
Route::put('update-sold/{id}', [ProductController::class, 'updateProductSolds'])->name('update-sold');
Route::delete('delete-sold/{id}', [ProductController::class, 'deleteProductSolds'])->name('delete-sold');





