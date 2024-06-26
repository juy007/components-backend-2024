<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // Insert data pengguna
           DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            // tambahkan kolom lain jika diperlukan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
