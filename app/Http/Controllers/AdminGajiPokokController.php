<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GajiPokok;
use Illuminate\Support\Facades\Crypt; 

class AdminGajiPokokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji_pokoks = GajiPokok::All();
        return view('admin/gajipokok',compact('gaji_pokoks'))->with('i');
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
            'nominal'=>$request->nominal,
            'jabatan'=>$request->jabatan,
        );
        GajiPokok::create($data);
        return redirect('admin\gajipokok')->with('success','gajipokok berhasil ditambah');
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
            if($request->has('jabatan'))
        {
            $data = array(
                'jabatan'=>$request->jabatan,
            );
            GajiPokok::whereid_gaji_pokok($id)->update($data);
        }
        $data = array(
        'nominal'=>$request->nominal,
            
        );
    GajiPokok::whereid_gaji_pokok($id)->update($data);
    return redirect('admin\gajipokok');

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
            $datas = GajiPokok::findOrfail($id);
            $datas->delete();
            return redirect('admin\gajipokok')->with('success','gajipokok Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\gajipokok')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
}
