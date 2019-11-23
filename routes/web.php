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
    Route::get('/Show', function () {
return view('Panels.MedicineList.medListShow');
});

Route::resource('pos','PosController');
Route::resource('inventory','InventoryController');
Route::resource('medicine','MedicineController');
Route::resource('pharmacyMedicine','PharmacyMedicineController');


