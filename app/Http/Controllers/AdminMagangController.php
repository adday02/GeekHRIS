<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class AdminMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magang = User::where('status','Magang')->get();
        return view('admin/magang',compact('magang'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'agama'=>$request->agama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'jabatan'=>$request->jabatan,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'foto'=>$new_name,
            'status'=>"Magang"
        );
        User::create($data);
        return redirect('admin\magang')->with('success','Anggota Magang berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        if($request->has('jabatan'))
        {
            $data = array(
                'jabatan'=>$request->jabatan,
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
        $data = array(
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
            'alamat'=>$request->alamat,
        );
    User::whereusername($id)->update($data);
    return redirect('admin\magang');
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
            return redirect('admin\magang')->with('success','Anggota Magang Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\magang')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
