<?php

use Illuminate\Support\Facades\Route;
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

//Laravel 8(New)
Route::get('/products', [ProductsController::class, 'index']);

//Laravel 8 (Also New)
Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Before Laravel 8
Route::get('/products', 'ProductsController@index');

//firstproject.com == /
//firstproject.com/users == /users