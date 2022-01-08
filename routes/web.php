<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/public/product',[ProductController::class,'paginatedProduct']);
// Route::get('/api/public/product/category/{products:category_id}',[ProductController::class,'byCategory']);
Route::get('/api/public/product/category/{categoryId}',[ProductController::class,'byCategory']);