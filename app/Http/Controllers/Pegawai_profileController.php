<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Crypt;

class Pegawai_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
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
        $validatedData = $request->validate([
            
            'foto' => 'image:jpeg,jpg,png'
        ], [
            'foto.image'            => 'Foto tidak valid.',
        ]);
        
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
        if($request->has('tanggal_lahir'))
        {
            $data = array(
                'tanggal_lahir'=>$request->tanggal_lahir,
            );
        User::whereusername($id)->update($data);
        }
        if($request->has('jenis_kelamin'))
        {
            $data = array(
                'jenis_kelamin'=>$request->jenis_kelamin,
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
        if($request->has('status'))
        {
            $data = array(
                'status'=>$request->status,
            );
        User::whereusername($id)->update($data);
        }
            $data = array(
                'password'=>$request->password,
                'nama'=>$request->nama,
                'email'=>$request->email,
                'jabatan'=>$request->jabatan,
                'no_hp'=>$request->no_hp,
                'alamat'=>$request->alamat,
            );
        User::whereusername($id)->update($data);
        return redirect('pegawai/pengajuancuti');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
