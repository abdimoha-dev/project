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

###############################################################
######################ADMIN####################################
###############################################################

Route::prefix('admin')->group(function () {
    Route::get('categories','Admin\StockController@addCategory');
    Route::post('categories','Admin\StockController@saveCategory');

    Route::get('stock', 'Admin\StockController@showStockForm');
    Route::post('stock', 'Admin\StockController@saveStock');
});
