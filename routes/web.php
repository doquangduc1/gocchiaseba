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
    return view('welcome');
});
//Route::get('admin.index', ['as' => 'admin.index', 'uses' => 'UserController@index']);
Route::group(['prefix'=>'admin'],function() {
    Route::get('admin.register', [ 'as' => 'register', 'uses' => 'UserController@register']);
  //    Route::post('store',[ 'as' => 'store', 'uses' =>  'UserController@store']);
    Route::get('user.login',[ 'as'   => 'user.login', 'uses' => 'UserController@login']);
      Route::get('admin.layout',[ 'as' => 'admin.layout', 'uses' => 'UserController@layout']);
  //    route::post('login',[ 'as' => 'login', 'uses' => 'UserController@postlogin']);
  //    Route::get('logout',[ 'as' => 'logout', 'uses' => 'UserController@logout']);
  //    Route::resource('user', 'userController');
      Route::get('user.create',[ 'as' => 'user.create', 'uses' => 'UserController@create']);
      Route::get('user.index',[ 'as' => 'user.index', 'uses' => 'UserController@index']);
      Route::resource('products', 'ProductController');
  });
  Route::get('user.login',[ 'as'   => 'user.login', 'uses' => 'UserController@login']);
   Route::get('logout',[ 'as' => 'logout', 'uses' => 'UserController@logout']);
   Route::get('user.register',[ 'as'   => 'user.register', 'uses' => 'UserController@register']);
   Route::get('blog.index',[ 'as'   => 'blog.index', 'uses' => 'BlogController@index']);
   Route::get('products.create',[ 'as'   => 'products.create', 'uses' => 'ProductController@create']);
   Route::get('blog.add',[ 'as'   => 'blog.add', 'uses' => 'BlogController@add']);
