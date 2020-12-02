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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard',function(){
        return view('layouts.master');
    })->name('dashboard');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    
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
    Route::get('/suratmasuk', function() {
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
    Route::post('/suratmasuk/create','SuratmasukController@create');
    Route::get('/suratmasuk/{id}/edit','SuratmasukController@edit');
    Route::post('/suratmasuk/{id}/update','SuratmasukController@update');
    Route::get('/suratmasuk/{id}/delete','SuratmasukController@delete');
    Route::get('/{urlName}/{file}/download','SuratmasukController@downloadFilePdf');
    
    /////////SURAT KELUAR///////////
    Route::get('/suratkeluar', 'SuratkeluarController@index');
    Route::post('/suratkeluar/create','SuratkeluarController@create');
    Route::get('/suratkeluar/{id}/edit','SuratkeluarController@edit');
    Route::post('/suratkeluar/{id}/update','SuratkeluarController@update');
    Route::get('/suratkeluar/{id}/delete','SuratkeluarController@delete');
    Route::get('/{urlName}/{file}/download','SuratkeluarController@downloadFilePdf');
    
    /////////SURAT KEPUTUSAN//////////
    Route::get('/suratkeputusan', 'SuratkeputusanController@index');
    Route::post('/suratkeputusan/create','SuratkeputusanController@create');
    Route::get('/suratkeputusan/{id}/edit','SuratkeputusanController@edit');
    Route::post('/suratkeputusan/{id}/update','SuratkeputusanController@update');
    Route::get('/suratkeputusan/{id}/delete','SuratkeputusanController@delete');
    Route::get('/{urlName}/{file}/download','SuratkeputusanController@downloadFilePdf');
    
    /////////SURAT TEGURAN//////////
    Route::get('/suratteguran', 'SuratteguranController@index');
    Route::post('/suratteguran/create','SuratteguranController@create');
    Route::get('/suratteguran/{id}/edit','SuratteguranController@edit');
    Route::post('/suratteguran/{id}/update','SuratteguranController@update');
    Route::get('/suratteguran/{id}/delete','SuratteguranController@delete');
    Route::get('/{urlName}/{file}/download','SuratteguranController@downloadFilePdf');
    
    
    /////////BERITA ACARA PEMASANGAN//////////
    Route::get('/suratpemasangan', 'SuratpemasanganController@index');
    Route::post('/suratpemasangan/create','SuratpemasanganController@create');
    Route::get('/suratpemasangan/{id}/edit','SuratpemasanganController@edit');
    Route::post('/suratpemasangan/{id}/update','SuratpemasanganController@update');
    Route::get('/suratpemasangan/{id}/delete','SuratpemasanganController@delete');
    Route::get('/{urlName}/{file}/download','SuratpemasanganController@downloadFilePdf');
    
    /////////BERITA ACARA PENARIKAN//////////
    Route::get('/suratpenarikan', 'SuratpenarikanController@index');
    Route::post('/suratpenarikan/create','SuratpenarikanController@create');
    Route::get('/suratpenarikan/{id}/edit','SuratpenarikanController@edit');
    Route::post('/suratpenarikan/{id}/update','SuratpenarikanController@update');
    Route::get('/suratpenarikan/{id}/delete','SuratpenarikanController@delete');
    Route::get('/{urlName}/{file}/download','SuratpenarikanController@downloadFilePdf');
});

Route::get('/register','AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register','AuthController@postRegister')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login','AuthController@postLogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/dashboard',function(){
    return view('layouts.master');
})->middleware('auth')->name('dashboard');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

/////////AIR TANAH///////////
Route::get('/airtanah', 'AirtanahController@index')->name('airtanah');
Route::post('/airtanah/create','AirtanahController@create')->name('airtanah.create');
Route::get('/airtanah/{id}/edit','AirtanahController@edit')->name('airtanah.edit');
Route::post('/airtanah/{id}/update','AirtanahController@update')->name('airtanah.update');
Route::get('/airtanah/{id}/delete','AirtanahController@delete')->name('airtanah.del');
Route::get('/{urlName}/{file}/download','AirtanahController@downloadFilePdf')->name('airtanah.file');

