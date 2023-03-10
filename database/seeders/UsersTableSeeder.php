<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Database\Factories\UserFactory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Muhamad Odhie prasetio',
            'email' => 'test_fullstack@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Muhamad Odhie prasetio',
            'email' => 'tiotio179@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        UserFactory::times(10)->create();
    }
}
