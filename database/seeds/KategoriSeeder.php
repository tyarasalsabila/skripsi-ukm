<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('kategoris')->insert([
            'kategori' => 'Olah Raga',
        ]);

        //2
        DB::table('kategoris')->insert([
            'kategori' => 'Bela Diri',
        ]);

        //3
        DB::table('kategoris')->insert([
            'kategori' => 'Sosial',
        ]);

        //4
        DB::table('kategoris')->insert([
            'kategori' => 'Seni dan Bahasa',
        ]);
    }
}
