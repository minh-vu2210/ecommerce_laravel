<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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

Route::get('/login', function () {
    return view('login');
});


Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductsController::class,'index']);
Route::get('/detail/{id}',[ProductsController::class,'detail']);

Route::get('/register',[UserController::class,'register']);
Route::post('/createAccount',[UserController::class,'createAccount']);


Route::post('/add_to_cart',[ProductsController::class,'addToCart']);
Route::get('/cart',[ProductsController::class,'listItemInCart']);
// Route::get('/buy_now',[ProductsController::class,'buyNow']);
Route::get('/checkout',[ProductsController::class,'checkout']);
Route::post('/placeOrder',[ProductsController::class,'placeOrder']);
Route::get('/allOrders',[ProductsController::class,'allOrders']);



Route::post('/removeProduct',[ProductsController::class,'removeItemFromCart']);
Route::get('/logout',[UserController::class,'logout']);

