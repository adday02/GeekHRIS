<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performance;
use App\Models\Disiplin;
use App\Models\Etika;
use App\Models\Kemampuan;
use App\Models\Kerjasama;
use App\Models\Tanggungjawab;
use App\Models\User;

class AdminSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performance = Performance::All();
        return view('admin/semester',compact('performance'))->with('i');
    }

    public function store(Request $request)
    {
        $cek=Performance::where('tahun',$request->tahun)->where('semester',$request->semester)->count();
        if($cek==0)
        {
        $data = array(
            'tahun'=>$request->tahun,
            'semester'=>$request->semester,
        );
        Performance::create($data);
        return redirect('admin\penilaian')->with('success','Penialain pada semseter ini telah dibuka');
        }else{
            return redirect('admin\penilaian')->with('gagal','Gagal, Semester $request->bulan');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pegawai($id,$sm)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $pegawais= User::where('status','Pegawai')->get();
        $kemampuan= Kemampuan::All();
        return view('Admin.penilaian',compact('performance','pegawais','kemampuan'))->with('i');    
    }
    public function nilai($id,$sm,$us)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $pegawai= User::find($us);
        return view('Admin.tambahnilai',compact('performance','pegawai'))->with('i');    
    }
    public function cekNilai($id,$sm,$us)
    {
        $pegawai= User::find($us);
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $cek= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->count();
        if($cek==0){
            return redirect('admin/penilaian/tahun=2021&&semester=08')->with('error','Anda belum menambahkan nilai. Harap tambahkan nilai terlebih dahulu');
        }else{
            $kemampuanAdm= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $disiplinAdm= Disiplin::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $etikaAdm= Etika::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $kerjaAdm= Kerjasama::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $tanggungAdm= TanggungJawab::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            return view('Admin.ceknilai',compact('pegawai','kemampuanAdm','etikaAdm','disiplinAdm','kerjaAdm','tanggungAdm'))->with('i');    

        }
    }

    public function tambah(Request $request)
    {
        $data_disiplin = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'kerja'=>$request->kerja,
            'waktu'=>$request->waktu,
        );
        Disiplin::create($data_disiplin);

        $data_etika = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'sikap_tuturkata'=>$request->sikap_tuturkata,
            'jujur_tanggungjawab'=>$request->jujur_tanggungjawab,
            'pakaian_rapi'=>$request->pakaian_rapi,
        );
        Etika::create($data_etika);
        $data_kemampuan = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'komunikatif'=>$request->komunikatif,
            'tugas'=>$request->tugas,
            'tekanan'=>$request->tekanan,
            'kemampuan_kerjaan'=>$request->kemampuan_kerjaan,
            'bahasa'=>$request->bahasa,
            'kreatif'=>$request->kreatif,
        );
        Kemampuan::create($data_kemampuan);
        
        $data_kerjasama = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'menisi_partner'=>$request->menisi_partner,
            'koordinasi'=>$request->koordinasi,
            'empati'=>$request->empati,
        );
        Kerjasama::create($data_kerjasama);

        $data_tanggung_jawab = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'tepat_waktu'=>$request->tepat_waktu,
            'kerahasiaan'=>$request->kerahasiaan,
            'sarana'=>$request->sarana,
            'kebersihan'=>$request->kebersihan,
        );
        TanggungJawab::create($data_tanggung_jawab);
        return redirect('admin/penilaian/tahun=2021&&semester=08')->with('success','Penilaian berhasil disimpan');
    }
}
