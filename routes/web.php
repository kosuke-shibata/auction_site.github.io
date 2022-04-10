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

Route::get('/', 'WorkController@index');

Route::get('/work/{work}', 'WorkController@detail');


Route::get('/create', 'CreateController@create');

Route::post('/create', 'CreateController@store');

Route::get('/create/{work}', 'CreateController@display');

Route::get('/create/{work}/edit', 'CreateController@edit');

Route::put('/create/{work}', 'CreateController@update');

Route::delete('/create/{work}', 'CreateController@delete');


Route::get('/myprofile/{user}', 'UserController@myprofile');

Route::get('/profile/{user}', 'UserController@profile');

Route::get('/myprofile/{user}/edit', 'UserController@edit_profile');

Route::put('/myprofile/{user}/edit', 'UserController@update_profile');

Route::get('/myprofile/{user}/edit_credit', 'UserController@edit_credit');

Route::put('/myprofile/{user}/edit_credit', 'UserController@update_credit');

Route::get('/myprofile/{user}/edit_login', 'UserController@edit_login');

Route::put('/myprofile/{user}/edit_login', 'UserController@update_login');


Route::post('/work/{work}', 'CartController@cart_in');

Route::get('/cart', 'CartController@cart');


Route::post('/cart', 'OrderController@order_in');

Route::get('/order', 'OrderController@order');

Route::post('/order', 'OrderController@order_decision_in');

Route::get('/order/decision/{work}', 'OrderController@order_decision');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
