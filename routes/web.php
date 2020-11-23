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
    return view('welcome');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

/////////AIR TANAH///////////
Route::get('/airtanah', function() {
    return view('arsip-pages.airtanah');
});
Route::get('/airtanah', 'AirtanahController@index');
Route::post('/airtanah/create','AirtanahController@create');
Route::get('/airtanah/{id}/edit','AirtanahController@edit');
Route::post('/airtanah/{id}/update','AirtanahController@update');
Route::get('/airtanah/{id}/delete','AirtanahController@delete');
Route::get('/{urlName}/{file}/download','AirtanahController@downloadFilePdf');

/////////HIBURAN///////////
Route::get('/hiburan', function() {
    return view('arsip-pages.hiburan');
});
Route::get('/hiburan', 'HiburanController@index');
Route::post('/hiburan/create','HiburanController@create');
Route::get('/hiburan/{id}/edit','HiburanController@edit');
Route::post('/hiburan/{id}/update','HiburanController@update');
Route::get('/hiburan/{id}/delete','HiburanController@delete');
Route::get('/{urlName}/{file}/download','HiburanController@downloadFilePdf');

/////////HOTEL///////////
Route::get('/hotel', function() {
    return view('arsip-pages.hotel');
});
Route::get('/hotel', 'HotelController@index');
Route::post('/hotel/create','HotelController@create');
Route::get('/hotel/{id}/edit','HotelController@edit');
Route::post('/hotel/{id}/update','HotelController@update');
Route::get('/hotel/{id}/delete','HotelController@delete');
Route::get('/{urlName}/{file}/download','HotelController@downloadFilePdf');

/////////MINERAL///////////
Route::get('/mineral', function() {
    return view('arsip-pages.mineral');
});
Route::get('/mineral', 'MineralController@index');
Route::post('/mineral/create','MineralController@create');
Route::get('/mineral/{id}/edit','MineralController@edit');
Route::post('/mineral/{id}/update','MineralController@update');
Route::get('/mineral/{id}/delete','MineralController@delete');
Route::get('/{urlName}/{file}/download','MineralController@downloadFilePdf');

/////////PARKIR///////////
Route::get('/parkir', function() {
    return view('arsip-pages.parkir');
});
Route::get('/parkir', 'ParkirController@index');
Route::post('/parkir/create','ParkirController@create');
Route::get('/parkir/{id}/edit','ParkirController@edit');
Route::post('/parkir/{id}/update','ParkirController@update');
Route::get('/parkir/{id}/delete','ParkirController@delete');
Route::get('/{urlName}/{file}/download','ParkirController@downloadFilePdf');

/////////PENERANGAN JALAN///////////
Route::get('/peneranganjalan', function() {
    return view('arsip-pages.peneranganjalan');
});
Route::get('/peneranganjalan', 'PeneranganjalanController@index');
Route::post('/peneranganjalan/create','PeneranganjalanController@create');
Route::get('/peneranganjalan/{id}/edit','PeneranganjalanController@edit');
Route::post('/peneranganjalan/{id}/update','PeneranganjalanController@update');
Route::get('/peneranganjalan/{id}/delete','PeneranganjalanController@delete');
Route::get('/{urlName}/{file}/download','PeneranganjalanController@downloadFilePdf');

/////////REKLAME///////////
Route::get('/reklame', function() {
    return view('arsip-pages.reklame');
});
Route::get('/reklame', 'ReklameController@index');
Route::post('/reklame/create','ReklameController@create');
Route::get('/reklame/{id}/edit','ReklameController@edit');
Route::post('/reklame/{id}/update','ReklameController@update');
Route::get('/reklame/{id}/delete','ReklameController@delete');
Route::get('/{urlName}/{file}/download','ReklameController@downloadFilePdf');

/////////RESTORAN///////////
Route::get('/restoran', function() {
    return view('arsip-pages.restoran');
});
Route::get('/restoran', 'RestoranController@index');
Route::post('/restoran/create','RestoranController@create');
Route::get('/restoran/{id}/edit','RestoranController@edit');
Route::post('/restoran/{id}/update','RestoranController@update');
Route::get('/restoran/{id}/delete','RestoranController@delete');
Route::get('/{urlName}/{file}/download','RestoranController@downloadFilePdf');

/////////SARANG BURUNG WALET///////////
Route::get('/sarangburungwalet', function() {
    return view('arsip-pages.sarangburungwalet');
});
Route::get('/sarangburungwalet', 'SarangburungwaletController@index');
Route::post('/sarangburungwalet/create','SarangburungwaletController@create');
Route::get('/sarangburungwalet/{id}/edit','SarangburungwaletController@edit');
Route::post('/sarangburungwalet/{id}/update','SarangburungwaletController@update');
Route::get('/sarangburungwalet/{id}/delete','SarangburungwaletController@delete');
Route::get('/{urlName}/{file}/download','SarangburungwaletController@downloadFilePdf');

/////////SURAT MASUK///////////
Route::get('/suratmasuk', 'SuratmasukController@index');

/////////SURAT KELUAR///////////
Route::get('/suratkeluar', 'SuratkeluarController@index');

/////////SURAT KEPUTUSAN//////////
Route::get('/suratkeputusan', 'SuratkeputusanController@index');