/////////HIBURAN///////////
Route::get('/hiburan', 'HiburanController@index')->name('hiburan');
Route::post('/hiburan/create','HiburanController@create')->name('hiburan.create');
Route::get('/hiburan/{id}/edit','HiburanController@edit')->name('hiburan.edit');
Route::post('/hiburan/{id}/update','HiburanController@update')->name('hiburan.update');
Route::get('/hiburan/{id}/delete','HiburanController@delete')->name('hiburan.delete');
Route::get('/{urlName}/{file}/download','HiburanController@downloadFilePdf')->name('hiburan.file');

/////////HOTEL///////////
Route::get('/hotel', 'HotelController@index')->name('hotel');
Route::post('/hotel/create','HotelController@create')->name('hotel.create');
Route::get('/hotel/{id}/edit','HotelController@edit')->name('hotel.edit');
Route::post('/hotel/{id}/update','HotelController@update')->name('hotel.update');
Route::get('/hotel/{id}/delete','HotelController@delete')->name('hotel.delete');
Route::get('/{urlName}/{file}/download','HotelController@downloadFilePdf')->name('hotel.file');

/////////MINERAL///////////
Route::get('/mineral', 'MineralController@index')->name('mineral');
Route::post('/mineral/create','MineralController@create')->name('mineral.create');
Route::get('/mineral/{id}/edit','MineralController@edit')->name('mineral.edit');
Route::post('/mineral/{id}/update','MineralController@update')->name('mineral.update');
Route::get('/mineral/{id}/delete','MineralController@delete')->name('mineral.del');
Route::get('/{urlName}/{file}/download','MineralController@downloadFilePdf')->name('mineral.file');

/////////PARKIR///////////
Route::get('/parkir', 'ParkirController@index')->name('parkir');
Route::post('/parkir/create','ParkirController@create')->name('parkir.create');
Route::get('/parkir/{id}/edit','ParkirController@edit')->name('parkir.edit');
Route::post('/parkir/{id}/update','ParkirController@update')->name('parkir.update');
Route::get('/parkir/{id}/delete','ParkirController@delete')->name('parkir.del');
Route::get('/{urlName}/{file}/download','ParkirController@downloadFilePdf')->name('parkir.file');

/////////PENERANGAN JALAN///////////
Route::get('/peneranganjalan', 'PeneranganjalanController@index')->name('peneranganjalan');
Route::post('/peneranganjalan/create','PeneranganjalanController@create')->name('peneranganjalan.create');
Route::get('/peneranganjalan/{id}/edit','PeneranganjalanController@edit')->name('peneranganjalan.edit');
Route::post('/peneranganjalan/{id}/update','PeneranganjalanController@update')->name('peneranganjalan.update');
Route::get('/peneranganjalan/{id}/delete','PeneranganjalanController@delete')->name('peneranganjalan.del');
Route::get('/{urlName}/{file}/download','PeneranganjalanController@downloadFilePdf')->name('peneranganjalan.file');

/////////REKLAME///////////
Route::get('/reklame', 'ReklameController@index')->name('reklame');
Route::post('/reklame/create','ReklameController@create')->name('reklame.create');
Route::get('/reklame/{id}/edit','ReklameController@edit')->name('reklame.edit');
Route::post('/reklame/{id}/update','ReklameController@update')->name('reklame.update');
Route::get('/reklame/{id}/delete','ReklameController@delete')->name('reklame.del');
Route::get('/{urlName}/{file}/download','ReklameController@downloadFilePdf')->name('reklame.file');

/////////RESTORAN///////////
Route::get('/restoran', 'RestoranController@index')->name('restoran');
Route::post('/restoran/create','RestoranController@create')->name('restoran.create');
Route::get('/restoran/{id}/edit','RestoranController@edit')->name('restoran.edit');
Route::post('/restoran/{id}/update','RestoranController@update')->name('restoran.update');
Route::get('/restoran/{id}/delete','RestoranController@delete')->name('restoran.del');
Route::get('/{urlName}/{file}/download','RestoranController@downloadFilePdf')->name('restoran.file');

/////////SARANG BURUNG WALET///////////
Route::get('/sarangburungwalet', 'SarangburungwaletController@index')->name('sarangburungwalet');
Route::post('/sarangburungwalet/create','SarangburungwaletController@create')->name('sarangburungwalet.create');
Route::get('/sarangburungwalet/{id}/edit','SarangburungwaletController@edit')->name('sarangburungwalet.edit');
Route::post('/sarangburungwalet/{id}/update','SarangburungwaletController@update')->name('sarangburungwalet.update');
Route::get('/sarangburungwalet/{id}/delete','SarangburungwaletController@delete')->name('sarangburungwalet.del');
Route::get('/{urlName}/{file}/download','SarangburungwaletController@downloadFilePdf')->name('sarangburungwalet.file');

