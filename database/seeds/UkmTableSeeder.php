<?php

use Illuminate\Database\Seeder;

class UkmTableSeeder extends Seeder
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
            'nama_ukm' => "Unit Pramuka Unpad",
            'namapendek' => "UPU",
            'hari' => "Senin, Kamis",
            'jam' => "16:30",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Pramuka Unpad resmi didirikan pada 30 Agustus 1975. Pramuka Unpad membentuk karakter 
                        anggotanya  untuk  siap terjun ke masyarakat. Kegiatan yang dilaksanakan oleh Pramuka 
                        Unpad berada di ruang lingkup pengembangan keterampilan anggota berwawasan lingkungan, 
                        bakti kepada masyarakat, kegiatan alam bebas, seni dan budaya, kewirausahaan, serta 
                        kegiatan lain yang menunjang pengembangan anggota Ambalan-Racana Padjadjaran.",
            'ketua' => "Pandu Budiman",
            'npm' => "200110170047",
            'pembina' => "FMIPA",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);   

        //2
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Baseball dan Softball Unpad",
            'namapendek' => "SOFTBALL",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Fransiskus Bayu Prakoso",
            'npm' => "120110160107",
            'pembina' => "FMIPA",
            'line' => "@",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]); 

        //3
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bola Voli Unpad",
            'namapendek' => "UBVU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Denis Setiawan",
            'npm' => "240310150017",
            'pembina' => "FFarmasi",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]); 

        //4
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Gelanggang Seni Sastra Teater dan Film Unpad",
            'namapendek' => "GSSTF",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Ahrman Soleh Sandikusumah",
            'npm' => "18110160082",
            'pembina' => "FFarmasi",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]); 
        
        //5
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Korps Protokoler Mahasiswa Unpad",
            'namapendek' => "KPM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Rachmat Romadhon",
            'npm' => "230110160056",
            'pembina' => "FKG",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);
        
        //6
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Perisai Diri Unpad",
            'namapendek' => "PD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Dede Randian Lubis",
            'npm' => "200110160182",
            'pembina' => "FKG",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //7
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bridge Unpad",
            'namapendek' => "UBU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Nijar Krismawan",
            'npm' => "110110160170",
            'pembina' => "Sekolah Pascasarjana",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //8
        DB::table('ukms')->insert([
            'nama_ukm' => "Association Internationale des Etudiants en Sciences Economiques et Commerciales",
            'namapendek' => "AIESEC",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Melvin Rudi Sudijanto",
            'npm' => "140910160037",
            'pembina' => "Sekolah Pascasarjana",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //9
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Menwa Yon II Unpad",
            'namapendek' => "MENWA",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Wildan Al Gipari",
            'npm' => "150510150128",
            'pembina' => "FIKOM",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //10
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Sepak Bola Unpad",
            'namapendek' => "USBU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Reza Rizky Rifnaldi",
            'npm' => "210510160083",
            'pembina' => "FIKOM",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //11
        DB::table('ukms')->insert([
            'nama_ukm' => "Paduan Suara Mahasiswa",
            'namapendek' => "PSM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Galuh Valencia",
            'npm' => "210110160029",
            'pembina' => "FISIP",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //12
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Catur Mahasiswa Unpad",
            'namapendek' => "UCMU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M. Ikhsan S Bella",
            'npm' => "120110160066",
            'pembina' => "FISIP",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //13
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Pecinta Budaya Minangkabau",
            'namapendek' => "UPBM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Fajar Adiansyah Rahiq",
            'npm' => "140810160006",
            'pembina' => "FEB",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //14
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Flag Footbal UNPAD",
            'namapendek' => "UFFU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Septian Arya Rezky",
            'npm' => "23110150185",
            'pembina' => "FEB",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //15
        DB::table('ukms')->insert([
            'nama_ukm' => "Korps Sukarela Palang Merah Indonesia",
            'namapendek' => "KSR-PMI",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M Richki Gusti Syahputra",
            'npm' => "130110160159",
            'pembina' => "FTG",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //16
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Taekwondo Unpad",
            'namapendek' => "UTKD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Shalaludin Yusuf",
            'npm' => "110110180195",
            'pembina' => "FTG",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //17
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Shorinji Kempo Unpad",
            'namapendek' => "KEMPO",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Nurrizki Amalia Silmi",
            'npm' => "210210160101",
            'pembina' => "FIB",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //18
        DB::table('ukms')->insert([
            'nama_ukm' => "Lingkung Seni Sunda Unpad",
            'namapendek' => "LISES",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Tia Amalia Nisrinah",
            'npm' => "180110160034",
            'pembina' => "FIB",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //19
        DB::table('ukms')->insert([
            'nama_ukm' => "Lembaga Pengkajian dan Pengabdian Masyarakat Demokratis",
            'namapendek' => "LPPMD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Fakhri",
            'npm' => "170210160092",
            'pembina' => "FH",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //20
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Karate Unpad",
            'namapendek' => "UKU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Refki Hidayat",
            'npm' => "270110170067",
            'pembina' => "FH",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //21
        DB::table('ukms')->insert([
            'nama_ukm' => "International Association of Students in Agricultural and Related Sciences",
            'namapendek' => "IAAS",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Mela Tiara Cahaya",
            'npm' => "150610160095",
            'pembina' => "FAPERTA",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //22
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bola Basket Unpad",
            'namapendek' => "UBBU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Alfriza Tri Wibowo",
            'npm' => "170410170059",
            'pembina' => "FAPERTA",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //23
        DB::table('ukms')->insert([
            'nama_ukm' => "Sadaluhung Padjadjaran Drum Corps",
            'namapendek' => "SPdC",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Alyanada Nurafifah",
            'npm' => "260110150081",
            'pembina' => "FKep",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //24
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Merpati Putih Unpad",
            'namapendek' => "MP",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muchammad Sururi",
            'npm' => "230110170168",
            'pembina' => "FKep",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //25
        DB::table('ukms')->insert([
            'nama_ukm' => "Search and Rescue Unpad",
            'namapendek' => "SAR",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M. Mutahhari Nurhaqi",
            'npm' => "140310160077",
            'pembina' => "FTIP",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //26
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Tarung Derajat Unpad",
            'namapendek' => "UTD",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Christopher Valerio J",
            'npm' => "110110160215",
            'pembina' => "FTIP",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //27
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bulu Tangkis Unpad",
            'namapendek' => "UBTU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "M Agung Gumilar Anmuma",
            'npm' => "170410160077",
            'pembina' => "FAPSI",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //28
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Fotografi Unpad",
            'namapendek' => "SPEKTRUM",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Febi Setianingrum",
            'npm' => "120104160076",
            'pembina' => "FAPSI",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //29
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Renang Unpad",
            'namapendek' => "URU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Ahmad Fariz Maulana",
            'npm' => "140210160026",
            'pembina' => "FPIK",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //30
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Palawa Unpad",
            'namapendek' => "PALAWA",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Tri Nur Ramdhani",
            'npm' => "230110170117",
            'pembina' => "FPIK",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //31
        DB::table('ukms')->insert([
            'nama_ukm' => "English Speaking Union",
            'namapendek' => "ESU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Sarah Aurelia Saragih",
            'npm' => "190110160087",
            'pembina' => "FAPET",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //32
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Hoki Unpad",
            'namapendek' => "UHU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Heryoga Matuza",
            'npm' => "270110160094",
            'pembina' => "FAPET",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //33
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Tenis Meja Unpad",
            'namapendek' => "UTMU",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Muhammad Hanif",
            'npm' => "140810170033",
            'pembina' => "FK",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);

        //34
        DB::table('ukms')->insert([
            'nama_ukm' => "Padjadjaran Ensemble Community",
            'namapendek' => "PEC",
            'hari' => "Kamis",
            'jam' => "10:00",
            'tempat' => "Ruangan",
            'profil' => "UPU adalah",
            'ketua' => "Wildan Khoirul Anam",
            'npm' => "210110160059",
            'pembina' => "FK",
            'line' => "@whb2542h",
            'facebook' => "Pramuka Unpad",
            'twitter' => "@PramukaUnpad",
            'instagram' => "@pramukaunpad",
            'email' => "pramuka.unapd75@gmail.com",
        ]);
    }
}
