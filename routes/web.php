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

Route::get('/', 'MahasiswaController@index');
Route::get('/tambah', 'MahasiswaController@create');
Route::post('/tambah', 'MahasiswaController@store');
Route::delete('/{mahasiswa}', 'MahasiswaController@destroy');
Route::get('/{mahasiswa}/edit', 'MahasiswaController@edit');
Route::patch('/{mahasiswa}', 'MahasiswaController@update');