<?php

use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\customerController;
use App\Http\Controllers\admin\SuppliersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\productController;


Route::get('/products/{id}/confirm-delete', [productController::class, 'confirmDelete'])->name('product.confirm-delete');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/principal', function () {
    return view('admin.principal');
})->name("admin.principal");




//Route::get('/test/{x}/{y}', function ($x, $y) {
//  $result = $x + $y;
//return view("product.test", ["r" => $result]);
//});

Route::resource('admin/product', productController::class);
Route::resource('admin/customer', customerController::class);
Route::resource('admin/Suppliers', SuppliersController::class);
Route::resource('admin/category', categoryController::class);
Route::get('/search', [ProductController::class, 'index'])->name('search');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/products/{id}', [productController::class, 'update'])->name('product.update');
Route::delete('/products/{id}', [productController::class, 'destroy'])->name('product.destroy');
Route::post('/products/{id}/confirm-delete', [productController::class, 'confirmDelete'])->name('product.confirm-delete');
Route::delete('/products/{id}/confirm-delete', [productController::class, 'processDeleteConfirmation'])->name('product.process-delete-confirmation');
Route::get('/products/{id}/details', [productController::class, 'details'])->name('product.details');

//Route::get('/test', function () {
//  $message = "Bonjour tt le monde ";
//return view('product.test', ["m" => $message]);
//});