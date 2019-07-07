<?php

use Illuminate\Database\Seeder;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('beritas')->insert([
            'judul' => "A",
            'isi' => "ahahaha",
            'foto' =>'1562353360.jpg',
            'id_ukm' => 1,
            'id_user' => 1,
            'confirmed' =>true,
            
        ]);

        DB::table('beritas')->insert([
            'judul' => "B",
            'isi' => "ahahaha",
            'foto' =>'1562353360.jpg',
            'id_ukm' => 1,
            'id_user' => 1,
            'confirmed' =>false,
            
        ]);
    }
}
