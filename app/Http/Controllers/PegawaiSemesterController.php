<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performance;
use App\Models\User;
use App\Models\Kemampuan;
use App\Models\Disiplin;
use App\Models\Etika;
use App\Models\Kerjasama;
use App\Models\TanggungJawab;

class PegawaiSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performance = Performance::All();
        $cek= Kemampuan::where('penilain',auth()->user()->username)->get();
        return view('pegawai/semester',compact('performance','cek'))->with('i');
    }
    public function pegawai($id,$sm)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $pegawais= User::where('status','Pegawai')->where('divisi',auth()->user()->divisi)->where('username','!=',auth()->user()->username)->get();
        $kemampuan= Kemampuan::All();
        return view('Pegawai.penilaian',compact('performance','pegawais','kemampuan'))->with('i');    
    }
    public function nilai($id,$sm,$us)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $pegawai= User::find($us);
        return view('pegawai.tambahnilai',compact('performance','pegawai'))->with('i');    
    }
    public function CekSemester()
    {
        $performance = Performance::All();
        return view('pegawai/cekSemester-pegawai',compact('performance'))->with('i');
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
        return redirect('pegawai/penilaian-pegawai')->with('success','Penilaian berhasil disimpan');
    }
    public function cekNilai($id,$sm,$us)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $cek= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->count();
        if($cek==0){
            return redirect('pegawai/cekPenilaian-pegawai')->with('gagal','Penilaian sedang dalam proses');
        }else{
        $pegawai= User::find($us);
        $kemampuanAdm= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Admin')->first();
        $disiplinAdm= Disiplin::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Admin')->first();
        $etikaAdm= Etika::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Admin')->first();
        $kerjaAdm= Kerjasama::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Admin')->first();
        $tanggungAdm= TanggungJawab::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Admin')->first();
        
        $kemampuanPgw= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Pegawai')->first();
        $disiplinPgw= Disiplin::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Pegawai')->first();
        $etikaPgw= Etika::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Pegawai')->first();
        $kerjaPgw= Kerjasama::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Pegawai')->first();
        $tanggungPgw= TanggungJawab::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Pegawai')->first();
        
        $kemampuanAts= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Atasan')->first();
        $disiplinAts= Disiplin::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Atasan')->first();
        $etikaAts= Etika::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Atasan')->first();
        $kerjaAts= Kerjasama::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Atasan')->first();
        $tanggungAts= TanggungJawab::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('status','Atasan')->first();

        
        return view('pegawai.cekNilai',compact('pegawai','kemampuanAdm','etikaAdm','disiplinAdm','kerjaAdm','tanggungAdm','kemampuanPgw','etikaPgw','disiplinPgw','kerjaPgw','tanggungPgw','kemampuanAts','etikaAts','disiplinAts','kerjaAts','tanggungAts'))->with('i');    
        }
    }
    public function pilihsemester()
    {
        $performance = Performance::All();
        return view('pegawai/cekSemester',compact('performance'))->with('i');
    }
}
