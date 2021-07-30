<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPegawaiController;
use App\Http\Controllers\AdminRecruitmentController;
use App\Http\Controllers\AdminMagangController;

use App\Http\Controllers\Pegawai_ProfileController;

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
    Route::resource('recruitment',AdminRecruitmentController::class);
    Route::resource('magang',AdminMagangController::class);
});
Route::group(['prefix'=> 'pegawai','middleware'=> 'auth:pegawai'], function()
{
    Route::resource('profile-pegawai',Pegawai_ProfileController::class);
});

//HALAMAN LOGIN
Route::get('/', function () {
    return view('login');
})->middleware('guest');
Route::post('/kirimdata',[LoginController::class,'masuk'])->name('login');;
Route::get('/keluar',[LoginController::class,'keluar']);
//END HALAMAN LOGIN

