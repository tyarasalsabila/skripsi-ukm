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
            'name' => 'BEM',
            'email' => 'adminbem@ukm.unpad',
            'password' => bcrypt('adminbem'),
        ]);

        DB::table('users')->insert([
            'name' => 'UPU',
            'email' => 'upu@ukm.unpad',
            'password' => bcrypt('ukmupu'),
            'id_ukm' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'SOFTBALL',
            'email' => 'softball@ukm.unpad',
            'password' => bcrypt('ukmsoftball'),
            'id_ukm' => 2,
        ]);
        
        DB::table('users')->insert([
            'name' => 'UBVU',
            'email' => 'ubvu@ukm.unpad',
            'password' => bcrypt('ukmubvu'),
            'id_ukm' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'GSSTF',
            'email' => 'gsstf@ukm.unpad',
            'password' => bcrypt('ukmgsstf'),
            'id_ukm' => 4,
        ]);

        DB::table('users')->insert([
            'name' => 'KPM',
            'email' => 'kpm@ukm.unpad',
            'password' => bcrypt('ukmkpm'),
            'id_ukm' => 5,
        ]);

        DB::table('users')->insert([
            'name' => 'PD',
            'email' => 'pd@ukm.unpad',
            'password' => bcrypt('ukmperisai'),
            'id_ukm' => 6,
        ]);

        DB::table('users')->insert([
            'name' => 'UBU',
            'email' => 'ubu@ukm.unpad',
            'password' => bcrypt('ukmubu'),
            'id_ukm' => 7,
        ]);

        DB::table('users')->insert([
            'name' => 'AIESEC',
            'email' => 'aiesec@ukm.unpad',
            'password' => bcrypt('ukmaiesec'),
            'id_ukm' => 8,
        ]);

        DB::table('users')->insert([
            'name' => 'MENWA',
            'email' => 'menwa@ukm.unpad',
            'password' => bcrypt('ukmmenwa'),
            'id_ukm' => 9,
        ]);

        DB::table('users')->insert([
            'name' => 'USBU',
            'email' => 'usbu@ukm.unpad',
            'password' => bcrypt('ukmusbu'),
            'id_ukm' => 10,
        ]);

        DB::table('users')->insert([
            'name' => 'PSM',
            'email' => 'psm@ukm.unpad',
            'password' => bcrypt('ukmpsm'),
            'id_ukm' => 11,
        ]);

        DB::table('users')->insert([
            'name' => 'UCMU',
            'email' => 'ucmu@ukm.unpad',
            'password' => bcrypt('ukmucmu'),
            'id_ukm' => 12,
        ]);

        DB::table('users')->insert([
            'name' => 'UPMB',
            'email' => 'upmb@ukm.unpad',
            'password' => bcrypt('ukmupmb'),
            'id_ukm' => 13,
        ]);

        DB::table('users')->insert([
            'name' => 'UFFU',
            'email' => 'uffu@ukm.unpad',
            'password' => bcrypt('ukmuffu'),
            'id_ukm' => 14,
        ]);

        DB::table('users')->insert([
            'name' => 'KSRPMI',
            'email' => 'ksrpmi@ukm.unpad',
            'password' => bcrypt('ukmksrpmi'),
            'id_ukm' => 15,
        ]);

        DB::table('users')->insert([
            'name' => 'UTKD',
            'email' => 'utkd@ukm.unpad',
            'password' => bcrypt('ukmutkd'),
            'id_ukm' => 16,
        ]);

        DB::table('users')->insert([
            'name' => 'KEMPO',
            'email' => 'kempo@ukm.unpad',
            'password' => bcrypt('ukmkempo'),
            'id_ukm' => 17,
        ]);

        DB::table('users')->insert([
            'name' => 'LISES',
            'email' => 'lises@ukm.unpad',
            'password' => bcrypt('ukmlises'),
            'id_ukm' => 18,
        ]);

        DB::table('users')->insert([
            'name' => 'LPPMD',
            'email' => 'lppmd@ukm.unpad',
            'password' => bcrypt('ukmlppmd'),
            'id_ukm' => 19,
        ]);

        DB::table('users')->insert([
            'name' => 'UKU',
            'email' => 'uku@ukm.unpad',
            'password' => bcrypt('ukmuku'),
            'id_ukm' => 20,
        ]);

        DB::table('users')->insert([
            'name' => 'IAAS',
            'email' => 'iaas@ukm.unpad',
            'password' => bcrypt('ukmiaas'),
            'id_ukm' => 21,
        ]);

        DB::table('users')->insert([
            'name' => 'UBBU',
            'email' => 'ubbu@ukm.unpad',
            'password' => bcrypt('ukmubbu'),
            'id_ukm' => 22,
        ]);

        DB::table('users')->insert([
            'name' => 'SPDC',
            'email' => 'spdc@ukm.unpad',
            'password' => bcrypt('ukmspdc'),
            'id_ukm' => 23,
        ]);

        DB::table('users')->insert([
            'name' => 'MERPATI',
            'email' => 'merpati@ukm.unpad',
            'password' => bcrypt('ukmmerpati'),
            'id_ukm' => 24,
        ]);

        DB::table('users')->insert([
            'name' => 'SAR',
            'email' => 'sar@ukm.unpad',
            'password' => bcrypt('ukmsar'),
            'id_ukm' => 25,
        ]);

        DB::table('users')->insert([
            'name' => 'UTD',
            'email' => 'utd@ukm.unpad',
            'password' => bcrypt('ukmutd'),
            'id_ukm' => 26,
        ]);

        DB::table('users')->insert([
            'name' => 'UBTU',
            'email' => 'ubtu@ukm.unpad',
            'password' => bcrypt('ukmubtu'),
            'id_ukm' => 27,
        ]);

        DB::table('users')->insert([
            'name' => 'SPEKTRUM',
            'email' => 'spektrum@ukm.unpad',
            'password' => bcrypt('ukmspektrum'),
            'id_ukm' => 28,
        ]);

        DB::table('users')->insert([
            'name' => 'URU',
            'email' => 'uru@ukm.unpad',
            'password' => bcrypt('ukmuru'),
            'id_ukm' => 29,
        ]);

        DB::table('users')->insert([
            'name' => 'PALAWA',
            'email' => 'palawa@ukm.unpad',
            'password' => bcrypt('ukmpalawa'),
            'id_ukm' => 30,
        ]);

        DB::table('users')->insert([
            'name' => 'ESU',
            'email' => 'esu@ukm.unpad',
            'password' => bcrypt('ukmesu'),
            'id_ukm' => 31,
        ]);

        DB::table('users')->insert([
            'name' => 'UHU',
            'email' => 'uhu@ukm.unpad',
            'password' => bcrypt('ukmuhu'),
            'id_ukm' => 32,
        ]);

        DB::table('users')->insert([
            'name' => 'UTMU',
            'email' => 'utmu@ukm.unpad',
            'password' => bcrypt('ukmutmu'),
            'id_ukm' => 33,
        ]);

        DB::table('users')->insert([
            'name' => 'PEC',
            'email' => 'pec@ukm.unpad',
            'password' => bcrypt('ukmpec'),
            'id_ukm' => 34,
        ]);
    }
}
