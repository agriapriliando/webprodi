<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminutamaController extends Controller
{
    public function index()
    {
        $users = User::with('prodis')->get();
        $allprodi = Prodi::withCount('users')->get();
        $daftarweb = User::find(session('iduser'))->prodis()->orderBy('id')->get();

        // slug link home
        $slughome = $daftarweb[0]->slug;
        return view('admin.adminutama', compact('users', 'allprodi', 'daftarweb', 'slughome'));
    }

    public function storeuser(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'jenis' => 'required',
            'website_dikelola' => 'required',
            'password' => 'required',
        ]);
        
        $newuser = DB::transaction(function () use ($request) {
            $newuser = User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'jenis' => $request->jenis,
                'password' => bcrypt($request->password),
            ]);

            $newuser->prodis()->attach($request->website_dikelola);

            return $newuser;
        });

        // return $newuser;
        return redirect('admin/utama')->with('status', 'Akun '.$newuser->nama.' Berhasil ditambahkan');
    }

    public function destroyuser($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status' => true,
            'message' =>  'Akun '.$user->nama.' Berhasil dihapus'
        ]);
    }

    public function edituser($id)
    {
        $user =  User::find($id);
        $allprodi = Prodi::all();
        $daftarweb = User::find(session('iduser'))->prodis()->orderBy('id')->get();
        $website_dikelola = $user->prodis()->pluck('prodi_id')->all();
        // return $website_dikelola;
        return view('admin.useredit', compact('user', 'allprodi', 'daftarweb', 'website_dikelola'));
    }

    public function updateuser(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'jenis' => 'required',
            'website_dikelola' => 'required',
        ]);
        $user = User::find($id);
        
        DB::transaction(function () use ($request, $id, $user) {
            if($request->password <> null) {
                User::where('id',$id)->update([
                    'nama' => $request->nama,
                    'username' => $request->username,
                    'jenis' => $request->jenis,
                    'password' => bcrypt($request->password),
                ]);
            } else {
                User::where('id', $id)->update([
                    'nama' => $request->nama,
                    'username' => $request->username,
                    'jenis' => $request->jenis,
                ]);
            }

            $user->prodis()->sync($request->website_dikelola);
        });

        return redirect('admin/utama/')->with('status', 'Akun '.$user->nama.' berhasil dirubah');
    }

    public function storeprodi(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required|unique:prodis,nama_prodi',
            'jenjang' => 'required',
            'upps' => 'required'
        ]);
        // nama image
        $namaimg = rand(10,100).$request->jenjang.Str::slug($request->nama_prodi);
        // copy file default
        Storage::copy('img/seo_awal.jpg', 'img/'.$namaimg.'_seo.jpg');
        Storage::copy('img/foto_awal.png', 'img/'.$namaimg.'_foto1.png');
        Storage::copy('img/foto_awal.png', 'img/'.$namaimg.'_foto2.png');

        $akronim = $request->jenjang;
        $words = explode(" ",$request->nama_prodi);
        foreach($words as $c) {
            $akronim .= mb_substr($c,0,1);
        }
        $akronim = strtolower($akronim);

        DB::transaction(function () use ($request, $namaimg, $akronim) {
            $prodi = Prodi::create([
                'nama_prodi' => $request->nama_prodi,
                'jenjang' => $request->jenjang,
                'upps' => $request->upps,
                'slug' => $akronim,
            ]);

            // default saat user utama membuat website, maka akses lsg diberikan
            User::find(1)->prodis()->attach($prodi->id);

            Part::insert([
                [
                    'prodi_id' => $prodi->id,
                    'teks' => $prodi->nama_prodi,
                    'kode' => 'seo_title',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Tentang '.$prodi->nama_prodi,
                    'kode' => 'seo_deskripsi',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Foto untuk SEO',
                    'kode' => 'seo_image',
                    'link' => 'img/'.$namaimg.'seo.jpg',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'PRODI (SINGKATAN)',
                    'kode' => 'header',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Pendaftaran',
                    'kode' => 'h1',
                    'link' => '#isi link pendaftaran',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => $prodi->nama_prodi,
                    'kode' => 'pal1',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Live as if you were to die tomorrow. Learn as if you were to live forever.',
                    'kode' => 'pal2',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Info Pendaftaran',
                    'kode' => 'pal3',
                    'link' => 'https://api.whatsapp.com/send/?phone=62 isi no hp',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Prodi '.$prodi->nama_prodi,
                    'kode' => 'pal4',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Tentang Prodi '.$prodi->nama_prodi,
                    'kode' => 'pal5',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Berdiri sejak tahun.....',
                    'kode' => 'pal6',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Tentang Gelar, Kompetensi Keahlian, atau Bidang Pekerjaan Lulusan....',
                    'kode' => 'pal7',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Kegiatan Kampus yang mendukung perkuliahan....',
                    'kode' => 'pal8',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Isi dengaan visi '.$prodi->nama_prodi,
                    'kode' => 'visi',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Isi dengaan misi '.$prodi->nama_prodi,
                    'kode' => 'misi',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => $prodi->nama_prodi,
                    'kode' => 'footer1',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Institut Agama Kristen Negeri Palangka Raya<br>(IAKN Palangka Raya)',
                    'kode' => 'footer2',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Mari Bergabung Bersama Prodi '.$prodi->nama_prodi,
                    'kode' => 'footer3',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Meraih Mimpi, Membangun Masa Depan, Menjadi yang Terbaik',
                    'kode' => 'footer4',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Home',
                    'kode' => 'footerlink1',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Tentang',
                    'kode' => 'footerlink2',
                    'link' => '#tentang',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Kurikulum',
                    'kode' => 'footerlink3',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'SIMAK',
                    'kode' => 'footerlink4',
                    'link' => 'https://ecampus.iaknpky.ac.id/stakn/',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Website IAKN Palangka Raya',
                    'kode' => 'footerlink5',
                    'link' => 'https://iaknpky.ac.id/',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Facebook',
                    'kode' => 'facebook',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Whatsapp',
                    'kode' => 'whatsapp',
                    'link' => 'https://api.whatsapp.com/send/?phone=628 isi nohp',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Instagram',
                    'kode' => 'instagram',
                    'link' => 'https://www.instagram.com/humas_iaknpky/',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Instagram Feed',
                    'kode' => 'instagramembed',
                    'link' => 'humas_iaknpky',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Jalan Tampung Penyang, RTA Milono Km. 6<br>Kota Palangka Raya, 73112<br>Kalimantan Tengah',
                    'kode' => 'alamat',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => '0808080808080',
                    'kode' => 'nohp',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'contoh@email.com',
                    'kode' => 'email',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15946.864809844015!2d113.9158595!3d-2.2595313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de34d256cd711a7%3A0x4530439c8bd6f779!2sSTAKN%20PALANGKA%20RAYA!5e0!3m2!1sen!2sid!4v1693377595256!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'kode' => 'gmap',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => '#',
                    'kode' => 'foto1',
                    'link' => 'img/'.$namaimg.'_foto1.png',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => '#',
                    'kode' => 'foto2',
                    'link' => 'img/'.$namaimg.'_foto2.png',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Mahasiswa',
                    'kode' => 'count1',
                    'link' => '550',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Mata Kuliah',
                    'kode' => 'count2',
                    'link' => '12',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Nama Dok/Link/Data 1',
                    'kode' => 'dokumen1',
                    'link' => '#',
                ],
                [
                    'prodi_id' => $prodi->id,
                    'teks' => 'Nama Dok/Link/Data 2',
                    'kode' => 'dokumen2',
                    'link' => '#',
                ],
            ]);
            
        });

        return redirect('admin/utama')->with('status', 'Website Berhasil ditambahkan');
    }

    public function destroyprodi($id)
    {
        $prodi = Prodi::find($id);
        $seoimage = Part::where('prodi_id', $id)->where('kode','seo_image')->first();
        $foto1 = Part::where('prodi_id', $id)->where('kode','foto1')->first();
        $foto2 = Part::where('prodi_id', $id)->where('kode','foto2')->first();
        // hapus foto
        Storage::delete($seoimage->link);
        Storage::delete($foto1->link);
        Storage::delete($foto2->link);
        $prodi->delete();

        return response()->json([
            'status' => true,
            'message' =>  'Website/Prodi '.$prodi->nama_prodi.' Berhasil dihapus',
        ]);
    }

    public function editprodi($id)
    {
        $prodiedit = Prodi::find($id);
        // return $prodi;
        $daftarweb = User::find(session('iduser'))->prodis()->orderBy('id')->get();
        return view('admin.prodiedit', compact('prodiedit', 'daftarweb'));
    }

    public function updateprodi(Request $request, $id)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'jenjang' => 'required',
            'upps' => 'required',
            'slug' => 'required',
        ]);

        Prodi::where('id', $id)->update([
            'nama_prodi' => $request->nama_prodi,
            'jenjang' => $request->jenjang,
            'upps' => $request->upps,
            'slug' => $request->slug,
        ]);

        return redirect('admin/utama')->with('status', 'Informasi Website/Prodi '.$request->nama_prodi.' telah dirubah');

    }
}
