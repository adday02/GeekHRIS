<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\User;

class Pegawai_penCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutis = Cuti::all();
        return view('pegawai/pengajuan-cuti',compact('cutis'))->with('i');
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
            'username'=>auth()->user()->username,
            'tanggal'=>$request->tanggal,
            'keterangan'=>$request->keterangan,
            'status'=>'Dalam Proses',
        );
        Cuti::create($data);
        return redirect('pegawai\pengajuan-cuti')->with('success','Pengajuan Cuti berhasil ditambah');
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
            'tanggal'=>$request->tanggal,
            'keterangan'=>$request->keterangan,
        );
    Cuti::whereid_cuti($id)->update($data);
    return redirect('pegawai/pengajuan-cuti');
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
            $datas = Cuti::findOrfail($id);
            $datas->delete();
            return redirect('pegawai/pengajuan-cuti')->with('success','Pengajuan Cuti Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('pegawai/pengajuan-cuti')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
