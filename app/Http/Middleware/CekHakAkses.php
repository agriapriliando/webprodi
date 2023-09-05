<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekHakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(in_array($request->segment(2), session('hakakses'))) {
            return $next($request);
        }
        session()->flash('status', 'Tidak Berhak, Silahkan Login Kembali');
        return redirect('login'); 
    }
}
