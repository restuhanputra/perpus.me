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
    return redirect('/dashboard');
});

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/process', 'AuthController@process')->name('process');

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard.admin');

// Kategori
Route::prefix('kategori')->group(function () {
    Route::get('/', 'Admin\KategoriController@index')->name('kategori-index');
    Route::get('/create', 'Admin\KategoriController@create')->name('kategori-create');
    Route::post('/store', 'Admin\KategoriController@store')->name('kategori-store');
    Route::get('/edit/{id}', 'Admin\KategoriController@edit')->name('kategori-edit');
    Route::post('/update/{id}', 'Admin\KategoriController@update')->name('kategori-update');
    Route::get('/destroy/{id}', 'Admin\KategoriController@destroy')->name('kategori-destroy');
});

// Buku
Route::prefix('buku')->group(function () {
    Route::get('/', 'Admin\BukuController@index')->name('buku-index');
    Route::get('/create', 'Admin\BukuController@index')->name('buku-create');
    Route::post('/store', 'Admin\BukuController@store')->name('buku-store');
    Route::get('/edit/{id}', 'Admin\BukuController@edit')->name('buku-edit');
    Route::post('/update/{id}', 'Admin\BukuController@update')->name('buku-update');
    Route::get('/destroy/{id}', 'Admin\BukuController@destroy')->name('buku-destroy');
});

// Transaksi
Route::prefix('transaksi')->group(function () {
    Route::get('/', 'Admin\TransaksiController@index')->name('transaksi-index');
    Route::get('/create', 'Admin\TransaksiController@index')->name('transaksi-index');
    Route::post('/store', 'Admin\TransaksiController@store')->name('transaksi-store');
    Route::get('/edit/{id}', 'Admin\TransaksiController@edit')->name('transaksi-edit');
    Route::post('/update/{id}', 'Admin\TransaksiController@update')->name('transaksi-update');
    Route::get('/destroy/{id}', 'Admin\TransaksiController@destroy')->name('transaksi-destroy');
});
