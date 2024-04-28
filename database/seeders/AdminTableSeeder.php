<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'cs',
            'email' => 'cs@cs.com',
            'password' => Hash::make('cs'),
            // tambahkan kolom lain jika diperlukan
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin',
        ]);
    }
}
