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
    return view('index');
});

Route::get('/login', 'authController@login');
Route::post('/postlogin', 'authController@postlogin');

Route::get('/', 'adminController@dashboard');

Route::get('/mahasiswa', 'mahasiswaController@index');
Route::post('/mahasiswa/create', 'mahasiswaController@create');
Route::get('/mahasiswa/{id}/delete', 'mahasiswaController@delete');
Route::get('/mahasiswa/{id}/detail', 'mahasiswaController@detail');

Route::get('/matkul','matakuliahController@index');
Route::post('/matkul/create','matakuliahController@create');
Route::get('/matkul/{id}/delete','matakuliahController@delete');