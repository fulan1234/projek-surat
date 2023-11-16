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
    return view('template');
});

Route::get('/dashboard', 'App\Http\Controllers\home@index')->name('dashboard');

//SURAT KELUAR
Route::get('/suratKeluar', 'App\Http\Controllers\SuratkController@suratKeluar')->name('suratKeluar');
Route::get('/suratKeluar/tambahSurat', 'App\Http\Controllers\SuratkController@tambahSurat')->name('tambahSuratk');
Route::post('/suratKeluar', 'App\Http\Controllers\SuratkController@storeSurat')->name('storeSuratk');
Route::delete('/suratKeluar/{id}', 'App\Http\Controllers\SuratkController@deletesurat')->name('hapussuratk');
Route::get('/suratKeluar/edit/{id}', 'App\Http\Controllers\SuratkController@editsurat')->name('editsuratk');
Route::put('/suratKeluar/{id}', 'App\Http\Controllers\SuratkController@updatesurat')->name('updatesuratk');
Route::get('/suratKeluar/disposisi/{id}', 'App\Http\Controllers\SuratkController@disposisi')->name('disposisik');
Route::get('/suratKeluar/download/{filename}', 'App\Http\Controllers\SuratkController@download')->name('downloadsuratkeluar');

//SURAT MASUK
Route::get('/suratMasuk', 'App\Http\Controllers\SuratmController@suratMasuk')->name('suratMasuk');
Route::get('/suratMasuk/tambahSurat', 'App\Http\Controllers\SuratmController@tambahSurat')->name('tambahSurat');
Route::post('/suratMasuk', 'App\Http\Controllers\SuratmController@storeSurat')->name('storeSurat');
Route::delete('/suratmasuk/{id}', 'App\Http\Controllers\SuratmController@deletesurat')->name('hapussurat');
Route::get('/suratmasuk/edit/{id}', 'App\Http\Controllers\SuratmController@editsurat')->name('editsurat');
Route::put('/suratmasuk/{id}', 'App\Http\Controllers\SuratmController@updatesurat')->name('updatesurat');
Route::get('/suratmasuk/disposisi/{id}', 'App\Http\Controllers\SuratmController@disposisi')->name('disposisi');
Route::get('/suratmasuk/download/{filename}', 'App\Http\Controllers\SuratmController@download')->name('downloadsuratmasuk');

//JENIS SURAT
Route::get('/jenisSurat', 'App\Http\Controllers\home@jenisSurat')->name('jenisSurat');

//DISPOSISI SURAT
Route::get('/disposisiSurat', 'App\Http\Controllers\home@disposisiSurat')->name('disposisiSurat');

//DASHBOARD
Route::get('/dashboard', 'App\Http\Controllers\home@dashboard')->name('dashboard');

// LAPORAN DATA
Route::get('/laporan_surat_masuk', 'App\Http\Controllers\home@lap_surat_masuk')->name('lapSuratMasuk');
Route::get('/laporan_surat_keluar', 'App\Http\Controllers\home@lap_surat_keluar')->name('lapSuratKeluar');
Route::get('/disposisi_surat_masuk', 'App\Http\Controllers\home@dis_surat_masuk')->name('disSuratMasuk');