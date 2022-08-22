<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\blogdetailsController;
use App\Http\Controllers\frontend\checkoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\shopdetailsController;
use App\Http\Controllers\frontend\shopingcartController;
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
Route::get('/',[HomeController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/blogdetails',[blogdetailsController::class, 'index']);
Route::get('/checkout',[checkoutController::class, 'index']);
Route::get('/contact',[contactController::class, 'index']);
Route::get('/shop',[shopController::class, 'index']);
Route::get('/shopdetails',[shopdetailsController::class, 'index']);
Route::get('/shopingcart',[shopingcartController::class, 'index']);
