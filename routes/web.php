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

Route::prefix('admin')->middleware('auth')->group(function () {
    //Show Categories Form
    Route::get('categories', 'Admin\StockController@addCategory');
    Route::post('categories', 'Admin\StockController@saveCategory');

    //show assets form
    Route::get('stock', 'Admin\StockController@showStockForm');
    Route::post('stock', 'Admin\StockController@saveStock');
//show all user
    Route::get('employees', 'Admin\DistributeController@showAllUser');
//assign to specific user
    Route::get('assign/{userId}', 'Admin\DistributeController@showAssignForm');
    Route::post('assign', 'Admin\DistributeController@distribute');

    //Respond to employee asset request
    Route::get('response','Admin\DistributeController@showResponseForm');

    //show assigned assets
    Route::get('assets/assigned', 'Admin\DistributeController@showAssignedAssets');

    //show all assets borrow requests
    Route::get('borrow/requests', 'Admin\AssetController@showBorrowRequests');

    Route::get('pdf', 'PdfGenerateController@pdf');
});

Route::prefix('employee')->middleware('auth')->group(function () {
    //show assets assigned
    Route::get('myitems', 'Employee\AssetController@showMyAssets');
//request an asset
    Route::get('borrow', 'Employee\AssetController@borrowAsset');
    Route::post('borrow', 'Employee\AssetController@saveAsset');

});


