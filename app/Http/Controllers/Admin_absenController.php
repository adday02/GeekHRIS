<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\User;

class Admin_absenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absens = Absen::all();
        $users = User::where('status','Pegawai')->get();
        return view('Admin/absen',compact('absens','users'))->with('i');
    
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
        if(!empty($request->input('status')))
        $will_insert = [];
        $no=0;
        foreach($request->input('status',) as $key =>$value){
            array_push($will_insert,['status'=>$value,'username'=>$request->username[$no],'tanggal'=>$request->tanggal]);
        $no++;
        }
        \DB::table('absens')->insert($will_insert);
        return redirect('admin\absen')->with('success','Absen Berhasil Ditambah');

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
            'username'=>$request->username,
            'status'=>$request->status,
            'tanggal'=>date('y-m-d'),
            
        );
        Absen::whereid_absen($id)->update($data);
        return redirect('admin\absen');
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
            $datas = Absen::findOrfail($id);
            $datas->delete();
            return redirect('admin\absen')->with('success','Absen Berhasil Dihapus');
        }catch(\Throwable $th){
            return redirect('admin\absen')->withErrors('Data gagal dihapus. Harap hapus data yang terkait');
        }
    }
    
}
