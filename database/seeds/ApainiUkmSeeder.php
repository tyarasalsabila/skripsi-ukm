<?php

use Illuminate\Database\Seeder;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('ukms')->insert([
            'nama' => "Unit Pramuka Unpad",
            'namapendek' => "UPU",
            'hari' => "Tentatif",
            'jam' => "00:00",
            'tempat' => "Tentatif",
            'profil' => "Pramuka Unpad resmi didirikan pada 30 Agustus 1975. Pramuka Unpad membentuk karakter anggotanya  untuk  siap terjun ke masyarakat. Kegiatan yang dilaksanakan oleh Pramuka Unpad berada di ruang lingkup pengembangan keterampilan anggota berwawasan lingkungan, bakti kepada masyarakat, kegiatan alam bebas, seni dan budaya, kewirausahaan, serta kegiatan lain yang menunjang pengembangan anggota Ambalan-Racana Padjadjaran.",
            'ketua' => "Pandu Budiman",
            'npm' => "200110170047",
            'pembina' => "FMIPA",
        ]);   

        //2
        DB::table('ukms')->insert([
            'nama' => "Unit Baseball dan Softball Unpad",
            'namapendek' => "SOFTBALL",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Fransiskus Bayu Prakoso",
            'npm' => "120110160107",
            'pembina' => "FMIPA",
        ]); 

        //3
        DB::table('ukms')->insert([
            'nama' => "Unit Bola Voli Unpad",
            'namapendek' => "UBVU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Denis Setiawan",
            'npm' => "240310150017",
            'pembina' => "FFarmasi",
        ]); 

        //4
        DB::table('ukms')->insert([
            'nama' => "Unit Gelanggang Seni Sastra Teater dan Film Unpad",
            'namapendek' => "GSSTF",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Ahrman Soleh Sandikusumah",
            'npm' => "18110160082",
            'pembina' => "FFarmasi",
        ]); 
        
        //5
        DB::table('ukms')->insert([
            'nama' => "Unit Korps Protokoler Mahasiswa Unpad",
            'namapendek' => "KPM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Rachmat Romadhon",
            'npm' => "230110160056",
            'pembina' => "FKG",
        ]);
        
        //6
        DB::table('ukms')->insert([
            'nama' => "Unit Perisai Diri Unpad",
            'namapendek' => "PD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Dede Randian Lubis",
            'npm' => "200110160182",
            'pembina' => "FKG",
        ]);

        //7
        DB::table('ukms')->insert([
            'nama' => "Unit Bridge Unpad",
            'namapendek' => "UBU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Nijar Krismawan",
            'npm' => "110110160170",
            'pembina' => "Sekolah Pascasarjana",
        ]);

        //8
        DB::table('ukms')->insert([
            'nama' => "Association Internationale des Etudiants en Sciences Economiques et Commerciales",
            'namapendek' => "AIESEC",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Melvin Rudi Sudijanto",
            'npm' => "140910160037",
            'pembina' => "Sekolah Pascasarjana",
        ]);

        //9
        DB::table('ukms')->insert([
            'nama' => "Unit Menwa Yon II Unpad",
            'namapendek' => "MENWA",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Wildan Al Gipari",
            'npm' => "150510150128",
            'pembina' => "FIKOM",
        ]);

        //10
        DB::table('ukms')->insert([
            'nama' => "Unit Sepak Bola Unpad",
            'namapendek' => "USBU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Reza Rizky Rifnaldi",
            'npm' => "210510160083",
            'pembina' => "FIKOM",
        ]);

        //11
        DB::table('ukms')->insert([
            'nama' => "Paduan Suara Mahasiswa",
            'namapendek' => "PSM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Galuh Valencia",
            'npm' => "210110160029",
            'pembina' => "FISIP",
        ]);

        //12
        DB::table('ukms')->insert([
            'nama' => "Unit Catur Mahasiswa Unpad",
            'namapendek' => "UCMU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M. Ikhsan S Bella",
            'npm' => "120110160066",
            'pembina' => "FISIP",
        ]);

        //13
        DB::table('ukms')->insert([
            'nama' => "Unit Pecinta Budaya Minangkabau",
            'namapendek' => "UPBM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Fajar Adiansyah Rahiq",
            'npm' => "140810160006",
            'pembina' => "FEB",
        ]);

        //14
        DB::table('ukms')->insert([
            'nama' => "Unit Flag Footbal UNPAD",
            'namapendek' => "UFFU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Septian Arya Rezky",
            'npm' => "23110150185",
            'pembina' => "FEB",
        ]);

        //15
        DB::table('ukms')->insert([
            'nama' => "Korps Sukarela Palang Merah Indonesia",
            'namapendek' => "KSR-PMI",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M Richki Gusti Syahputra",
            'npm' => "130110160159",
            'pembina' => "FTG",
        ]);

        //16
        DB::table('ukms')->insert([
            'nama' => "Unit Taekwondo Unpad",
            'namapendek' => "UTKD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Shalaludin Yusuf",
            'npm' => "110110180195",
            'pembina' => "FTG",
        ]);

        //17
        DB::table('ukms')->insert([
            'nama' => "Unit Shorinji Kempo Unpad",
            'namapendek' => "KEMPO",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Nurrizki Amalia Silmi",
            'npm' => "210210160101",
            'pembina' => "FIB",
        ]);

        //18
        DB::table('ukms')->insert([
            'nama' => "Lingkung Seni Sunda Unpad",
            'namapendek' => "LISES",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Tia Amalia Nisrinah",
            'npm' => "180110160034",
            'pembina' => "FIB",
        ]);

        //19
        DB::table('ukms')->insert([
            'nama' => "Lembaga Pengkajian dan Pengabdian Masyarakat Demokratis",
            'namapendek' => "LPPMD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Fakhri",
            'npm' => "170210160092",
            'pembina' => "FH",
        ]);

        //20
        DB::table('ukms')->insert([
            'nama' => "Unit Karate Unpad",
            'namapendek' => "UKU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Refki Hidayat",
            'npm' => "270110170067",
            'pembina' => "FH",
        ]);

        //21
        DB::table('ukms')->insert([
            'nama' => "International Association of Students in Agricultural and Related Sciences",
            'namapendek' => "IAAS",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Mela Tiara Cahaya",
            'npm' => "150610160095",
            'pembina' => "FAPERTA",
        ]);

        //22
        DB::table('ukms')->insert([
            'nama' => "Unit Bola Basket Unpad",
            'namapendek' => "UBBU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Alfriza Tri Wibowo",
            'npm' => "170410170059",
            'pembina' => "FAPERTA",
        ]);

        //23
        DB::table('ukms')->insert([
            'nama' => "Sadaluhung Padjadjaran Drum Corps",
            'namapendek' => "SPdC",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Alyanada Nurafifah",
            'npm' => "260110150081",
            'pembina' => "FKep",
        ]);

        //24
        DB::table('ukms')->insert([
            'nama' => "Unit Merpati Putih Unpad",
            'namapendek' => "MP",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muchammad Sururi",
            'npm' => "230110170168",
            'pembina' => "FKep",
        ]);

        //25
        DB::table('ukms')->insert([
            'nama' => "Search and Rescue Unpad",
            'namapendek' => "SAR",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M. Mutahhari Nurhaqi",
            'npm' => "140310160077",
            'pembina' => "FTIP",
        ]);

        //26
        DB::table('ukms')->insert([
            'nama' => "Unit Tarung Derajat Unpad",
            'namapendek' => "UTD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Christopher Valerio J",
            'npm' => "110110160215",
            'pembina' => "FTIP",
        ]);

        //27
        DB::table('ukms')->insert([
            'nama' => "Unit Bulu Tangkis Unpad",
            'namapendek' => "UBTU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M Agung Gumilar Anmuma",
            'npm' => "170410160077",
            'pembina' => "FAPSI",
        ]);

        //28
        DB::table('ukms')->insert([
            'nama' => "Unit Fotografi Unpad",
            'namapendek' => "SPEKTRUM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Febi Setianingrum",
            'npm' => "120104160076",
            'pembina' => "FAPSI",
        ]);

        //29
        DB::table('ukms')->insert([
            'nama' => "Unit Renang Unpad",
            'namapendek' => "URU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Ahmad Fariz Maulana",
            'npm' => "140210160026",
            'pembina' => "FPIK",
        ]);

        //30
        DB::table('ukms')->insert([
            'nama' => "Unit Palawa Unpad",
            'namapendek' => "PALAWA",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Tri Nur Ramdhani",
            'npm' => "230110170117",
            'pembina' => "FPIK",
        ]);

        //31
        DB::table('ukms')->insert([
            'nama' => "English Speaking Union",
            'namapendek' => "ESU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Sarah Aurelia Saragih",
            'npm' => "190110160087",
            'pembina' => "FAPET",
        ]);

        //32
        DB::table('ukms')->insert([
            'nama' => "Unit Hoki Unpad",
            'namapendek' => "UHU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Heryoga Matuza",
            'npm' => "270110160094",
            'pembina' => "FAPET",
        ]);

        //33
        DB::table('ukms')->insert([
            'nama' => "Unit Tenis Meja Unpad",
            'namapendek' => "UTMU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Hanif",
            'npm' => "140810170033",
            'pembina' => "FK",
        ]);

        //34
        DB::table('ukms')->insert([
            'nama' => "Padjadjaran Ensemble Community",
            'namapendek' => "PEC",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Wildan Khoirul Anam",
            'npm' => "210110160059",
            'pembina' => "FK",
        ]);
    }
}
