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

Route::get('/item/{work}', 'TransactionController@detail');

Route::get('/create', 'TransactionController@create');

Route::post('/create', 'TransactionController@store');

Route::get('/create/{work}', 'TransactionController@display');

Route::get('/myprofile/{user}', 'TransactionController@myprofile');

Route::get('/profile/{user}', 'TransactionController@profile');

Route::get('/cart', 'TransactionController@cart');

Route::get('/order', 'TransactionController@order');

Route::post('/order', 'TransactionController@order_decision');

Route::get('/edit', 'TransactionController@edit');

Route::get('/edit/credit', 'TransactionController@edit_credit');

Route::get('/edit/login', 'TransactionController@edit_login');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
