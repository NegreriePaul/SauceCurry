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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', ['middleware' => 'guest', 'uses' => 'BookController@getIndex']);

Route::get('auth/register', 'AuthAuthController@getRegister');

Route::post('auth/register', 'AuthAuthController@postRegister');

Route::get('auth/login', 'AuthAuthController@getLogin');

Route::post('auth/login', 'AuthAuthController@postLogin');

Route::get('auth/logout', 'AuthAuthController@getLogout');

Route::get('/cart', array('before'=>'auth.basic','as'=>'cart','uses'=>'CartController@getIndex'));

Route::post('/cart/add', array('before'=>'auth.basic','uses'=>'CartController@postAddToCart'));

Route::get('/cart/delete/{id}', array('before'=>'auth.basic','as'=>'delete_book_from_cart','uses'=>'CartController@getDelete'));
