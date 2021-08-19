<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lembur;
use Illuminate\Support\Facades\Crypt; 
use App\Models\User;

class AdminLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembur = Lembur::All();
        $pegawais = User ::where('status','pegawai')->get();
        return view('admin/lembur',compact('lembur','pegawais'))->with('i');
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
            'username'=>$request->username,
            'tanggal'=>$request->tanggal,
            'nominal'=>$request->nominal,
        );
        Lembur::create($data);
        return redirect('admin\lembur')->with('success','lembur berhasil ditambah');
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
            if($request->has('tanggal'))
        {
            $data = array(
                'tanggal'=>$request->tanggal,
            );
            Lembur::whereid_lembur($id)->update($data);
        }
            $data = array(
                'nominal'=>$request->nominal,
                
                );
            $data = array(
                'username'=>$request->username,
                        
                );
    Lembur::whereid_lembur($id)->update($data);
    return redirect('admin\lembur');

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
            $datas = Lembur::findOrfail($id);
            $datas->delete();
            return redirect('admin\lembur')->with('success','lembur Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\lembur')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
