<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunjangan;
use Illuminate\Support\Facades\Crypt; 

class AdminTunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tunjangan = Tunjangan::All();
        return view('admin/tunjangan',compact('tunjangan'))->with('i');
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
        Tunjangan::create($data);
        return redirect('admin\tunjangan')->with('success','tunjangan berhasil ditambah');
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
            Tunjangan::whereid_tunjangan($id)->update($data);
        }
            $data = array(
                'nominal'=>$request->nominal,
                
                );
            $data = array(
                'username'=>$request->username,
                        
                );
    Tunjangan::whereid_tunjangan($id)->update($data);
    return redirect('admin\tunjangan');

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
            $datas = Tunjangan::findOrfail($id);
            $datas->delete();
            return redirect('admin\tunjangan')->with('success','tunjangan Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\tunjangan')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
