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

Route::get('/dashboard', function () {
    return view('layouts.master');
});

/////////AIR TANAH///////////
Route::get('/airtanah', function() {
    return view('arsip-pages.airtanah');
});
Route::get('/add-airtanah', function() {
    return view('crud-airtanah.add-airtanah');
});

/////////HIBURAN///////////
Route::get('/hiburan', function() {
    return view('arsip-pages.hiburan');
});
Route::get('/add-hiburan', function() {
    return view('crud-hiburan.add-hiburan');
});

/////////HOTEL///////////
Route::get('/hotel', function() {
    return view('arsip-pages.hotel');
});
Route::get('/add-hotel', function() {
    return view('crud-hotel.add-hotel');
});

/////////MINERAL///////////
Route::get('/mineral', function() {
    return view('arsip-pages.mineral');
});
Route::get('/add-mineral', function() {
    return view('crud-mineral.add-mineral');
});

/////////PARKIR///////////
Route::get('/parkir', function() {
    return view('arsip-pages.parkir');
});
Route::get('/add-parkir', function() {
    return view('crud-parkir.add-parkir');
});

/////////PENERANGAN JALAN///////////
Route::get('/peneranganjalan', function() {
    return view('arsip-pages.peneranganjalan');
});
Route::get('/add-peneranganjalan', function() {
    return view('crud-peneranganjalan.add-peneranganjalan');
});

/////////REKLAME///////////
Route::get('/reklame', function() {
    return view('arsip-pages.reklame');
});
Route::get('/add-reklame', function() {
    return view('crud-reklame.add-reklame');
});

/////////RESTORAN///////////
Route::get('/restoran', function() {
    return view('arsip-pages.restoran');
});
Route::get('/add-restoran', function() {
    return view('crud-restoran.add-restoran');
});

/////////SARANG BURUNG WALET///////////
Route::get('/sarangburungwalet', function() {
    return view('arsip-pages.sarangburungwalet');
});
Route::get('/add-walet', function() {
    return view('crud-walet.add-walet');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

// Route Controller
Route::get('/hotel', 'HotelController@index');
Route::post('/hotel/create','HotelController@create');
Route::get('/hotel/{id}/edit','HotelController@edit');
Route::post('/hotel/{id}/update','HotelController@update');
Route::get('/hotel/{id}/delete','HotelController@delete');