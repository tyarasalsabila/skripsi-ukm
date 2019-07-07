<?php

use Illuminate\Database\Seeder;

class AgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agendas')->insert([
            'judul' => "A",
            'isi' => "ahahaha",
            'foto' =>'1562353360.jpg',
            'id_ukm' => 1,
            'id_user' => 1,
            'confirmed' => false,
            'link' => 'link.link',
        ]);
    }
}
