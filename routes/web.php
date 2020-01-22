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

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/add-product', 'HomeController@addproduct');

Route::get('/product', 'ProductController@index')->name('product');
Route::post('/add/product', 'ProductController@store');
Route::get('/edit/{product}', 'ProductController@edit');
Route::patch('/edit/product/{product}', 'ProductController@update');
Route::post('/detailproduct', 'HomeController@detailproduct');