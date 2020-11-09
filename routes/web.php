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

Route::get('/airtanah', function() {
    return view('airtanah');
});

Route::get('/hiburan', function() {
    return view('hiburan');
});

Route::get('/hotel', function() {
    return view('hotel');
});

Route::get('/mineral', function() {
    return view('mineral');
});

Route::get('/parkir', function() {
    return view('parkir');
});

Route::get('/peneranganjalan', function() {
    return view('peneranganjalan');
});

Route::get('/reklame', function() {
    return view('reklame');
});

Route::get('/restoran', function() {
    return view('restoran');
});

Route::get('/sarangburungwalet', function() {
    return view('sarangburungwalet');
});



Route::get('/dashboard', function () {
    return view('layouts.master');
});

Route::get('/arsip', function () {
    return view('arsip-pages.hotel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

