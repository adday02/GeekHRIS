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

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});
Route::get('/pegawai', function () {
    return view('Admin.pegawai');
});
Route::get('/recruitment', function () {
    return view('Admin.recruitment');
});
Route::get('/magang', function () {
    return view('Admin.magang');
});