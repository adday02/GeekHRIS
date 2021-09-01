<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Totalgaji;
use Illuminate\Support\Facades\Crypt; 
use App\Models\User;
use App\Models\Tunjangan;

class AdminTotalgajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = User::where('status','Pegawai')->get();
        $tunjangan = Tunjangan::All();
        return view('admin/totalgaji',compact('pegawai','tunjangan'))->with('i');
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
            'nominal'=>$request->nominal,
            'jenis'=>$request->jenis,
        );
        Totalgaji::create($data);
        return redirect('admin\totalgaji')->with('success','totalgaji berhasil ditambah');
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
            if($request->has('jenis'))
        {
            $data = array(
                'jenis'=>$request->jenis,
            );
            Totalgaji::whereid_totalgaji($id)->update($data);
        }
            $data = array(
                'nominal'=>$request->nominal,
                
                );
            $data = array(
                'username'=>$request->username,
                        
                );
    Totalgaji::whereid_totalgaji($id)->update($data);
    return redirect('admin\totalgaji');

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
            $datas = Totalgaji::findOrfail($id);
            $datas->delete();
            return redirect('admin\totalgaji')->with('success','totalgaji Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\totalgaji')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
