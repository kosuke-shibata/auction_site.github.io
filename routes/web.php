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

Route::post('/item/{work}', 'TransactionController@cart_in');

Route::get('/create', 'TransactionController@create');

Route::post('/create', 'TransactionController@store');

Route::get('/create/{work}', 'TransactionController@display');

Route::get('/create/{work}/edit', 'TransactionController@edit_create');

Route::put('/create/{work}', 'TransactionController@update_create');

Route::delete('/create/{work}', 'TransactionController@delete');

Route::get('/myprofile/{user}', 'TransactionController@myprofile');

Route::get('/profile/{user}', 'TransactionController@profile');

Route::get('/cart/{user_id}', 'TransactionController@cart');

Route::post('/cart/{user_id}', 'TransactionController@order_in');

Route::get('/order/{user_id}', 'TransactionController@order');

Route::post('/order/{user_id}', 'TransactionController@order_decision_in');

Route::get('/order/{user_id}/decision', 'TransactionController@order_decision');

Route::get('/myprofile/{user}/edit', 'TransactionController@edit');

Route::put('/myprofile/{user}/edit', 'TransactionController@update');

Route::get('/myprofile/{user}/edit_credit', 'TransactionController@edit_credit');

Route::put('/myprofile/{user}/edit_credit', 'TransactionController@update_credit');

Route::get('/myprofile/{user}/edit_email&password', 'TransactionController@edit_login');

Route::put('/myprofile/{user}/edit_email&password', 'TransactionController@update_login');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
