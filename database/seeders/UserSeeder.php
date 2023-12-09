<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'status' => 0,
        ]);

        DB::table('users')->insert([
            'name' => "Gustavo",
            'email' => 'gustavo@gmail.com',
            'password' => Hash::make('senha_do_gustavo'),
            'status' => 1,
        ]);

        DB::table('users')->insert([
            'name' => "Campos",
            'email' => 'gustavo_campos@gmail.com',
            'password' => Hash::make('senha_do_gustavo_campos'),
            'status' => 2,
        ]);
    }
}
