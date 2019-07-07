<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@mail.m',
            'password' => bcrypt('123456'),
            'id_ukm' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'bem',
            'email' => 'bem@mail.m',
            'password' => bcrypt('123456'),
            
        ]);

    }
}
