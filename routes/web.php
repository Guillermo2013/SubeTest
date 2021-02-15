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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/create', 'ProductsController@create')->name('createProduct');

Route::post('/product/create', 'ProductsController@post')->name('postProduct');

Route::get('/product/{id}', 'ProductsController@show')->name('showProduct');

Route::get('/product/update/{id}', 'ProductsController@update')->name('updateProduct');

Route::post('/product/update/{id}', 'ProductsController@postUpdate')->name('postUpdateProduct');

Route::get('/message', 'Message_UsersController@index')->name('messageIndex');

