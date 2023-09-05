<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProdiSeeder::class,
            UserSeeder::class,
            PartSeeder::class,
        ]);

        // User::factory()->count(10)->create();

        DB::table('prodi_user')->insert([
            [
                'user_id' => 1,
                'prodi_id' => 1,
            ],
            [
                'user_id' => 1,
                'prodi_id' => 2,
            ],
            [
                'user_id' => 2,
                'prodi_id' => 1,
            ],
        ]);
    }
}
