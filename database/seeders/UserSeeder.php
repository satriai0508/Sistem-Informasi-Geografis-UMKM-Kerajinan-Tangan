<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Kerajinan',
            'email' => 'admin.kerajinan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Alby Handmade',
            'email' => 'alby.kerajinan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Putri Handmade',
            'email' => 'putri.kerajinan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);

        User::create([
            'name' => 'Ikko Handmade',
            'email' => 'ikko.kerajinan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'is_admin' => false
        ]);
    }
}
