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
            'email' => "pramuka.unpad75@gmail.com",
            'id_kategori' => 3,
        ]);   

        //2
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Baseball dan Softball Unpad",
            'namapendek' => "SOFTBALL",
            'hari' => "Rabu, Jumat, Minggu",
            'jam' => "16:00",
            'tempat' => "Lapangan Merah, Gor Jati Unpad, Lapangan Lodaya Bandung",
            'profil' => "Unit Baseball Softball Universitas Padjadjaran (Basesoft) merupakan salah 
                        satu Unit Kegiatan Mahasiswa yang berada di lingkungan Universitas Padjadjaran 
                        yang menampung minat dan bakat mahasiswa yang memiliki keinginan untuk 
                        mengembangkan diri dan kemampuannya dalam olah raga baseball softball. Mulai di 
                        sah kan sebagai UKM kembali sejak 2011, namun tim softball baseball Universitas 
                        Padjadjaran sudah sejak lama mengikuti kejuaran softball antar Universitas di 
                        Indonesia sejak tahun 2000. Sudah cukup banyak kejuaran yang di menangkan oleh 
                        tim softball Unpad, dari tim putra maupun tim putrinya. Beberapa mahasiswa Unpad 
                        yang tergabung di UKM ini, dahulu hingga sekarang banyak yang merupakan pemain 
                        yang membela daerahnya di PORDA maupun PON, selain itu juga ada beberapa yang 
                        merupakan pemain tim softball dan baseball nasional Indonesia.",
            'ketua' => "Fransiskus Bayu Prakoso",
            'npm' => "120110160107",
            'pembina' => "FMIPA",
            'line' => "-",
            'facebook' => "-",
            'twitter' => "@basesoftunpad",
            'instagram' => "@unpad.softball",
            'email' => "basesoft.unpad@gmail.com",
            'id_kategori' => 1,
        ]); 

        //3
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bola Voli Unpad",
            'namapendek' => "UBVU",
            'hari' => "Selasa",
            'jam' => "16:00",
            'tempat' => "Lapangan Kimia",
            'profil' => "Unit Bola Voli UNPAD merupakan salah satu Unit Kegiatan Mahasiswa yang berada 
                        di lingkungan Universitas Padjadjaran yang menampung minat dan bakat dalam bidang 
                        voli.",
            'ketua' => "Denis Setiawan",
            'npm' => "240310150017",
            'pembina' => "FFarmasi",
            'line' => "@viy1823n",
            'facebook' => "-",
            'twitter' => "@voliunpad",
            'instagram' => "@voliunpad",
            'email' => "unitbolavoliunpad@gmail.com",
            'id_kategori' => 1,
        ]); 

        //4
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Gelanggang Seni Sastra Teater dan Film Unpad",
            'namapendek' => "GSSTF",
            'hari' => "Senin - Jumat",
            'jam' => "16:00",
            'tempat' => "Sekretariat GSSTF (UKM Barat)",
            'profil' => "Gelanggang Seni Sastra Teater dan Film (GSSTF), yang terbentuk pada 13 Oktober 
                        1984, merupakan unit kegiatan mahasiswa (UKM) yang memfasilitasi kegiatan 
                        ekstrakurikuler mahasiswa di bidang seni khususnya seni sastra, teater dan film 
                        di Universitas Padjadjaran. UKM ini merupakan wadah bagi mahasiswa yang berniat 
                        untuk beraktivitas, menyalurkan ide-ide kreatif dan menggali potensi dalam 
                        bidang kesenian sebagai penerus keluarga besar mahasiswa Universitas 
                        Padjadjaran.",
            'ketua' => "Ahrman Soleh Sandikusumah",
            'npm' => "18110160082",
            'pembina' => "FFarmasi",
            'line' => "@yst2908c",
            'facebook' => "GSSTF Unpad",
            'twitter' => "@GSSTFUNPAD",
            'instagram' => "@gsstfunpad",
            'email' => "gelangganggs@gmail.com",
            'id_kategori' => 4,
        ]); 
        
        //5
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Korps Protokoler Mahasiswa Unpad",
            'namapendek' => "KPM",
            'hari' => "Senin - Jumat",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Korps Protokoler Mahasiswa (KPM) Unpad resmi berdiri pada hari tanggal 10 April 
                    2000. KPM Unpad merupakan unit kegiatan mahasiswa yang bertujuan mewadahi minat dan 
                    bakat mahasiswa Unpad dalam bidang keprotokolan. KPM Unpad berkembang secara progresif 
                    seiring dengan datangnya tawaran-tawaran kerja sama dari pihak eksternal Unpad. KPM 
                    Unpad memiliki misi untuk memperkenalkan ilmu keprotokolan dalam dunia kampus dan 
                    kemahasiswaan, karena apabila didalami ternyata ilmu keprotokolan memiliki banyak 
                    manfaat dan kegunaan di dalam kehidupan manusia.",
            'ketua' => "Rachmat Romadhon",
            'npm' => "230110160056",
            'pembina' => "FKG",
            'line' => "@qln072611",
            'facebook' => "-",
            'twitter' => "@kpmunpad",
            'instagram' => "@kpmunpad",
            'email' => "kpmunpad@gmail.com",
            'id_kategori' => 3,
        ]);
        
        //6
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Perisai Diri Unpad",
            'namapendek' => "PD",
            'hari' => "Rabu dan Sabtu",
            'jam' => "16:00",
            'tempat' => "Gor Jati Unpad",
            'profil' => "Unit Mahasiswa Perisai Diri merupakan salah satu unit kegiatan bela diri yang 
                        tergabung dalam IPSI (Ikatan Pencak Silat Seluruh Indonesia). Unit Kegiatan 
                        Mahasiswa Perisai Diri Universitas Padjadjaran merupakan salah satu unit latihan 
                        yang berada langsung di bawah naungan Perisai Diri Cabang Bandung serta merupakan 
                        bela diri pertama yang berdiri di lingkungan unit kegiatan mahasiswa Unpad. 
                        Perisai Diri Unpad berawal dari sebuah komunitas mahasiswa silat Perisai Diri 
                        yang bertempat dan berlatih di Fakultas Kedokteran dan Fakultas Pertanian pada 
                        tahun 1980-an.  Pada saat itu latihan dipimpin oleh Slamet Rahmat dan Mufti M 
                        Nurdin dari Tasikmalaya. Mufti mempersatukan komunitas PD Fakultas Kedokteran 
                        dan Fakultas Pertanian menjadi Unit Kegiatan Mahasiswa Unpad yang selanjutnya 
                        berlatih di halaman Masjid Al Jihad Kampus Dipati Ukur. Pada tahun 1988, komunitas 
                        mahasiswa Perisai Diri berubah status menjadi unit kegiatan mahasiswa (UKM) 
                        Universitas Padjadjaran yang secara resmi diakui dan disahkan oleh rektor.",
            'ketua' => "Dede Randian Lubis",
            'npm' => "200110160182",
            'pembina' => "FKG",
            'line' => "@cgk2038x",
            'facebook' => "Perisai Diri Unpad",
            'twitter' => "@UnpadDiri",
            'instagram' => "@perisaidiriunpad",
            'email' => "upofficial@gmail.com",
            'id_kategori' => 2,
        ]);

        //7
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bridge Unpad",
            'namapendek' => "UBU",
            'hari' => "Minggu",
            'jam' => "10:00",
            'tempat' => "Sekretariat UBU (UKM Barat)",
            'profil' => "Bridge Unpad didirikan pada tanggal 21 Maret 1999. Bridge merupakan olah raga 
                        otak yang dimainkan dengan satu set kartu. Manfaat olah raga ini antara lain 
                        melatih ingatan dan menghindarkan kepikunan, menambah tingkat kecerdasan baik 
                        IQ, EQ, maupun SQ, serta membentuk pola pikir yang terstuktur, sistematis, 
                        strategis, praktis, dan pragmatis dalam ilmu sains, sosial, dan psikologi secara 
                        bersamaan.",
            'ketua' => "Nijar Krismawan",
            'npm' => "110110160170",
            'pembina' => "Sekolah Pascasarjana",
            'line' => "-",
            'facebook' => "Bridge Unpad",
            'twitter' => "@birdgeunpad",
            'instagram' => "-",
            'email' => "bridgeunpad@gmail.com",
            'id_kategori' => 1,
        ]);

        //8
        DB::table('ukms')->insert([
            'nama_ukm' => "Association Internationale des Etudiants en Sciences Economiques et Commerciales",
            'namapendek' => "AIESEC",
            'hari' => "Rabu",
            'jam' => "16:00",
            'tempat' => "Sekretariat AIESEC",
            'profil' => "Association Internationale des Etudiants en Sciences Economiques et Commerciales 
                        (AIESEC) adalah organisasi pemuda Internasional terbesar di dunia yang fokus pada 
                        pengembangan potensi kepemimpinan pemuda melalui pengalaman pertukaran kebudayaan 
                        antar negara. AIESEC telah berada di 126 negara dan di Indonesia telah tersebar 
                        di 36 Universitas, salah satunya AIESEC Bandung. Awalnya AIESEC berdiri di 
                        Fakultas Ekonomi dan Bisnis Universitas Padjadjaran kemudian berkembang dan 
                        beraliansi dengan universitas lainnya di Bandung. AIESEC Bandung terdiri dari 
                        beberapa universitas di Bandung seperti UNPAD, ITB, UPI, UNPAR, TELKOM, dan 
                        lain-lain. AIESEC memiliki tiga program yaitu Global Volunteer, Global 
                        Enterpreneur, dan Global Talent.",
            'ketua' => "Melvin Rudi Sudijanto",
            'npm' => "140910160037",
            'pembina' => "Sekolah Pascasarjana",
            'line' => "@aiesecbandung",
            'facebook' => "AIESEC Bandung",
            'twitter' => "@aiesecbandung",
            'instagram' => "@aiesecbandung",
            'email' => "-",
            'id_kategori' => 4,
        ]);

        //9
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Menwa Yon II Unpad",
            'namapendek' => "MENWA",
            'hari' => "Kamis",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Resimen Mahasiswa Mahawarman Batalyon II (Menwa Yon II) Unpad yang merupakan 
                        pelopor dari terbentuknya Resimen Mahasiswa Mahawarman berdiri pada tanggal 11 
                        November 1964. Untuk membentuk jiwa kepemimpinan, loyalitas, serta 
                        intelektualitas yang tinggi, maka setiap anggotanya harus mengikuti berbagai 
                        pendidikan serta kursus-kursus guna terbentuknya karakter manusia tersebut",
            'ketua' => "Wildan Al Gipari",
            'npm' => "150510150128",
            'pembina' => "FIKOM",
            'line' => "@dxc9168k",
            'facebook' => "Menwa Batalyon II",
            'twitter' => "@MENWA_YON2",
            'instagram' => "@menwayon2unpad",
            'email' => "menwayon2@gmail.com",
            'id_kategori' => 3,
        ]);

        //10
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Sepak Bola Unpad",
            'namapendek' => "USBU",
            'hari' => "Senin, Rabu, Jumat, Sabtu",
            'jam' => "19:00",
            'tempat' => "Bale Santika, Gor Jati Unpad",
            'profil' => "USBU (Unit Sepak Bola Universitas Padjadjaran) merupakan salah satu unit kegiatan 
                        mahasiswa yang berada di Universitas Padjadjaran. Unit ini berdiri pada tahun 1984. 
                        Hingga saat ini, USBU menjadi satu – satunya tempat bagi mahasiswa Universitas 
                        Padjadjaran untuk menyalurkan rasa cintanya terhadap sepakbola. Pada awalnya USBU 
                        hanya mencangkupi bidang sepakbola saja, namun saat ini USBU juga telah mencangkup 
                        bidang futsal baik futsal putra maupun putri. Dengan demikian, USBU secara teknis 
                        memiliki tiga departemen yaitu sepakbola, futsal putra, dan futsal putri. Ketiganya 
                        berada di bawah naungan Unit Sepak Bola Universitas Padjadjaran",
            'ketua' => "Reza Rizky Rifnaldi",
            'npm' => "210510160083",
            'pembina' => "FIKOM",
            'line' => "-",
            'facebook' => "-",
            'twitter' => "@futsalunpad, @soccerunpad",
            'instagram' => "futsalunpad, soccerunpad",
            'email' => "futsalunpad@gmail.com, soccerunpad@gmail.com",
            'id_kategori' => 1,
        ]);

        //11
        DB::table('ukms')->insert([
            'nama_ukm' => "Paduan Suara Mahasiswa",
            'namapendek' => "PSM",
            'hari' => "Selasa dan Kamis",
            'jam' => "16:30",
            'tempat' => "Unpad Jatinangor, Unpad Dipati Ukur",
            'profil' => "Paduan Suara Mahasiswa Universitas Padjadjaran (PSM Unpad) merupakan sebuah 
                        organisasi kemahasiswaan yang terbentuk pada tahun 1978. PSM Unpad beranggotakan 
                        137 mahasiswa aktif dari berbagai disiplin ilmu. PSM Unpad berkembang sebagai 
                        salah satu unit kegiatan mahasiswa yang berperan penting dalam kegiatan-kegiatan 
                        protokoler dan seremonial di lingkungan Universitas Padjadjaran. Selain itu, PSM 
                        Unpad juga dikenal sebagai unit kegiatan mahasiswa terbesar di Universitas 
                        Padjadjaran dengan manajemen kemahasiswaan yang kuat. Dengan kata lain, unit 
                        kegiatan mahasiswa ini dapat menjadi sarana bagi para anggotanya untuk 
                        mengembangkan kemampuan bernyanyi maupun berorganisasi. ",
            'ketua' => "Galuh Valencia",
            'npm' => "210110160029",
            'pembina' => "FISIP",
            'line' => "@fyxi711d",
            'facebook' => "-",
            'twitter' => "@unpadchoir",
            'instagram' => "@unpadchoir",
            'email' => "unpadchoir@yahoo.com",
            'id_kategori' => 4,
        ]);

        //12
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Catur Mahasiswa Unpad",
            'namapendek' => "UCMU",
            'hari' => "Jumat",
            'jam' => "16:00",
            'tempat' => "Sekretariat UCMU",
            'profil' => "Unit Catur Mahasiswa Unpad (UCMU) yang dulu lebih dikenal dengan nama Percama 
                        Unpad didirikan pada tanggal 3 November 1980 dengan Grand Master Utut Ardianto 
                        (alumni FISIP Unpad) sebagai pelopornya. UCMU merupakan salah satu Unit Kegiatan 
                        Mahasiswa (UKM) di lingkungan Unpad yang menampung minat dan bakat mahasiswa 
                        yang memiliki keinginan untuk mengembangkan diri dan kemampuannya dalam olahraga 
                        catur.",
            'ketua' => "M. Ikhsan S Bella",
            'npm' => "120110160066",
            'pembina' => "FISIP",
            'line' => "-",
            'facebook' => "Catur Unpad",
            'twitter' => "-",
            'instagram' => "@catur.unpad",
            'email' => "-",
            'id_kategori' => 1,
        ]);

        //13
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Pecinta Budaya Minangkabau",
            'namapendek' => "UPBM",
            'hari' => "Rabu - Jumat",
            'jam' => "16:00",
            'tempat' => "Lapangan UKM Barat",
            'profil' => "Unit Pencinta Budaya Minangkabau (UPBM) Unpad merupakan suatu unit kegiatan 
                        mahasiswa yang memfasilitasi kegiatan mahasiswa yang berbasis penalaran. Unit 
                        ini merupakan wadah berkreasi dan berkegiatan bagi seluruh mahasiswa Universitas 
                        Padjadjaran yang lahir dari keinginan dan kecintaan mahasiswa sebagai generasi 
                        penerus untuk menggali dan mengembangkan nilai-nilai kebudayaan daerah(Khususnya 
                        Budaya Minangkabau) sebagai akar dari kebudayaan nasional yang tidak terlepas 
                        dari prinsip “Bhinneka Tunggal Ika”.",
            'ketua' => "Fajar Adiansyah Rahiq",
            'npm' => "140810160006",
            'pembina' => "FEB",
            'line' => "@oga7664c",
            'facebook' => "UPBM Unpad",
            'twitter' => "@upbmunpad",
            'instagram' => "@upbmunpad",
            'email' => "ukm.upbmunpad@gmail.com",
            'id_kategori' => 4,
        ]);

        //14
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Flag Footbal UNPAD",
            'namapendek' => "UFFU",
            'hari' => "Selasa dan Kamis",
            'jam' => "15:30",
            'tempat' => "Gor Jati Unpad",
            'profil' => "KONIGSTIGER (UFFU-KONIGSTIGER) adalah salah satu UKM olahraga di Unpad. UFFU 
                        memfokuskan diri dalam olahraga ‘Flag Football’ yang merupakan modifikasi dari 
                        olahraga American Football. Di Indonesia, tepatnya diantara kalangan pecinta 
                        olahraga flag football, nama UFFU-KONIGSTIGER sangat terkenal sebagai salah 
                        satu tim yang selalu mendominasi berbagai kompetisi baik di level nasional 
                        maupun regional. Selain itu, pemain-pemain UFFU-KONIGSTIGER selalu berkontribusi 
                        dalam tim regional maupun tim nasional.",
            'ketua' => "Septian Arya Rezky",
            'npm' => "23110150185",
            'pembina' => "FEB",
            'line' => "@gxd8903b",
            'facebook' => "Padjadjaran Flag Football",
            'twitter' => "@ff_unpad",
            'instagram' => "@ff_unpad",
            'email' => "flagfootballunpad@gmail.com",
            'id_kategori' => 1,
        ]);

        //15
        DB::table('ukms')->insert([
            'nama_ukm' => "Korps Sukarela Palang Merah Indonesia",
            'namapendek' => "KSR-PMI",
            'hari' => "1 Minggu Sekali",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Korps Sukarela PMI Unit Unpad merupakan unit aktivitas yang menitikberatkan 
                        kegiatan di bidang sosial kemanusiaan dan berorientasi pada Palang Merah 
                        Indonesia. Awalnya bernama Keluarga Donor Darah (KDD) yang didirikan oleh 
                        sejumlah mahasiswa dari Fakultas Kedokteran Unpad, dan kemudian secara resmi 
                        menjadi KSR PMI Unpad pada 9 Juni 1993.",
            'ketua' => "M Richki Gusti Syahputra",
            'npm' => "130110160159",
            'pembina' => "FTG",
            'line' => "@tof7117d",
            'facebook' => "KSR PMI Unit Unpad",
            'twitter' => "@KSRUnpad",
            'instagram' => "@ksr_pmiunpad",
            'email' => "ksr_pmiunpad@yahoo.com",
            'id_kategori' => 3,
        ]);

        //16
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Taekwondo Unpad",
            'namapendek' => "UTKD",
            'hari' => "Selasa dan Jumat",
            'jam' => "16:00",
            'tempat' => "Gor Jati Unpad",
            'profil' => "Unit Taekwondo Unpad (UTKD) didirikan pada tanggal 16 September 1982.",
            'ketua' => "Muhammad Shalaludin Yusuf",
            'npm' => "110110180195",
            'pembina' => "FTG",
            'line' => "@bgj3115u",
            'facebook' => "-",
            'twitter' => "-",
            'instagram' => "@taekwondo_unpad",
            'email' => "-",
            'id_kategori' => 1,
        ]);

        //17
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Shorinji Kempo Unpad",
            'namapendek' => "KEMPO",
            'hari' => "Rabu dan Sabtu",
            'jam' => "19:00",
            'tempat' => "Lobby Stadion Gor Jati",
            'profil' => "Shorinji Kempo Unpad berdiri sejak tahun 1973. Shorinji Kempo adalah salah satu 
                        dari seni bela diri yang berasal dari Jepang. Di Indonesia biasa disebut dengan 
                        Kempo saja. Bela diri ini diciptakan oleh Doshin So pada tahun 1947 sebagai 
                        sistem pelatihan dan pengembangan diri. Shorinji Kempo mempunyai tiga manfaat 
                        yaitu: pelatihan dan pertahanan diri, pelatihan mental, dan untuk kesehatan.
                        Teknik bela diri Shorinji Kempo terbagi menjadi dua, yaitu Goho dan Juho. Goho 
                        adalah teknik bela diri yang bersifat keras, memuat unsur berupa pukulan, 
                        tendangan, dan tangkisan. Juho merupakan teknik yang bersifat lunak, memuat 
                        unsur berupa bantingan, kuncian, tangkapan dan lemparan.",
            'ketua' => "Nurrizki Amalia Silmi",
            'npm' => "210210160101",
            'pembina' => "FIB",
            'line' => "@ptf7421b",
            'facebook' => "Shorinji Kempo Unpad",
            'twitter' => "@Kempounpad",
            'instagram' => "@kempo_unpad",
            'email' => "shorinjikempo.unpad@gmail.com",
            'id_kategori' => 1,
        ]);

        //18
        DB::table('ukms')->insert([
            'nama_ukm' => "Lingkung Seni Sunda Unpad",
            'namapendek' => "LISES",
            'hari' => "Senin - Jumat",
            'jam' => "16:00",
            'tempat' => "Sekretariat LISES",
            'profil' => "Lingkung Seni Sunda Universitas Padjadjaran (Lises Unpad) merupakan salah satu 
                        Unit Kegiatan Mahasiswa yang ada di lingkungan Universitas Padjadjaran. Didirikan 
                        pada tanggal 20 Februari 1982 dengan tujuan untuk mengumpulkan mahasiswa 
                        Universitas Padjadjaran yang berminat, mempunyai hobi ataupun keahlian di bidang 
                        Seni dan Budaya Sunda. ",
            'ketua' => "Tia Amalia Nisrinah",
            'npm' => "180110160034",
            'pembina' => "FIB",
            'line' => "@jij7198w",
            'facebook' => "Lises Unpad",
            'twitter' => "@Lisesunpad",
            'instagram' => "@lises_unpad",
            'email' => "-",
            'id_kategori' => 4,
        ]);

        //19
        DB::table('ukms')->insert([
            'nama_ukm' => "Lembaga Pengkajian dan Pengabdian Masyarakat Demokratis",
            'namapendek' => "LPPMD",
            'hari' => "3 Bulan Sekali",
            'jam' => "12:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Lembaga Pengkajian dan Pengabdian Masyarakat Demokratis adalah Unit Kegiatan 
                        Mahasiswa di Unpad yang bergerak di bidang sosial",
            'ketua' => "Muhammad Fakhri",
            'npm' => "170210160092",
            'pembina' => "FH",
            'line' => "@mcl9339o",
            'facebook' => "-",
            'twitter' => "@lppmdunpad",
            'instagram' => "-",
            'email' => "-",
            'id_kategori' => 3,
        ]);

        //20
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Karate Unpad",
            'namapendek' => "UKU",
            'hari' => "Senin dan Jumat",
            'jam' => "16:00",
            'tempat' => "Gor Jati Unpad",
            'profil' => "Unit Karate Unpad (UKU) merupakan unit kegiatan mahasiswa yang bergerak dalam 
                        bidang seni bela diri karate. Pada awalnya UKU merupakan komunitas yang didirikan 
                        oleh para atlet yang mengenyam pendidikan di Unpad, agar mereka tetap bisa latihan 
                        bersama di tengah kesibukan kuliah. Namun seiring berjalannya waktu, akhirnya 
                        komunitas tersebut berkembang menjadi unit kegiatan mahasiswa.",
            'ketua' => "Refki Hidayat",
            'npm' => "270110170067",
            'pembina' => "FH",
            'line' => "-",
            'facebook' => "-",
            'twitter' => "-",
            'instagram' => "-",
            'email' => "-",
            'id_kategori' => 1,
        ]);

        //21
        DB::table('ukms')->insert([
            'nama_ukm' => "International Association of Students in Agricultural and Related Sciences",
            'namapendek' => "IAAS",
            'hari' => "1 Minggu Sekali ",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "International Association of Students in Agricultural and Related Sciences (IAAS) 
                        adalah organisasi yang bergerak dibidang sosial dan pertanian dimana anggotanya 
                        terdiri dari berbagai fakultas dan jurusan. Kegiatan umum IAAS sendiri adalah 
                        kegiatan kegiatan yang berhubungan dengan masyarakat dan lingkungan.",
            'ketua' => "Mela Tiara Cahaya",
            'npm' => "150610160095",
            'pembina' => "FAPERTA",
            'line' => "@chm5168e",
            'facebook' => "-",
            'twitter' => "@IAASUnpad",
            'instagram' => "iass_unpad",
            'email' => "-",
            'id_kategori' => 3,
        ]);

        //22
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bola Basket Unpad",
            'namapendek' => "UBBU",
            'hari' => "Senin, Rabu, Jumat",
            'jam' => "18:00",
            'tempat' => "Hall Basket Bale Santika Unpad",
            'profil' => "Unit Bola Basket Unpad (UBBU) secara organisasi baru resmi didirikan bersamaan 
                        dengan disahkannya AD/ART UBBU oleh BEM KEMA Universitas Padjadjaran. UBBU memiliki 
                        kegiatan rutin baik yang bersifat internal maupun eksternal. Tiap tahunnya 
                        penerimaan anggota baru dilaksanakan melalui program Student Day yang menjadi 
                        gerbang awal bagi para anggota baru.",
            'ketua' => "Alfriza Tri Wibowo",
            'npm' => "170410170059",
            'pembina' => "FAPERTA",
            'line' => "@vck5884y",
            'facebook' => "-",
            'twitter' => "-",
            'instagram' => "@unpadbasketball",
            'email' => "timbasketunpad@gmail.com",
            'id_kategori' => 1,
        ]);

        //23
        DB::table('ukms')->insert([
            'nama_ukm' => "Sadaluhung Padjadjaran Drum Corps",
            'namapendek' => "SPdC",
            'hari' => "Senin, Rabu, Jumat",
            'jam' => "16:00",
            'tempat' => "Lapangan Eks Kopma Unpad",
            'profil' => "Sadaluhung Padjadjaran Drum Corps (SPDC) merupakan salah satu marching band tertua 
                        di Indonesia. Didirikan pada tanggal 21 Desember 1984, dan diresmikan oleh Menteri 
                        Pendidikan dan Kebudayaan Republik Indonesia saat itu, yaitu Prof. Dr. Nugroho 
                        Notosusanto.",
            'ketua' => "Alyanada Nurafifah",
            'npm' => "260110150081",
            'pembina' => "FKep",
            'line' => "@fhv97841",
            'facebook' => "Humas Sadaluhung",
            'twitter' => "-",
            'instagram' => "@spdc_unpad",
            'email' => "humas.spdc@gmail.com",
            'id_kategori' => 4,
        ]);

        //24
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Merpati Putih Unpad",
            'namapendek' => "MP",
            'hari' => "Senin dan Kamis",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadajaran",
            'profil' => "UKM Merpati Putih Unpad diresmikan pada 18 Juni 1996. UKM Merpati Putih Unpad 
                        bertujuan, pertama menumbuhkan dan mengembangkan rasa cinta terhadap almamater, 
                        bangsa, dan Negara serta turut mengupayakan terwujudnya Tri Dharma Perguruan 
                        Tinggi, kedua mengembangkan, mengarahkan, dan mewujudkan potensi mahasiswa 
                        dalam kegiatan, Merpati Putih.",
            'ketua' => "Muchammad Sururi",
            'npm' => "230110170168",
            'pembina' => "FKep",
            'line' => "@merpatiputihunpad",
            'facebook' => "Merpati Putih Unpad",
            'twitter' => "@MP_unpad",
            'instagram' => "@mpunpad",
            'email' => "ukm.merpatiputih@unpad.ac.id",
            'id_kategori' => 2,
        ]);

        //25
        DB::table('ukms')->insert([
            'nama_ukm' => "Search and Rescue Unpad",
            'namapendek' => "SAR",
            'hari' => "Senin, Selasa, Kamis, Jumat",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "SAR Unpad resmi didirikan pada tanggal 10 Oktober 1988. Kegiatan SAR Unpad bukan 
                        hanya dilakukan di alam bebas seperti halnya penggiat alam lainnya, tetapi lebih 
                        fokus pada ilmu tentang bagaimana caranya melakukan penyelamatan pada kegiatan 
                        alam bebas di berbagai medan",
            'ketua' => "M. Mutahhari Nurhaqi",
            'npm' => "140310160077",
            'pembina' => "FTIP",
            'line' => "@vvh7140y",
            'facebook' => "Unit Sar Unpad",
            'twitter' => "@sarunpad",
            'instagram' => "@unitsarunpad",
            'email' => "unitsarpadjadjaran@gmail.com",
            'id_kategori' => 3,
        ]);

        //26
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Tarung Derajat Unpad",
            'namapendek' => "UTD",
            'hari' => "Rabu dan Jumat",
            'jam' => "16:00",
            'tempat' => "Gor Jati Unpad, Lapangan Kickers MRU Unpad",
            'profil' => "Tarung Derajat sebenarnya sudah ada di Unpad semenjak tahun 2005 yang mana pada 
                        saat itu hanya sebagai olahraga untuk satpam yang bertugas di UNPAD, dengan dilatih 
                        oleh sang guru muda Rimba Dirganta. Sang guru muda Rimba Dirganta setelah lulus dari 
                        Unpad maka Tarung Derajat di UNPAD sudah tidak ada lagi. Pada tanggal 10 Oktober 
                        2015 terbentuklah komunitas Tarung Derajat, hingga tanggal 21 Agustus resmi menjadi 
                        Unit Kegiatan Mahasiswa (UKM).",
            'ketua' => "Christopher Valerio J",
            'npm' => "110110160215",
            'pembina' => "FTIP",
            'line' => "@bpb4185u",
            'facebook' => "-",
            'twitter' => "-",
            'instagram' => "@satlatunpad",
            'email' => "satlatunpad@gmail.com",
            'id_kategori' => 1,
        ]);

        //27
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Bulu Tangkis Unpad",
            'namapendek' => "UBTU",
            'hari' => "Senin, Kamis - Minggu",
            'jam' => "16:00",
            'tempat' => "Bale Santika, Gor Cileunyi Wetan, Gor Prestasi Bandung",
            'profil' => "Unit Bulu Tangkis Unpad (UBTU) didirikan pada 19 Desember 1986. Pada 
                        perkembangannya, UBTU tidak hanya sebagai tempat berkumpul mahasiswa yang hobi 
                        bermain bulu tangkis saja, namun untuk menampung dan mengembangkan potensi yang 
                        dimiliki mahasiswa Unpad dalam bidang bulu tangkis.",
            'ketua' => "M Agung Gumilar Anmuma",
            'npm' => "170410160077",
            'pembina' => "FAPSI",
            'line' => "@rem0673o",
            'facebook' => "-",
            'twitter' => "@ubtu_holic",
            'instagram' => "@ubtu_holic",
            'email' => "ubtuholic@gmail.com",
            'id_kategori' => 1,
        ]);

        //28
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Fotografi Unpad",
            'namapendek' => "SPEKTRUM",
            'hari' => "Tentatif",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Spektrum berdiri pada tanggal 28 Agustus 1998 sebagai Kelompok Fotografi Mahasiswa 
                        Universitas Padjadjaran. Spektrum diresmikan menjadi Unit Kegiatan Mahasiswa 
                        Fotografi Universitas Padjadjaran pada tanggal 1 Mei 2000 di Bandung untuk waktu 
                        yang tidak ditentukan.",
            'ketua' => "Febi Setianingrum",
            'npm' => "120104160076",
            'pembina' => "FAPSI",
            'line' => "@yji1696e",
            'facebook' => "-",
            'twitter' => "-",
            'instagram' => "@spektrum_unpad",
            'email' => "unit.fotografi.unpad@gmail.com",
            'id_kategori' => 4,
        ]);

        //29
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Renang Unpad",
            'namapendek' => "URU",
            'hari' => "Rabu, Kamis, Minggu",
            'jam' => "16:00",
            'tempat' => "yadhika Tanjungsari, Karangsetra Bandung",
            'profil' => "Unit Renang Unpad (URU) didirikan pada tanggal 1 Oktober 1988. Pada mulanya, URU 
                        merupakan sarana untuk berkumpul dan latihan untuk orang-orang yang ingin 
                        menyalurkan hobi renangnya. Dengan semakin berkembangnya UKM renang ini, anggota 
                        yang bergabung tidak hanya mereka yang jago berenang, tapi juga mereka yang tidak 
                        bisa berenang namun memiliki ketertarikan untuk belajar berenang.",
            'ketua' => "Ahmad Fariz Maulana",
            'npm' => "140210160026",
            'pembina' => "FPIK",
            'line' => "@iig9525w",
            'facebook' => "-",
            'twitter' => "-",
            'instagram' => "@unitrenangunpad",
            'email' => "unitrenangunpad1988@gmail.com",
            'id_kategori' => 1,
        ]);

        //30
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Palawa Unpad",
            'namapendek' => "PALAWA",
            'hari' => "Selasa, Jumat - Minggu",
            'jam' => "16:00",
            'tempat' => "Universitas Padjadjaran",
            'profil' => "Perhimpunan Mahasiswa Pecinta Alam (PMPA) Palawa Unpad diresmikan pada tanggal 
                        5 Oktober 1982. Kata ‘Palawa’ bukanlah sebuah singkatan melainkan kata yang diambil 
                        dari aksara pertama yang masuk di tanah Jawa yaitu ‘Pallawa’. Filosofinya yaitu 
                        sebuah aksara yang membawa pencerahan pada awal perkembangan literasi bangsa. 
                        Melalui perhimpunan ini, diharapkan anggotanya seperti makna ‘Palawa’ itu sendiri 
                        yaitu mencerahkan masyarakat awam dalam hal petualangan alam bebas dan lingkungan",
            'ketua' => "Tri Nur Ramdhani",
            'npm' => "230110170117",
            'pembina' => "FPIK",
            'line' => "-",
            'facebook' => "Palawa Unpad",
            'twitter' => "@Palawa_unpad",
            'instagram' => "@palawa_unpad",
            'email' => "palawaunpad.km21@gmail.com",
            'id_kategori' => 3,
        ]);

        //31
        DB::table('ukms')->insert([
            'nama_ukm' => "English Speaking Union",
            'namapendek' => "ESU",
            'hari' => "Selasa atau Kamis",
            'jam' => "16:00",
            'tempat' => "Sekretariat ESU",
            'profil' => "English Speaking Union (ESU) adalah sebuah organisasi kemahasiswaan yang didirikan 
                        pada tanggal 2 Mei 1982. Pada awalnya, ESU merupakan program mentoring bahasa 
                        Inggris untuk meningkatkan kemampuan mahasiswa Unpad dalam berbahasa Inggris. 
                        Kini, ESU memfokuskan kegiatannya dalam bidang debat parlemen berbahasa Inggris 
                        dengan visi untuk mengembangkan, meningkatkan, dan memberdayakan mahasiswa Unpad 
                        dalam berbahasa Inggris.",
            'ketua' => "Sarah Aurelia Saragih",
            'npm' => "190110160087",
            'pembina' => "FAPET",
            'line' => "@wih8119x",
            'facebook' => "English Speaking Union",
            'twitter' => "@Esu_unpad",
            'instagram' => "-",
            'email' => "unpadesu@gmail.com",
            'id_kategori' => 4,
        ]);

        //32
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Hoki Unpad",
            'namapendek' => "UHU",
            'hari' => "Selasa, Kamis, Sabtu",
            'jam' => "15:00",
            'tempat' => "Lapangan Basket Bale Santika, Gor Jati Unpad, Gor Cikutra Bandung",
            'profil' => "Hoki yang akan kita temui di Unpad bukanlah hoki yang pernah kita lihat dalam 
                        film “The Mighty Duck”, tetapi merupakan sebuah permainan yang dimainkan di atas 
                        lapangan berumput dengan menggunakan tongkat yang melengkung dan sebuah bola atau 
                        secara internasional disebut dengan Field Hockey. Dan ada juga “Hockey Indoor” 
                        yang dimainkan di lapangan indor seperti bermain futsal (kurang lebih) .Tentu 
                        saja tujuan permainan ini adalah memasukkan bola ke dalam gawang. Bisa dibilang, 
                        permainan ini hampir mirip dengan sepak bola. Permainan ini dapat dimainkan oleh 
                        pria maupun wanita. Hoki Unpad telah eksis didunia perhokian sejak tahun 1970-an. 
                        Sehingga membuat Hoki Unpad merupakan tim yang diperhitungkan keberadaannya. 
                        Selama ini telah banyak prestasi yang dihasilkan untuk membawa harum nama 
                        Universitas Padjadjaran. Selama hampir 47 tahunan telah terdaftar beberapa 
                        prestasi yang diraih.",
            'ketua' => "Muhammad Heryoga Matuza",
            'npm' => "270110160094",
            'pembina' => "FAPET",
            'line' => "-",
            'facebook' => "-",
            'twitter' => "@unithokiunpad",
            'instagram' => "@unithokiunpad",
            'email' => "unithokiunpad@yahoo.com",
            'id_kategori' => 1,
        ]);

        //33
        DB::table('ukms')->insert([
            'nama_ukm' => "Unit Tenis Meja Unpad",
            'namapendek' => "UTMU",
            'hari' => "Senin dan Kamis",
            'jam' => "16:00",
            'tempat' => "Bale Santika",
            'profil' => "Unit Tenis Meja Unpad adalah Unit Kegiatan Mahasiswa di Unpad yang 
                        bergerak di bidang olah raga",
            'ketua' => "Muhammad Hanif",
            'npm' => "140810170033",
            'pembina' => "FK",
            'line' => "@iar1845b",
            'facebook' => "-",
            'twitter' => "@UTMUnpad",
            'instagram' => "@tenismejaunpad",
            'email' => "-",
            'id_kategori' => 1,
        ]);

        //34
        DB::table('ukms')->insert([
            'nama_ukm' => "Padjadjaran Ensemble Community",
            'namapendek' => "PEC",
            'hari' => "Kamis",
            'jam' => "16:30",
            'tempat' => "Rektorat Unpad",
            'profil' => "Padjadjaran Ensemble Community adalah Unit Kegiatan Mahasiswa di Unpad yang 
                        bergerak di bidang musik",
            'ketua' => "Wildan Khoirul Anam",
            'npm' => "210110160059",
            'pembina' => "FK",
            'line' => "-",
            'facebook' => "-",
            'twitter' => "@EnsembleUnpad",
            'instagram' => "@padjadjaranensemble",
            'email' => "unpadpec@gmail.com",
            'id_kategori' => 4,
        ]);
    }
}
