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

Route::get('/suratMasuk', 'App\Http\Controllers\home@suratMasuk')->name('suratMasuk');
Route::get('/suratMasuk/tambahSurat', 'App\Http\Controllers\home@tambahSurat')->name('tambahSurat');


Route::get('/suratKeluar', 'App\Http\Controllers\home@suratKeluar')->name('suratKeluar');
Route::get('/jenisSurat', 'App\Http\Controllers\home@jenisSurat')->name('jenisSurat');
Route::get('/disposisiSurat', 'App\Http\Controllers\home@disposisiSurat')->name('disposisiSurat');
Route::get('/dashboard', 'App\Http\Controllers\home@dashboard')->name('dashboard');