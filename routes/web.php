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

Route::get('/addProducts', function () {
    return view('Panels.addProducts');
});

Route::get('/productList', function () {
    return view('Panels.productList');
});

Route::get('/', function () {
    return view('Panels.homePage');
});

Route::get('addProducts','MedicineListController@index')->name('addProducts');
Route::get('addProducts/getdata','MedicineListController@getdata')->name('addProducts.getdata');
Route::post('addProducts/postdata','MedicineListController@postdata')->name('addProducts.postdata');