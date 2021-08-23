<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class AdminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('status','Pegawai')->get();
        return view('admin/pegawai',compact('user'))->with('i');
    }
    public function indexRecruitment()
    {
        $user = User::where('status','Recruitment')->get();
        return view('admin/recruitment',compact('user'))->with('i');
    }
    public function indexMagang()
    {
        $user = User::where('status','Magang')->get();
        return view('admin/magang',compact('user'))->with('i');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $new_name = rand().'.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $new_name);
        $data = array(
            'username'=>$request->username,
            'password'=>Crypt::encryptString($request->password),
            'nama'=>$request->nama,
            'email'=>$request->email,
            'nominal'=>$request->nominal,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'agama'=>$request->agama,
            'no_hp'=>$request->no_hp,
            'divisi'=>$request->divisi,
            'pic'=>$request->pic,
            'foto'=>$new_name,
            'status'=>$request->status,
        );
        User::create($data);
        if($request->status=="Pegawai"){
        return redirect('admin\pegawai')->with('success','Pegawai berhasil ditambah');
        }elseif($request->status=="Recruitment"){
            return redirect('admin\recruitment')->with('success','Pegawai berhasil ditambah');
        }elseif($request->status=="Magang"){
            return redirect('admin\magang')->with('success','Pegawai berhasil ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('foto');
        if($request->hasFile('foto'))
        {
            $new_name = rand().'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $new_name);
            $data = array(            
                'foto'=>$new_name,
            );
        User::whereusername($id)->update($data);
        }
        
        if($request->has('agama'))
        {
            $data = array(
                'agama'=>$request->agama,
            );
            User::whereusername($id)->update($data);
        }
        if($request->has('divisi'))
        {
            $data = array(
                'divisi'=>$request->divisi,
            );
            User::whereusername($id)->update($data);
        }
        $data = array(
            'nama'=>$request->nama,
            'email'=>$request->email,
            'nominal'=>$request->nominal,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            'pic'=>$request->pic,
            'status'=>$request->status,
        );
    User::whereusername($id)->update($data);
        if($request->status=="Pegawai"){
            return redirect('admin\pegawai');
        }elseif($request->status=="Recruitment"){
            return redirect('admin\recruitment');
        }elseif($request->status=="Magang"){
            return redirect('admin\magang');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $datas = User::findOrfail($id);
            $status=$datas->status;
            $datas->delete();
            if($status=="Pegawai"){
                return redirect('admin\pegawai')->with('success','pegawai Berhasil Dihapus');
            }elseif($status=="Recruitment"){
                return redirect('admin\recruitment')->with('success','pegawai Berhasil Dihapus');
            }elseif($status=="Magang"){
                return redirect('admin\magang')->with('success','pegawai Berhasil Dihapus');
            }
        }catch(\Throwable $th){
            return redirect('admin\pegawai')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
