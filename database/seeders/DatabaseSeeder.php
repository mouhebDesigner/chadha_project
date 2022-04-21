<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            [
                "nom" => "khlifi",
                "prenom" => "chadha",
                "email" => "chadha@gmail.com",
                "numtel" => "12345678",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
    }
}
