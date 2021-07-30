<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_pegawai = DB::table('users')->where('status', '=', 'Pegawai')->count();
        $user_recruitment = DB::table('users')->where('status', '=', 'Recruitment')->count();
        $user_magang = DB::table('users')->where('status', '=', 'Magang')->count();
        return view('admin/dashboard',compact('user_pegawai','user_recruitment','user_magang'))->with('i');
    }
}
