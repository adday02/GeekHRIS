<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\User;

class Pegawai_PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjamans = Pinjaman::all();
        return view('pegawai/pengajuan-pinjaman',compact('pinjamans'))->with('i');
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
        $data = array(
            'username'=>auth()->user()->username,
            'tanggal'=>$request->tanggal,
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'status'=>'Dalam Proses',
        );
        Pinjaman::create($data);
        return redirect('pegawai/pengajuan-pinjaman')->with('success','Pengajuan Pinjaman berhasil ditambah');
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
        $data = array(
            'tanggal'=>$request->tanggal,
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
        );
    Pinjaman::whereid_pinjaman($id)->update($data);
    return redirect('pegawai/pengajuan-pinjaman');

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
            $datas = Pinjaman::findOrfail($id);
            $datas->delete();
            return redirect('pegawai/pengajuan-pinjaman')->with('success','Pengajuan Pinjaman Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('pegawai/pengajuan-pinjaman')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
