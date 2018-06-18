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

Route::get('/catalogo', 'fashionController@catalogo');
Route::get('/product/1', 'fashionController@product1');
Route::get('/product/2', 'fashionController@product2');

Route::get('/layout', function () {
    return view('layout');
});
