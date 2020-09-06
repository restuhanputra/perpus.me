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
    return view('admin.dashboard');
});

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/process', 'AuthController@process')->name('process');

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard.admin');
Route::get('/kategori', 'Admin\KategoriController@index')->name('kategori.admin');
Route::get('/dashboard', 'Admin\TransaksiController@index')->name('transaksi.admin');
