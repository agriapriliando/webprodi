<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert([
            // data awal
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'seo_title',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'seo_deskripsi',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'seo_image',
                'link' => 'img/seo_default.jpg',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'header',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Pendaftaran',
                'kode' => 'h1',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'pal1',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Live as if you were to die tomorrow. Learn as if you were to live forever.',
                'kode' => 'pal2',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Info Pendaftaran',
                'kode' => 'pal3',
                'link' => 'https://api.whatsapp.com/send/?phone=628 isi no hp',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'pal4',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Tentang Manajemen Pendidikan Kristen',
                'kode' => 'pal5',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Berdiri sejak tahun.....',
                'kode' => 'pal6',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Tentang Gelar, Kompetensi Keahlian, atau Bidang Pekerjaan Lulusan....',
                'kode' => 'pal7',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Kegiatan Kampus yang mendukung perkuliahan....',
                'kode' => 'pal8',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Isi dengaan visi Manajemen Pendidikan Kristen',
                'kode' => 'visi',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Isi dengaan misi Manajemen Pendidikan Kristen',
                'kode' => 'misi',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Manajemen Pendidikan Kristen',
                'kode' => 'footer1',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Institut Agama Kristen Negeri Palangka Raya<br>(IAKN Palangka Raya)',
                'kode' => 'footer2',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Mari Bergabung Bersama Manajemen Pendidikan Kristen',
                'kode' => 'footer3',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Meraih Mimpi, Membangun Masa Depan, Menjadi yang Terbaik',
                'kode' => 'footer4',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Home',
                'kode' => 'footerlink1',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Tentang',
                'kode' => 'footerlink2',
                'link' => '#tentang',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Kurikulum',
                'kode' => 'footerlink3',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'SIMAK',
                'kode' => 'footerlink4',
                'link' => 'https://ecampus.iaknpky.ac.id/stakn/',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Web Kampus',
                'kode' => 'footerlink5',
                'link' => 'https://iaknpky.ac.id/',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Facebook',
                'kode' => 'facebook',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Whatsapp',
                'kode' => 'whatsapp',
                'link' => 'https://api.whatsapp.com/send/?phone=628 isi no hp',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Instagram',
                'kode' => 'instagram',
                'link' => 'https://www.instagram.com/mpk.iaknpky/',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Instagram Feed',
                'kode' => 'instagramembed',
                'link' => '',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Jalan Tampung Penyang, RTA Milono Km. 6<br>Kota Palangka Raya, 73112<br>Kalimantan Tengah',
                'kode' => 'alamat',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => '0808080808080',
                'kode' => 'nohp',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'contoh@email.com',
                'kode' => 'email',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8899998001502!2d113.87699987496782!3d-2.1953154977852374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb3296e8e3913%3A0xb93f6cc503b5875a!2sDitaria%20Olshop!5e0!3m2!1sen!2sid!4v1690983153042!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'kode' => 'gmap',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => '#',
                'kode' => 'foto1',
                'link' => 'img/hero-img.png',
            ],
            [
                'prodi_id' => 1,
                'teks' => '#',
                'kode' => 'foto2',
                'link' => 'img/about.jpg',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Mahasiswa',
                'kode' => 'count1',
                'link' => '550',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Mata Kuliah',
                'kode' => 'count2',
                'link' => '12',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Nama Dok/Link/Data 1',
                'kode' => 'dokumen1',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Nama Dok/Link/Data 2',
                'kode' => 'dokumen2',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Nama Dok/Link/Data 3',
                'kode' => 'dokumen3',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Nama Dok/Link/Data 4',
                'kode' => 'dokumen4',
                'link' => '#',
            ],
            [
                'prodi_id' => 1,
                'teks' => 'Nama Dok/Link/Data 5',
                'kode' => 'dokumen5',
                'link' => '#',
            ],
            // end data awal
        ]);

        DB::table('parts')->insert([
            [
                'prodi_id' => 2,
                'teks' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'seo_title',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'seo_deskripsi',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'seo_image',
                'link' => 'img/seo_default.jpg',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'PRODI PKUAD',
                'kode' => 'header',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Pendaftaran',
                'kode' => 'h1',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'pal1',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Live as if you were to die tomorrow. Learn as if you were to live forever.',
                'kode' => 'pal2',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Info Pendaftaran',
                'kode' => 'pal3',
                'link' => 'https://api.whatsapp.com/send/?phone=628 isi no hp',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'pal4',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Tentang Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'pal5',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Berdiri sejak tahun.....',
                'kode' => 'pal6',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Tentang Gelar, Kompetensi Keahlian, atau Bidang Pekerjaan Lulusan....',
                'kode' => 'pal7',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Kegiatan Kampus yang mendukung perkuliahan....',
                'kode' => 'pal8',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Isi dengaan visi Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'visi',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Isi dengaan misi Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'misi',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'footer1',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Institut Agama Kristen Negeri Palangka Raya<br>(IAKN Palangka Raya)',
                'kode' => 'footer2',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Mari Bergabung Bersama Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'kode' => 'footer3',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Meraih Mimpi, Membangun Masa Depan, Menjadi yang Terbaik',
                'kode' => 'footer4',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Home',
                'kode' => 'footerlink1',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Tentang',
                'kode' => 'footerlink2',
                'link' => '#tentang',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Kurikulum',
                'kode' => 'footerlink3',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'SIMAK',
                'kode' => 'footerlink4',
                'link' => 'https://ecampus.iaknpky.ac.id/stakn/',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Web Kampus',
                'kode' => 'footerlink5',
                'link' => 'https://iaknpky.ac.id/',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Facebook',
                'kode' => 'facebook',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Whatsapp',
                'kode' => 'whatsapp',
                'link' => 'https://api.whatsapp.com/send/?phone=628 isi no hp',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Instagram',
                'kode' => 'instagram',
                'link' => 'https://www.instagram.com/mpk.iaknpky/',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Instagram Feed',
                'kode' => 'instagramembed',
                'link' => '',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Jalan Tampung Penyang, RTA Milono Km. 6<br>Kota Palangka Raya, 73112<br>Kalimantan Tengah',
                'kode' => 'alamat',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => '0808080808080',
                'kode' => 'nohp',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'contoh@email.com',
                'kode' => 'email',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8899998001502!2d113.87699987496782!3d-2.1953154977852374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb3296e8e3913%3A0xb93f6cc503b5875a!2sDitaria%20Olshop!5e0!3m2!1sen!2sid!4v1690983153042!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'kode' => 'gmap',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => '#',
                'kode' => 'foto1',
                'link' => 'img/hero-img.png',
            ],
            [
                'prodi_id' => 2,
                'teks' => '#',
                'kode' => 'foto2',
                'link' => 'img/about.jpg',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Mahasiswa',
                'kode' => 'count1',
                'link' => '550',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Mata Kuliah',
                'kode' => 'count2',
                'link' => '12',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Nama Dok/Link/Data 1',
                'kode' => 'dokumen1',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Nama Dok/Link/Data 2',
                'kode' => 'dokumen2',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Nama Dok/Link/Data 3',
                'kode' => 'dokumen3',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Nama Dok/Link/Data 4',
                'kode' => 'dokumen4',
                'link' => '#',
            ],
            [
                'prodi_id' => 2,
                'teks' => 'Nama Dok/Link/Data 5',
                'kode' => 'dokumen5',
                'link' => '#',
            ],
            // end data awal
        ]);
    }
}
