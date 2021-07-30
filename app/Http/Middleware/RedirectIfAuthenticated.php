<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin/dashboard');
        }else if (Auth::guard('pegawai')->check()) {
            return redirect('/pegawai/profile-pegawai');
        }else if (Auth::guard('recruitment')->check()) {
            return redirect('#');
        }else if (Auth::guard('magang')->check()) {
            return redirect('#');
        }
        else{
            redirect('/masuk');
        }

        return $next($request);
    }
}
