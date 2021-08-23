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
        $pegawai = User::where('status','Pegawai')->get();
        return view('admin/pegawai',compact('pegawai'))->with('i');
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
            'id_gaji_pokok'=>$request->id_gaji_pokok,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'agama'=>$request->agama,
            'no_hp'=>$request->no_hp,
            'divisi'=>$request->divisi,
            'jabatan'=>$request->jabatan,
            'nominal'=>$request->nominal,
            'foto'=>$new_name,
            'status'=>"Pegawai"
        );
        User::create($data);
        return redirect('admin\pegawai')->with('success','Pegawai berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if($request->has('id_gaji_pokok'))
        {
            $data = array(
                'id_gaji_pokok'=>$request->agama,
            );
            User::whereusername($id)->update($data);
        }
        $data = array(
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat,
        );
    User::whereusername($id)->update($data);
    return redirect('admin\pegawai');

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
            $datas->delete();
            return redirect('admin\pegawai')->with('success','pegawai Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\pegawai')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
