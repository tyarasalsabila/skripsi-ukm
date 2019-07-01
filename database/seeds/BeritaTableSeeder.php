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
            'foto' =>'aisd',
            'id_ukm' => 1,
            'id_user' => 1,
            'confirmed' =>true,
            
        ]);
    }
}
