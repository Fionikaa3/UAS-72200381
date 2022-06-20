<?php

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

Route::get('/maha', function () {
    return view('koneksi');
});

Route::get('/maha', 'MahasiswaController@mahasiswa')->middleware('auth');

Route::get('/maha/cari', 'MahasiswaController@pencarian')->name('cari');

Route::get('/maha/formmhs', 'MahasiswaController@form');

Route::post('/maha/simpanmh', 'MahasiswaController@simpan');

Route::get('/maha/ubah/{id}', 'MahasiswaController@ubah');

Route::put('/maha/updatemhs/{id}', 'MahasiswaController@updatemhs');

Route::get('/maha/hapus/{id}', 'MahasiswaController@hapus');

Route::get('/user', 'AuthController@user')->middleware('auth');

Route::get('/user/formuliruser', 'AuthController@formuliruser')->middleware('auth');

Route::post('/user/simpanusr', 'AuthController@simpanusr')->middleware('auth');

Route::get('/user/ubahuser/{id}', 'AuthController@ubahuser');

Route::put('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/user/hapususer/{id}', 'AuthController@hapususer');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth');
