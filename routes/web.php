<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPegawaiController;
use App\Http\Controllers\Admin_absenController;
use App\Http\Controllers\AdminRecruitmentController;
use App\Http\Controllers\AdminMagangController;
use App\Http\Controllers\AdminTunjanganController;
use App\Http\Controllers\AdminLemburController;
use App\Http\Controllers\Admin_CutiController;
use App\Http\Controllers\Admin_PinjamanController;
use App\Http\Controllers\AdminProjectListController;
use App\Http\Controllers\AdminPenilaianController;
use App\Http\Controllers\Admin_LowonganController;
use App\Http\Controllers\Admin_lamaranController;
use App\Http\Controllers\AdminSemesterController;

use App\Http\Controllers\PegawaiSemesterController;
use App\Http\Controllers\Pegawai_profileController;
use App\Http\Controllers\Pegawai_penCutiController;
use App\Http\Controllers\PegawaiProjectListController;



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

Route::group(['prefix'=> 'admin', 'middleware'=> 'auth:admin'], function()
{
    Route::resource('dashboard',AdminDashboardController::class);
    
    Route::resource('pegawai',AdminPegawaiController::class);
    Route::get('recruitment',[AdminPegawaiController::class,'indexRecruitment']);
    Route::get('magang',[AdminPegawaiController::class,'indexMagang']);

    Route::resource('absen',Admin_absenController::class);
    Route::resource('tunjangan',AdminTunjanganController::class);
    Route::resource('cuti',Admin_CutiController::class);
    Route::resource('pinjaman',Admin_PinjamanController::class);
    Route::resource('project-list',AdminProjectListController::class);
    Route::get('project-progres',[AdminProjectListController::class,'progres']);
    Route::get('project-selesai',[AdminProjectListController::class,'selesai']);

    
    Route::get('penilaian',[AdminSemesterController::class,'index']);
    Route::get('penilaian/tahun={id}&&semester={sm}',[AdminSemesterController::class,'pegawai']);
    Route::get('penilaian/tahun={id}&&semester={sm}/{us}',[AdminSemesterController::class,'nilai']);
    Route::get('penilaian/tahun={id}&&semester={sm}/ceknilai/{us}',[AdminSemesterController::class,'cekNilai']);
    Route::resource('penilaian',AdminSemesterController::class);
    Route::post('inputPenilaian',[AdminSemesterController::class,'tambah'])->name('inputPenilaian');


    Route::resource('lowongan',Admin_LowonganController::class);
    Route::resource('lamaran',Admin_lamaranController::class);
});

Route::group(['prefix'=> 'pegawai', 'middleware'=> 'auth:pegawai'], function()
{   
    Route::resource('profile-pegawai',Pegawai_ProfileController::class);
    Route::resource('pinjaman-pegawai',Pegawai_PinjamanController::class);
    Route::resource('cuti-pegawai',Pegawai_penCutiController::class);
    Route::resource('profile-pegawai',Pegawai_profileController::class); 

    Route::get('penilaian-pegawai',[PegawaiSemesterController::class,'index']);
    Route::get('penilaian-pegawai/tahun={id}&&semester={sm}',[PegawaiSemesterController::class,'pegawai']);
    Route::get('penilaian-pegawai/tahun={id}&&semester={sm}/{us}',[PegawaiSemesterController::class,'nilai']);
    Route::post('inputPenilaian-pegawai',[PegawaiSemesterController::class,'tambah'])->name('inputPenilaian-pegawai');
    Route::get('cekPenilaian-pegawai',[PegawaiSemesterController::class,'pilihsemester']);

    Route::get('penilaian-pegawai/tahun={id}&&semester={sm}/ceknilai/{us}',[PegawaiSemesterController::class,'cekNilai']);


    Route::resource('project-list-pegawai',PegawaiProjectListController::class);
 
});

//HALAMAN LOGIN
Route::get('/', function () {
    return view('login');
})->middleware('guest');
Route::post('/kirimdata',[LoginController::class,'masuk'])->name('login');;
Route::get('/keluar',[LoginController::class,'keluar']);
//END HALAMAN LOGIN