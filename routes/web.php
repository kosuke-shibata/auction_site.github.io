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

Route::get('/', 'ItemController@index');

Route::get('/item/{work}', 'ItemController@detail');

Route::post('/item/{work}', 'ItemController@cart_in');


Route::get('/create', 'ExhibitionController@create');

Route::post('/create', 'ExhibitionController@store');

Route::get('/create/{work}', 'ExhibitionController@display');

Route::get('/create/{work}/edit', 'ExhibitionController@edit');

Route::put('/create/{work}', 'ExhibitionController@update_create');

Route::delete('/create/{work}', 'ExhibitionController@delete');


Route::get('/myprofile/{user}', 'AccountController@myprofile');

Route::get('/profile/{user}', 'AccountController@profile');

Route::get('/myprofile/{user}/edit', 'AccountController@edit_profile');

Route::put('/myprofile/{user}/edit', 'AccountController@update_profile');

Route::get('/myprofile/{user}/edit_credit', 'AccountController@edit_credit');

Route::put('/myprofile/{user}/edit_credit', 'AccountController@update_credit');

Route::get('/myprofile/{user}/edit_login', 'AccountController@edit_login');

Route::put('/myprofile/{user}/edit_login', 'AccountController@update_login');


Route::get('/cart', 'PurchaseController@cart');

Route::post('/cart', 'PurchaseController@order_in');

Route::get('/order', 'PurchaseController@order');

Route::post('/order', 'PurchaseController@order_decision_in');

Route::get('/order/decision', 'PurchaseController@order_decision');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
