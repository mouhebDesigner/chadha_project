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
        DB::table('users')->insert([
            [
                "nom" => "Mouhamed",
                "prenom" => "khlifi",
                "email" => "mouhamed@gmail.com",
                "numtel" => "23333444",
                "city" => "gabes",
                "codePostal" => "6014",
                "role" => "conducteur",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
        DB::table('users')->insert([
            [
                "nom" => "Amine",
                "prenom" => "khlifi",
                "email" => "amine@gmail.com",
                "numtel" => "45555666",
                "city" => "gabes",
                "codePostal" => "6014",
                "role" => "passager",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
    }
}
