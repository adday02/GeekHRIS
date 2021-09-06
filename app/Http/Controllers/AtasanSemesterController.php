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

class AtasanSemesterController extends Controller
{
    public function index()
    {
        $performance = Performance::All();
        return view('atasan/semester',compact('performance'))->with('i');
    }
    public function pegawai($id,$sm)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $pegawais= User::where('status','Pegawai')->get();
        $kemampuan= Kemampuan::where('id_performance',$performance->id_performance)->get();
        return view('atasan.penilaian',compact('performance','pegawais','kemampuan'))->with('i');    
    }
    public function nilai($id,$sm,$us)
    {
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $pegawai= User::find($us);
        return view('atasan.tambahnilai',compact('performance','pegawai'))->with('i');    
    }
    public function cekNilai($id,$sm,$us)
    {
        $pegawai= User::find($us);
        $performance= Performance::where('tahun',$id)->where('semester',$sm)->first();
        $cek= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->count();
        if($cek==0){
            return redirect('atasan/penilaian/tahun=2021&&semester=08')->with('error','Anda belum menambahkan nilai. Harap tambahkan nilai terlebih dahulu');
        }else{
            $kemampuanAdm= Kemampuan::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $disiplinAdm= Disiplin::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $etikaAdm= Etika::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $kerjaAdm= Kerjasama::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            $tanggungAdm= TanggungJawab::where('id_performance',$performance->id_performance)->where('dinilai',$us)->where('penilain',auth()->user()->username)->first();
            return view('atasan.ceknilai',compact('pegawai','kemampuanAdm','etikaAdm','disiplinAdm','kerjaAdm','tanggungAdm'))->with('i');    

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
            'status'=>auth()->user()->status,
        );
        Disiplin::create($data_disiplin);

        $data_etika = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'sikap_tuturkata'=>$request->sikap_tuturkata,
            'jujur_tanggungjawab'=>$request->jujur_tanggungjawab,
            'pakaian_rapi'=>$request->pakaian_rapi,
            'status'=>auth()->user()->status,
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
            'status'=>auth()->user()->status,
        );
        Kemampuan::create($data_kemampuan);
        
        $data_kerjasama = array(
            'id_performance'=>$request->id_performance,
            'penilain'=>auth()->user()->username,
            'dinilai'=>$request->dinilai,
            'menisi_partner'=>$request->menisi_partner,
            'koordinasi'=>$request->koordinasi,
            'empati'=>$request->empati,
            'status'=>auth()->user()->status,
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
            'status'=>auth()->user()->status,
        );
        TanggungJawab::create($data_tanggung_jawab);
        return redirect('atasan/penilaian-atasan/tahun=2021&&semester=08')->with('success','Penilaian berhasil disimpan');
    }
}
