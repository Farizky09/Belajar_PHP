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

Route::get('/pelajar', 'App\Http\Controllers\PelajarController@index');
Route::get('/pelajar/tambah','App\Http\Controllers\PelajarController@tambah');
Route::post('/pelajar/store','App\Http\Controllers\PelajarController@store');
Route::get('/pelajar/edit/{NIK}','App\Http\Controllers\PelajarController@edit');
Route::post('/pelajar/update','App\Http\Controllers\PelajarController@update');
Route::get('/pelajar/hapus/{NIK}','App\Http\Controllers\PelajarController@hapus');