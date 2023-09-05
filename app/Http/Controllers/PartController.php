<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Request;

class PartController extends Controller
{
    public function index($slug)
    {
        // untuk data navbar
        $user = User::find(session('iduser'))->prodis()->orderBy('id')->get();
        $prodi = Prodi::where('slug', $slug)->first();
        return view('admin.dashboard',[
            'slug' => $slug,
            'user' => $user,
            'pal' => Part::where('prodi_id',$prodi->id)->where('kode','LIKE','%pal%')->get(),
            'foto' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%foto%')->get(),
            'count' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%count%')->get(),
            'seo' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%seo%')->get(),
            'footer' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%footer%')->get(),
            'header' => Part::where('prodi_id',$prodi->id)->where('kode','header')->first(),
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

    public function edit($slug,$part)
    {
        $prodi = Prodi::where('slug', $slug)->first();
        $parts = Part::where('prodi_id',$prodi->id)->where('kode', $part)->first();
        $prodislug = User::find(session('iduser'))->prodis()->orderBy('id')->first();
        $formlink = [
            'pal3','footerlink1','footerlink2','footerlink3','footerlink4','footerlink5',
            'facebook','whatsapp','instagram'
        ];
        $dokumen = Part::where('prodi_id',$prodi->id)->where('kode','LIKE','%dokumen%')->get();
        foreach($dokumen as $item) {
            $formlink[] = $item->kode;
        }
        // return $formlink;
        $formNoteks = [
            'facebook','whatsapp','instagram','instagramembed', 'foto1', 'foto2', 'seo_image'
        ];
        $user = User::find(session('iduser'))->prodis()->orderBy('id')->get();
        return view('admin.form', [
            // untuk navbar dan footer
            'user' => $user,
            'header' => Part::where('prodi_id',$prodi->id)->where('kode', 'header')->first(),
            'pal' => Part::where('prodi_id',$prodi->id)->where('kode','LIKE','%pal%')->get(),
            'pal3' => Part::where('prodi_id',$prodi->id)->where('kode', 'pal3')->first(),
            'visi' => Part::where('prodi_id',$prodi->id)->where('kode', 'visi')->first(),
            'misi' => Part::where('prodi_id',$prodi->id)->where('kode', 'misi')->first(),
            'footer' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%footer%')->get(),
            'facebook' => Part::where('prodi_id',$prodi->id)->where('kode', 'facebook')->first(),
            'whatsapp' => Part::where('prodi_id',$prodi->id)->where('kode', 'whatsapp')->first(),
            'instagram' => Part::where('prodi_id',$prodi->id)->where('kode', 'instagram')->first(),
            'instagramembed' => Part::where('prodi_id',$prodi->id)->where('kode', 'instagramembed')->first(),
            'alamat' => Part::where('prodi_id',$prodi->id)->where('kode', 'alamat')->first(),
            'nohp' => Part::where('prodi_id',$prodi->id)->where('kode', 'nohp')->first(),
            'email' => Part::where('prodi_id',$prodi->id)->where('kode', 'email')->first(),
            'gmap' => Part::where('prodi_id',$prodi->id)->where('kode', 'gmap')->first(),
            'foto' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%foto%')->get(),
            'count' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%count%')->get(),
            'seo' => Part::where('prodi_id',$prodi->id)->where('kode', 'LIKE', '%seo%')->get(),

            'footer1' => Part::where('prodi_id',$prodi->id)->where('kode', 'footer1')->first(),
            'footer2' => Part::where('prodi_id',$prodi->id)->where('kode', 'footer2')->first(),
            'footer3' => Part::where('prodi_id',$prodi->id)->where('kode', 'footer3')->first(),
            'footer4' => Part::where('prodi_id',$prodi->id)->where('kode', 'footer4')->first(),
            'footerlink' => Part::where('prodi_id',$prodi->id)->where('kode','LIKE','%footerlink%')->get(),
            // untuk navbar dan footer
            'slug' => $slug,
            'part' => $parts,
            'prodislug' => $prodislug->slug,
            'formlink' => $formlink,
            'formNoteks' => $formNoteks
        ]);
    }

    public function update(Request $request, $slug, $part)
    {
        $request->validate([
            'teks' => 'required',
        ]);
        if ($request->has('link'))
        {
            $link = $request->link;
        } else {
            $link = '#';
        }
        $prodi = Prodi::where('slug', $slug)->first();
        Part::where('prodi_id',$prodi->id)->where('kode', $part)
        ->update([
            'teks' => $request->teks,
            'link' => $link,
        ]);

        return redirect('part/'.$slug.'/'.$part)->with('status', $part.' Berhasil dirubah');
    }

    public function destroy($slug, $part)
    {
        $prodi = Prodi::where('slug', $slug)->first();
        $link = Part::where('prodi_id',$prodi->id)->where('kode', $part)->first();
        $link->delete();

        return response()->json([
            'status' => true,
            'message' => 'Link '.$link->teks.' Berhasil dihapus',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'teks' => 'required',
            'link' => 'required',
        ]);
        
        $prodi = Prodi::where('slug', $request->slug)->first();
        $kode = 'dokumen'.rand(11111,99999);
        Part::insert([
            'prodi_id' => $prodi->id,
            'teks' => $request->teks,
            'link' => $request->link,
            'kode' => $kode,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Link '.$request->teks.' Berhasil ditambahkan',
            200
        ]);
    }

    public function uploadimg(Request $request, $slug, $part)
    {
        $request->validate([
            'link' => 'required',
        ]);
        $prodi = Prodi::where('slug', $slug)->first();
        // cari file lama
        $filelama = Part::where('prodi_id',$prodi->id)->where('kode', $part)->first();
        // hapus file lama
        Storage::delete($filelama->link);

        // file baru
        $path = $request->file('link')->store('img');
        Part::where('prodi_id',$prodi->id)->where('kode', $part)
        ->update([
            'link' => $path,
        ]);

        return redirect('part/'.$slug.'/'.$part)->with('status', $part.' Berhasil dirubah');
    }
}
