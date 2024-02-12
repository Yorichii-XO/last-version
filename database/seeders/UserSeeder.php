<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@marwabenharda.com',
            'password' => Hash::make('secret-winbest@123'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Second Admin
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'super-admin',
            'email' => 'super_admin@fatimezahra.com',
            'password' => Hash::make('secret-winbest@12344'),
            'role' => 'super-admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
