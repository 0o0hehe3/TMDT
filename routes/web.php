<?php

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

Route::prefix('admin')->group(function (){
	Route::get('/', 'HomeController@homeAdmin')->name('homeAdmin');
	Route::get('/product/add', 'ProductController@add')->name('products.add');
	Route::get('/category/add','CategoryController@add')->name('category.add');
	Route::get('/login', 'HomeController@login')->name('admin.login');
	Route::post('doLogin', 'HomeController@doLogin')->name('admin.doLogin');
	Route::get('/register', 'HomeController@register')->name('admin.register');
	Route::get('/logout', 'HomeController@logout')->name('admin.logout');
	Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/', function () {
    return view('index');
});

Auth::routes();

