<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodis')->insert([
            // default isian
            [
                'nama_prodi' => 'Manajemen Pendidikan Kristen',
                'jenjang' => 'S1',
                'upps' => 'Fakultas Keguruan dan Ilmu Pendidikan Kristen',
                'slug' => Str::of('Manajemen Pendidikan Kristen')->slug('-'),
            ],
            [
                'nama_prodi' => 'Pendidikan Kristen Anak Usia Dini (PKAUD)',
                'jenjang' => 'S1',
                'upps' => 'Fakultas Keguruan dan Ilmu Pendidikan Kristen',
                'slug' => Str::of('Pendidikan Kristen Anak Usia Dini (PKAUD)')->slug('-'),
            ],
        ]);
    }
}
