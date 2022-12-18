<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::group(['prefix' => 'auth'], function () {
    Auth::routes();
});

Route::group(['prefix' => 'excel', 'as' => 'excel.barang.', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'barang'], function () {
        Route::get('/export', 'Commodities\CommodityExportImportController@export')->name('export');
        Route::post('/import', 'Commodities\CommodityExportImportController@import')->name('import');
    });
});

Route::group(['prefix' => 'excel', 'as' => 'excel.bahan.', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'barang'], function () {
        Route::get('/export-bahan', 'Materials\MaterialExportImportController@export')->name('export');
        Route::post('/import-bahan', 'Materials\MaterialExportImportController@import')->name('import');
    });
});

Route::group(['prefix' => 'excel', 'as' => 'excel.kunjungan.', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'kunjungan'], function () {
        Route::get('/export-kunjungan', 'Visits\VisitExportController@export')->name('export');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/settings', "SettingController@index")->name('settings');
    Route::post('/settings', "SettingController@simpan")->name('settings.simpan');

    Route::group(['prefix' => 'barang', 'as' => 'barang.'], function () {
        Route::get('/print', 'Commodities\PdfController@generatePdf')->name('print');
        Route::get('/print/{id}', "Commodities\PdfController@generatePdfOne")->name('print.one');
    });

    Route::group(['prefix' => 'bahan', 'as' => 'bahan.'], function () {
        Route::get('/print-bahan', 'Materials\PdfController@generatePdf')->name('print');
        Route::get('/print-bahan/{id}', "Materials\PdfController@generatePdfOne")->name('print.one');
    });

    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::resource('/barang', 'Commodities\CommodityController');
    Route::resource('/bahan', 'Materials\materialController');
    Route::resource('/asal-barang', 'SchoolOperationalAssistances\SchoolOperationalAssistance');
    Route::resource('/ruang', 'CommodityLocations\CommodityLocationController');
    Route::resource('/kunjungan', 'Visits\Visit');

    Route::resource('/commodities/json', 'Commodities\Ajax\CommodityAjaxController');
    Route::resource('/materials/json', 'Materials\Ajax\MaterialsAjaxController');
    Route::resource('/school-operational/json', 'SchoolOperationalAssistances\Ajax\SchoolOperationalAssistanceAjaxController');
    Route::resource('/commodity-locations/json', 'CommodityLocations\Ajax\CommodityLocationAjaxController');
    Route::resource('/kunjungan/json', 'Visits\Ajax\VisitAjaxController');
});

//Visitor
Route::get('/pengunjung', 'VisitController@index')->name('pengunjung');
Route::post('/pengunjung', "VisitController@store")->name('pengunjung.store');