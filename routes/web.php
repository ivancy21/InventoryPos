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
    return view('homePage');
});

Route::get('/payment', function () {
    return view('Panels.Pos.payment');
});

Route::get('/pos', function () {
    return view('Panels.Pos.index');
});
Route::resource('pos','PosController');
Route::resource('medicine','MedicineController');
Route::resource('pharmacyMedicine','PharmacyMedicineController');
Route::get('addProducts','MedicineListController@index')->name('addProducts');
Route::get('addProducts/getdata','MedicineListController@getdata')->name('addProducts.getdata');
Route::post('addProducts/postdata','MedicineListController@postdata')->name('addProducts.postdata');


Route::get('/MedList', function () {
    return view('Panels.MedicineList.medListIndex');
});


Route::get('/MedCreate', function () {
    return view('Panels.MedicineList.medListCreate');
});

Route::get('/MedShow', function () {
    return view('Panels.MedicineList.medListShow');
});