/////////SURAT MASUK///////////
Route::get('/suratmasuk', 'SuratmasukController@index')->name('suratmasuk');
Route::post('/suratmasuk/create','SuratmasukController@create')->name('suratmasuk.create');
Route::get('/suratmasuk/{id}/edit','SuratmasukController@edit')->name('suratmasuk.edit');
Route::post('/suratmasuk/{id}/update','SuratmasukController@update')->name('suratmasuk.update');
Route::get('/suratmasuk/{id}/delete','SuratmasukController@delete')->name('suratmasuk.del');
Route::get('/{urlName}/{file}/download','SuratmasukController@downloadFilePdf')->name('suratmasuk.file');

/////////SURAT KELUAR///////////
Route::get('/suratkeluar', 'SuratkeluarController@index')->name('suratkeluar');
Route::post('/suratkeluar/create','SuratkeluarController@create')->name('suratkeluar.create');
Route::get('/suratkeluar/{id}/edit','SuratkeluarController@edit')->name('suratkeluar.edit');
Route::post('/suratkeluar/{id}/update','SuratkeluarController@update')->name('suratkeluar.update');
Route::get('/suratkeluar/{id}/delete','SuratkeluarController@delete')->name('suratkeluar.del');
Route::get('/{urlName}/{file}/download','SuratkeluarController@downloadFilePdf')->name('suratkeluar.file');

/////////SURAT KEPUTUSAN//////////
Route::get('/suratkeputusan', 'SuratkeputusanController@index')->name('suratkeputusan');
Route::post('/suratkeputusan/create','SuratkeputusanController@create')->name('suratkeputusan.create');
Route::get('/suratkeputusan/{id}/edit','SuratkeputusanController@edit')->name('suratkeputusan.edit');
Route::post('/suratkeputusan/{id}/update','SuratkeputusanController@update')->name('suratkeputusan.update');
Route::get('/suratkeputusan/{id}/delete','SuratkeputusanController@delete')->name('suratkeputusan.del');
Route::get('/{urlName}/{file}/download','SuratkeputusanController@downloadFilePdf')->name('suratkeputusan.file');

/////////SURAT TEGURAN//////////
Route::get('/suratteguran', 'SuratteguranController@index')->name('suratteguran');
Route::post('/suratteguran/create','SuratteguranController@create')->name('suratteguran.crate');
Route::get('/suratteguran/{id}/edit','SuratteguranController@edit')->name('suratteguran.edit');
Route::post('/suratteguran/{id}/update','SuratteguranController@update')->name('suratteguran.update');
Route::get('/suratteguran/{id}/delete','SuratteguranController@delete')->name('suratteguran.del');
Route::get('/{urlName}/{file}/download','SuratteguranController@downloadFilePdf')->name('suratteguran.file');


/////////BERITA ACARA PEMASANGAN//////////
Route::get('/suratpemasangan', 'SuratpemasanganController@index')->name('suratpemasangan');
Route::post('/suratpemasangan/create','SuratpemasanganController@create')->name('suratpemasangan.create');
Route::get('/suratpemasangan/{id}/edit','SuratpemasanganController@edit')->name('suratpemasangan.edit');
Route::post('/suratpemasangan/{id}/update','SuratpemasanganController@update')->name('suratpemasangan.update');
Route::get('/suratpemasangan/{id}/delete','SuratpemasanganController@delete')->name('suratpemasangan.del');
Route::get('/{urlName}/{file}/download','SuratpemasanganController@downloadFilePdf')->name('suratpemasangan.file');

/////////BERITA ACARA PENARIKAN//////////
Route::get('/suratpenarikan', 'SuratpenarikanController@index')->name('suratpenarikan');
Route::post('/suratpenarikan/create','SuratpenarikanController@create')->name('suratpenarikan.create');
Route::get('/suratpenarikan/{id}/edit','SuratpenarikanController@edit')->name('suratpenarikan.edit');
Route::post('/suratpenarikan/{id}/update','SuratpenarikanController@update')->name('suratpenarikan.update');
Route::get('/suratpenarikan/{id}/delete','SuratpenarikanController@delete')->name('suratpenarikan.del');
Route::get('/{urlName}/{file}/download','SuratpenarikanController@downloadFilePdf')->name('suratpenarikan.file');
