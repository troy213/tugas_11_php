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
Route::get('/getData', 'App\Http\Controllers\Karyawan@getData');
Route::post('/simpan', 'App\Http\Controllers\Karyawan@simpan');
Route::post('/ubah', 'App\Http\Controllers\Karyawan@ubah');
Route::get('/hapus/{id}', 'App\Http\Controllers\Karyawan@hapus');
Route::get('/baca/{id}', 'App\Http\Controllers\Karyawan@baca');
