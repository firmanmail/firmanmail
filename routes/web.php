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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('index', 'TransaksiController@index')->name('backend.transaksi.index');
    Route::get('create', 'TransaksiController@create')->name('backend.transaksi.create');
    Route::post('store', 'TransaksiController@store')->name('backend.transaksi.store');
});