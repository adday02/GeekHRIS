<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPegawaiController;
<<<<<<< HEAD
use App\Http\Controllers\Admin_absenController;
use App\Http\Controllers\Pegawai_profileController;
use App\Http\Controllers\Pegawai_penCutiController;
=======
use App\Http\Controllers\AdminRecruitmentController;
use App\Http\Controllers\AdminMagangController;

use App\Http\Controllers\Pegawai_ProfileController;
>>>>>>> 62d1fdd3598bd0e6db587139973023d8981dec90

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

Route::group(['prefix'=> 'admin','middleware'=> 'auth:admin'], function()
{
    Route::resource('dashboard',AdminDashboardController::class);
    Route::resource('pegawai',AdminPegawaiController::class);
<<<<<<< HEAD
    Route::resource('absen',Admin_absenController::class);
=======
    Route::resource('recruitment',AdminRecruitmentController::class);
    Route::resource('magang',AdminMagangController::class);
});
Route::group(['prefix'=> 'pegawai','middleware'=> 'auth:pegawai'], function()
{
    Route::resource('profile-pegawai',Pegawai_ProfileController::class);
>>>>>>> 62d1fdd3598bd0e6db587139973023d8981dec90
});

//HALAMAN LOGIN
Route::get('/', function () {
    return view('login');
})->middleware('guest');
Route::post('/kirimdata',[LoginController::class,'masuk'])->name('login');;
Route::get('/keluar',[LoginController::class,'keluar']);
//END HALAMAN LOGIN

<<<<<<< HEAD
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
=======
>>>>>>> 62d1fdd3598bd0e6db587139973023d8981dec90
