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

Route::get('/', 'HomeController@catalogue')->name('catalogue');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/product/create', 'ProductsController@create')->name('createProduct')->middleware('auth');

Route::post('/product/create', 'ProductsController@post')->name('postProduct')->middleware('auth');

Route::get('/product/{id}', 'ProductsController@show')->name('showProduct')->middleware('auth');

Route::get('/product/update/{id}', 'ProductsController@update')->name('updateProduct')->middleware('auth');

Route::post('/product/update/{id}', 'ProductsController@postUpdate')->name('postUpdateProduct')->middleware('auth');

Route::get('/message', 'Message_UsersController@index')->name('messageIndex')->middleware('auth');

Route::post('/send/message', 'Message_UsersController@create')->name('sendMessage');
