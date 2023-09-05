<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $daftarweb = Prodi::all();
        return view('login', compact('daftarweb'));
        if (session('namauser')) {
            $prodi = User::find(session('iduser'))->prodis()->orderBy('id')->first();
            return redirect('admin/'.$prodi->slug)->with('status', 'Selamat Datang '. Auth::user()->nama);
        }
    }

    public function login(Request $request)
    {
        $cre = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cre, $request->remember_me)) {
            $request->session()->regenerate();
            $request->session()->put('namauser',Auth::user()->nama);
            $request->session()->put('iduser',Auth::user()->id);
            $prodislug = User::with('prodis')->where('id',session('iduser'))->first();
            $daftarid = [];
            foreach($prodislug->prodis as $m){
                $daftarid[] = $m->slug;
            }
            $request->session()->put('hakakses',$daftarid);
            $prodi = User::find(session('iduser'))->prodis()->orderBy('id')->first();
            return redirect('admin/'.$prodi->slug)->with('status', 'Selamat Datang '. Auth::user()->nama);
            if(session('iduser') == 1) {
                return redirect('admin/users')->with('status', 'Selamat Datang Admin Utama'. Auth::user()->nama);
            }
        }
        return redirect('/')->with('status', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('logout', 'Anda Berhasil Logout');
    }
}
