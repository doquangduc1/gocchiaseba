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
routeAlias::group(['prefix'=>'admin'],function() {
    routeAlias::get('admin.register', [ 'as' => 'register', 'uses' => 'UserController@register']);
  //    Route::post('store',[ 'as' => 'store', 'uses' =>  'UserController@store']);
    routeAlias::get('user.login',[ 'as'   => 'user.login', 'uses' => 'UserController@login']);
      routeAlias::get('admin.layout',[ 'as' => 'admin.layout', 'uses' => 'UserController@layout']);
  //    route::post('login',[ 'as' => 'login', 'uses' => 'UserController@postlogin']);
  //    Route::get('logout',[ 'as' => 'logout', 'uses' => 'UserController@logout']);
  //    routeAlias::resource('user', 'userController');
      routeAlias::get('user.create',[ 'as' => 'user.create', 'uses' => 'UserController@create']);
      routeAlias::get('user.index',[ 'as' => 'user.index', 'uses' => 'UserController@index']);
      routeAlias::resource('products', 'ProductController');
  });
  routeAlias::get('user.login',[ 'as'   => 'user.login', 'uses' => 'UserController@login']);
   routeAlias::get('logout',[ 'as' => 'logout', 'uses' => 'UserController@logout']);
   routeAlias::get('user.register',[ 'as'   => 'user.register', 'uses' => 'UserController@register']);
   routeAlias::get('blog.index',[ 'as'   => 'blog.index', 'uses' => 'BlogController@index']);
   routeAlias::get('products.create',[ 'as'   => 'products.create', 'uses' => 'ProductController@create']);
   routeAlias::get('blog.add',[ 'as'   => 'blog.add', 'uses' => 'BlogController@add']);
