<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Crypt;


class LoginController extends Controller
{
    function masuk(Request $kiriman)
    {
		$y=User::All();
		$pw="False";
		foreach ($y as $p) {
			$decrypted = Crypt::decryptString($p->password);
			if($decrypted==$kiriman->password)
			{				
				$pw=$p->password;
			}		
		}
        $data1=User::where('username',$kiriman->username)->where('password',$pw)->where('status','Admin')->get();
        $data2=User::where('username',$kiriman->username)->where('password',$pw)->where('status','Pegawai')->get();
        $data3=User::where('username',$kiriman->username)->where('password',$pw)->where('status','Atasan')->get();
        if (count($data1)>0) {
    		Auth::guard('admin')->LoginUsingId($data1[0]['username']);
    		return redirect('/admin/dashboard');
    	}
    	else if (count($data2)>0) {
    		Auth::guard('pegawai')->LoginUsingId($data2[0]['username']);
            return redirect('/pegawai/profile-pegawai');
    	}
    	else if (count($data3)>0) {
    		Auth::guard('atasan')->LoginUsingId($data3[0]['username']);
    		return redirect('/atasan/dashboard');
    	}
    	else{
    		return redirect('/')->with('Login Gagal');
    	}
    }
    function keluar()
    {
        if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}else if (Auth::guard('pegawai')->check()) {
    		Auth::guard('pegawai')->logout();
		}else if (Auth::guard('atasan')->check()) {
    		Auth::guard('atasan')->logout();
		}
		return redirect('/');
    }
}
