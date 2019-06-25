<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('ukms')->insert([
            'nama' => "ukm",
            'hari' => "senin",
            'jam' => "11:12:21",
            'tempat' => "Unpad",
            'profil' => "jasdlajhsdl",
        ]);

        DB::table('users')->insert([
            'name' => "ukm",
            'email' => "ukm".'@gmail.com',
            'password' => bcrypt('secret'),
            'id_ukm' => 1,
        ]);

        
        DB::table('anggotas')->insert([
            'nama' => "A",
            'jurusan' => "IT",
            'fakultas' => "MIPA",
            'angkatan' => "2015",
            'aktif' => true,
            'id_ukm' => 1,
        ]);
    }
}