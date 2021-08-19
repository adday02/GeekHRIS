<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\AnggotaProject;

class AdminProjectListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::All();
        $ang = AnggotaProject::All();
        $pegawais = User::where('status','Pegawai')->get();
        return view('admin/project-list',compact('projects','pegawais','ang'))->with('i');
    }
    public function progres()
    {
        $ang = AnggotaProject::All();
        $projects = Project::where('presentase','<','100')->get();
        return view('admin/project-progres',compact('projects','ang'))->with('i');
    }
    public function selesai()
    {
        $ang = AnggotaProject::All();
        $projects = Project::where('presentase','=','100')->get();
        return view('admin/project-selesai',compact('projects','ang'))->with('i');
    }

    public function store(Request $request)
    {
        $anggota = $request->anggota;
        $data = array(
            'username'=>$request->username,
            'nama_project'=>$request->nama_project,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_deadline'=>$request->tgl_deadline,
            'presentase'=>"0",
        );
        Project::create($data);
        $projects=Project::latest('id_project')->first();
        if(!empty($request->input('username')))
        $will_insert = [];
        foreach($request->input('anggota') as $key =>$value){
            array_push($will_insert,['username'=>$value,'id_project'=>$projects->id_project]);
        }
        \DB::table('anggota_projects')->insert($will_insert);
        return redirect('admin\project-list')->with('success','Project berhasil ditambah');
    }

    public function destroy($id)
    {
        try{
            $datas = AnggotaProject::where('id_project',$id)->delete();
            $datas = Project::findOrfail($id)->delete();
            return redirect('admin\project-list')->with('success','Project Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\project-list')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
