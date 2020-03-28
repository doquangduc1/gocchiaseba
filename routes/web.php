<?php

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
    return view('admin.products.index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('blog', 'admin\BlogController');
    Route::resource('user', 'admin\UserController');
  Route::resource('products', 'admin\ProductController');

});

