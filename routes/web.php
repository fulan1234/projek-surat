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
Route::post('/suratMasuk', 'App\Http\Controllers\home@storeSurat')->name('storeSurat');
Route::delete('/suratmasuk/{id}', 'App\Http\Controllers\home@deletesurat')->name('hapussurat');
Route::get('/suratmasuk/edit/{id}', 'App\Http\Controllers\home@editsurat')->name('editsurat');
Route::put('/suratmasuk/{id}', 'App\Http\Controllers\home@updatesurat')->name('updatesurat');
Route::get('/suratmasuk/disposisi/{id}', 'App\Http\Controllers\home@disposisi')->name('disposisi');
Route::get('/file/{filename}', function ($filename) {
    $file = storage_path('app/public/suratmasuk/' . $filename);

    if (file_exists($file)) {
        return response()->download($file);
    } else {
        return response()->json(['message' => 'File not found'], 404);
    }
})->name('downloadsuratmasuk');

Route::get('/suratKeluar', 'App\Http\Controllers\home@suratKeluar')->name('suratKeluar');
Route::get('/jenisSurat', 'App\Http\Controllers\home@jenisSurat')->name('jenisSurat');
Route::get('/disposisiSurat', 'App\Http\Controllers\home@disposisiSurat')->name('disposisiSurat');
Route::get('/dashboard', 'App\Http\Controllers\home@dashboard')->name('dashboard');
