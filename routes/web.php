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

Route::get('/about', function () {
    return view('/about/about');
});

Route::get('/guru', function () {
    return view('/guru/guru');
});

Route::get('/siswa', function () {
    return view('/siswa/siswa');
});

Route::get('/kontak', function () {
    return view('/kontak/kontak');
});

Route::get('/login', function () {
    return view('/login/login');
});
