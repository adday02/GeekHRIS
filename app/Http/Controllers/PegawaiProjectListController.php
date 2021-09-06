<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\AnggotaProject;
use App\Models\User;

class PegawaiProjectListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('username',auth()->user()->username)->get();
        $anggota = AnggotaProject::All();
        $ang = AnggotaProject::where('username',auth()->user()->username)->get();
        $pegawais = User::where('status','Pegawai')->get();
        return view('pegawai/project-list',compact('projects','pegawais','anggota','ang'))->with('i');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'presentase'=>$request->presentase,
        );
    Project::whereid_project($id)->update($data);
    return redirect('pegawai\project-list-pegawai')->with('success','Presentase berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
