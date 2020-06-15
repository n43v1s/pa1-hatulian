<?php

use App\Http\Controllers\akunController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/akun', 'akunController@index')->name('login');
Route::post('/login', 'akunController@login');
Route::get('/akun/register', 'akunController@create');
Route::post('/register/proses', 'akunController@store');
Route::get('/informasi/{id}','informasiController@index')->middleware('auth');
Route::get('/akun/logout', 'akunController@logout')->middleware('auth');
Route::get('/login/{id}', 'akunController@loginpro')->middleware('auth');
Route::get('/aboutUs', function(){
    return view('aboutUs');
});


// tambahan informasi
Route::get('/informasi/gambar/{id}','informasiController@gambar')->middleware('auth');
Route::post('/gambar/proses/{id}','informasiController@gambarProses');
Route::get('informasi/file/{id}','informasiController@file')->middleware('auth');
Route::post('/file/proses/{id}','informasiController@fileProses');

// admin
Route::get('/admin/request', 'adminController@request')->middleware('auth');
Route::get('/admin/detail/{id}', 'adminController@detail')->middleware('auth');
Route::get('/admin/detail2/{id}', 'adminController@detail2')->middleware('auth');
Route::get('/setuju/{id}', 'adminController@setuju')->middleware('auth');
Route::get('/setuju2/{id}', 'adminController@setuju2')->middleware('auth');
Route::get('/tolak/{id}', 'adminController@tolak')->middleware('auth');
Route::get('/tolak2/{id}', 'adminController@tolak2')->middleware('auth');
Route::get('/informasiTerbaru', 'informasiController@informasi');
