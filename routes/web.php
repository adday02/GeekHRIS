<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPegawaiController;
use App\Http\Controllers\Admin_absenController;
use App\Http\Controllers\Pegawai_profileController;
use App\Http\Controllers\Pegawai_penCutiController;

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

Route::group(['prefix'=> 'admin'], function()
{
    Route::resource('pegawai',AdminPegawaiController::class);
    Route::resource('absen',Admin_absenController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});
Route::get('/recruitment', function () {
    return view('Admin.recruitment');
});
Route::get('/magang', function () {
    return view('Admin.magang');
});


Route::group(['prefix'=> 'pegawai'], function()
{
    Route::resource('cuti-pegawai',Pegawai_penCutiController::class);
    Route::resource('profile-pegawai',Pegawai_profileController::class);

    
});