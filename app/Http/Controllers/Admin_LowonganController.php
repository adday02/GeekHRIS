<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class Admin_LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('admin/lowongan',compact('lowongans'))->with('i');
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
        $data = array(
            'id_lowongan'=>$request->id_lowongan,
            'nama_lowongan'=>$request->nama_lowongan,
            'persyaratan'=>$request->persyaratan,
        );
        Lowongan::create($data);
        return redirect('admin\lowongan')->with('success','Lowongan Pekerjaan berhasil ditambah');
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
        $data = array(
            'nama_lowongan'=>$request->nama_lowongan,
            'persyaratan'=>$request->persyaratan,
        );
        Lowongan::whereid_lowongan($id)->update($data);
        return redirect('admin\lowongan');
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
            $datas = Lowongan::findOrfail($id);
            $datas->delete();
            return redirect('admin/lowongan')->with('success','Lowongan Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin/lowongan')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
