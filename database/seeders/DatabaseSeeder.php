<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'uuid'=>Str::uuid(36),
            'name' => 'Navdeep Kaur',
            'email' => 'navdeepkaur.fresco@gmail.com',
            'role'  =>1,
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('Fresco@123'),
            'remember_token' => Str::random(10),
          
        ]);
    }
}
