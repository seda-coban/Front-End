<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/products',[ProductController::class,'getAllProduct']);
Route::get('/products/{id}',[ProductController::class,'getProductByID']);
Route::get('/addproduct',[ProductController::class,'AddProduct']);
Route::get('/updateproduct/{id}',[ProductController::class,'updateProduct']);
Route::get('/deleteproduct/{id}',[ProductController::class,'deleteProduct']);



