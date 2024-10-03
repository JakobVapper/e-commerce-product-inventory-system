<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
});