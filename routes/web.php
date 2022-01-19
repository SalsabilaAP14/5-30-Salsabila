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

Route::get('/', function() {
    return 'Halaman Home';
});

Route::get('/about', function() {
    return view('about',[
    "nama" => "Salsabila Amanda Putri",
    "email" => "3103120206@student.smktelkom-pwt.sch.id",
    "gambar" => "Salsabila.jpeg"
    ]);
});

Route::get('/gallery', function() {
    return 'Halaman Gallery';
});
