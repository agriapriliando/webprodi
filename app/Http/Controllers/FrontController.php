<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index()
    {
        $fkipk = Prodi::where('upps', 'Fakultas Keguruan dan Ilmu Pendidikan Kristen')->get();
        $fisik = Prodi::where('upps', 'Fakultas Ilmu Sosial Keagamaan Kristen')->get();
        $fskk = Prodi::where('upps', 'Fakultas Seni Keagamaan Kristen')->get();
        $pasca = Prodi::where('upps', 'Pascasarjana')->get();
        return view('front', compact('fkipk', 'fisik', 'fskk', 'pasca'));
    }

    public function home($slug)
    {
        $prodi = Prodi::where('slug', $slug)->first();
        $artikel = json_decode(Http::get("https://iaknpky.ac.id/api/artikel"));
        return view('home', [
            'artikel' => $artikel,
            'slug_prodi' => $slug,
            'header' => Part::where('prodi_id',$prodi->id)->where('kode','header')->first(),
            'seo_title' => Part::where('prodi_id',$prodi->id)->where('kode','seo_title')->first(),
            'seo_deskripsi' => Part::where('prodi_id',$prodi->id)->where('kode','seo_deskripsi')->first(),
            'seo_image' => Part::where('prodi_id',$prodi->id)->where('kode','seo_image')->first(),
            'pal1' => Part::where('prodi_id',$prodi->id)->where('kode','pal1')->first(),
            'pal2' => Part::where('prodi_id',$prodi->id)->where('kode','pal2')->first(),
            'pal3' => Part::where('prodi_id',$prodi->id)->where('kode','pal3')->first(),
            'pal4' => Part::where('prodi_id',$prodi->id)->where('kode','pal4')->first(),
            'pal5' => Part::where('prodi_id',$prodi->id)->where('kode','pal5')->first(),
            'pal6' => Part::where('prodi_id',$prodi->id)->where('kode','pal6')->first(),
            'pal7' => Part::where('prodi_id',$prodi->id)->where('kode','pal7')->first(),
            'pal8' => Part::where('prodi_id',$prodi->id)->where('kode','pal8')->first(),
            'visi' => Part::where('prodi_id',$prodi->id)->where('kode','visi')->first(),
            'misi' => Part::where('prodi_id',$prodi->id)->where('kode','misi')->first(),
            'footer1' => Part::where('prodi_id',$prodi->id)->where('kode','footer1')->first(),
            'footer2' => Part::where('prodi_id',$prodi->id)->where('kode','footer2')->first(),
            'footer3' => Part::where('prodi_id',$prodi->id)->where('kode','footer3')->first(),
            'footer4' => Part::where('prodi_id',$prodi->id)->where('kode','footer4')->first(),
            'footerlink' => Part::where('prodi_id',$prodi->id)->where('kode','LIKE','%footerlink%')->get(),
            'facebook' => Part::where('prodi_id',$prodi->id)->where('kode','facebook')->first(),
            'whatsapp' => Part::where('prodi_id',$prodi->id)->where('kode','whatsapp')->first(),
            'instagram' => Part::where('prodi_id',$prodi->id)->where('kode','instagram')->first(),
            'instagramembed' => Part::where('prodi_id',$prodi->id)->where('kode','instagramembed')->first(),
            'alamat' => Part::where('prodi_id',$prodi->id)->where('kode','alamat')->first(),
            'nohp' => Part::where('prodi_id',$prodi->id)->where('kode','nohp')->first(),
            'email' => Part::where('prodi_id',$prodi->id)->where('kode','email')->first(),
            'gmap' => Part::where('prodi_id',$prodi->id)->where('kode','gmap')->first(),
            'foto1' => Part::where('prodi_id',$prodi->id)->where('kode','foto1')->first(),
            'foto2' => Part::where('prodi_id',$prodi->id)->where('kode','foto2')->first(),
            'count1' => Part::where('prodi_id',$prodi->id)->where('kode','count1')->first(),
            'count2' => Part::where('prodi_id',$prodi->id)->where('kode','count2')->first(),
            'dokumen' => Part::where('prodi_id',$prodi->id)->where('kode','LIKE','%dokumen%')->get(),
        ]);
    }
}
