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

// Route::get('/work', 'AuctionController@index');

Route::get('/', 'TransactionController@index');

Route::get('/item/', 'TransactionController@detail');

Route::get('/create', 'TransactionController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
