@extends ('app')

@section ('title','UKM')

@section ('content')


<!-- UKM -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/ukm/ukm-cover.jpg);">
	<h2 class="tit7-ukm">
    UNIT KEGIATAN MAHASISWA <br>
    UNIVERSITAS PADJADJARAN
  </h2>
</section>

<!-- UKM -->
<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				Semua UKM
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".olahraga">
				Olah Raga
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".beladiri">
				Bela Diri
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".sosial">
				Sosial
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".senibahasa">
				Seni & Bahasa
			</button>
    </div>
    

		<div class="wrap-gallery isotope-grid flex-w p-l-30">
      @foreach ($ukms as $ukm)
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom beladiri">
        <img src="images/ukm/ukm-gallery.png" alt="PD">
        <div class="judul-ukm">
          {{$ukm->nama}}
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="/ukm/{{$ukm->id}}"></a>
				</div>
      </div>
      @endforeach

      
      <!-- <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom beladiri">
        <img src="images/ukm/ukm-gallery1.png" alt="Unit-Merpati-Putih-Unpad-(MP)">
        <div class="judul-ukm">
          Unit Merpati Putih Unpad (MP)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery1.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom beladiri">
        <img src="images/ukm/ukm-gallery2.png" alt="Unit-Kempo-Unpad">
        <div class="judul-ukm">
          Unit Kempo Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery2.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom beladiri">
        <img src="images/ukm/ukm-gallery3.png" alt="Unit-Judo-Unpad-(UJU)">
        <div class="judul-ukm">
          Unit Judo Unpad (UJU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery3.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom beladiri">
        <img src="images/ukm/ukm-gallery4.png" alt="Unit-Karate-Unpad-(UKU)">
        <div class="judul-ukm">
          Unit Karate Unpad (UKU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery4.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom beladiri">
        <img src="images/ukm/ukm-gallery5.png" alt="Unit-Taekwondo-Unpad-(UTKD)">
        <div class="judul-ukm">
          Unit Taekwondo Unpad (UTKD)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery5.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery.png" alt="Unit-Catur-Mahasiswa-Unpad-(UCMU)">
        <div class="judul-ukm">
          Unit Catur Mahasiswa Unpad (UCMU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery.png" data-lightbox="gallery"></a>
				</div>
      </div>

    
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery1.png" alt="Unit-Bridge-Unpad">
        <div class="judul-ukm">
          Unit Bridge Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery1.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery2.png" alt="Unit-Tenis-Lapang-Unpad-(UTU)">
        <div class="judul-ukm">
          Unit Tenis Lapang Unpad (UTU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery2.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery3.png" alt="Unit-Tenis-Meja-Unpad-(UTMU)">
        <div class="judul-ukm">
          Unit Tenis Meja Unpad (UTMU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery3.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery4.png" alt="Unit-Renang-Unpad-(URU)">
        <div class="judul-ukm">
          Unit Renang Unpad (URU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery4.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery5.png" alt="Unit-Hockey-Unpad-(UHU)">
        <div class="judul-ukm">
          Unit Hockey Unpad (UHU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery5.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery.png" alt="Unit-Soft-Ball-&-Base-Ball-Unpad">
        <div class="judul-ukm">
          Unit Soft Ball & Base Ball Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery.png" data-lightbox="gallery"></a>
        </div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery1.png" alt="Unit-Sepak-Bola-Unpad-(USBU)">
        <div class="judul-ukm">
          Unit Sepak Bola Unpad (USBU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery1.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery2.png" alt="Unit-Bola-Basket-Unpad-(UBBU)">
        <div class="judul-ukm">
          Unit Bola Basket Unpad (UBBU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery2.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery3.png" alt="Unit-Bola-Volley-Unpad-(UBVU)">
        <div class="judul-ukm">
          Unit Bola Volley Unpad (UBVU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery3.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery4.png" alt="Unit-Bulutangkis-Unpad-(UBTU)">
        <div class="judul-ukm">
          Unit Bulutangkis Unpad (UBTU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery4.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sosial">
        <img src="images/ukm/ukm-gallery5.png" alt="Unit-Palawa-Unpad">
        <div class="judul-ukm">
          Unit Palawa Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery5.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sosial">
        <img src="images/ukm/ukm-gallery.png" alt="Search-and-Rescue-(SAR)-Unpad">
        <div class="judul-ukm">
          Search and Rescue (SAR) Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sosial">
        <img src="images/ukm/ukm-gallery1.png" alt="Korps-Sukarela-Palang-Merah-Indonesia-(KSR-PMI)">
        <div class="judul-ukm">
          Korps Sukarela Palang Merah <br>Indonesia (KSR PMI)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery1.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sosial">
        <img src="images/ukm/ukm-gallery2.png" alt="Unit-Menwa-Yon-II-Unpad">
        <div class="judul-ukm">
          Unit Menwa Yon II Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery2.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sosial">
        <img src="images/ukm/ukm-gallery3.png" alt="Unit-Pramuka-Unpad">
        <div class="judul-ukm">
          Unit Pramuka Unpad
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery3.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery4.png" alt="Sadaluhung-Padjadjaran-Drum-Corps-(SPdC)">
        <div class="judul-ukm">
          Sadaluhung Padjadjaran <br> Drum Corps (SPdC)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery4.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery5.png" alt="Paduan-Suara-Mahasiswa-(PSM)">
        <div class="judul-ukm">
          Paduan Suara Mahasiswa (PSM)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery5.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom sosial">
        <img src="images/ukm/ukm-gallery.png" alt="Korps-Protokoler-Mahasiswa-(KPM)">
        <div class="judul-ukm">
          Korps Protokoler Mahasiswa (KPM)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery1.png" alt="Lingkung-Seni-Sunda-(Lises)">
        <div class="judul-ukm">
          Lingkung Seni Sunda (Lises)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery1.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery2.png" alt="Unit-Fotografi-(Spektrum)">
        <div class="judul-ukm">
          Unit Fotografi (Spektrum)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery2.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery3.png" alt="Gelanggang-Seni-Sastra,-Teater-dan-Film-(GSSTF)">
        <div class="judul-ukm">
          Gelanggang Seni  Sastra, Teater <br> dan Film (GSSTF)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery3.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery4.png" alt="Unit-Pecinta-Budaya-Minangkabau-(UPBM)">
        <div class="judul-ukm">
          Unit Pecinta Budaya <br> Minangkabau (UPBM)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery4.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery5.png" alt="AIESEC">
        <div class="judul-ukm">
          Association Internationale des <br> Etudiants en Sciences Economiques <br> et Commerciales (AIESEC)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery5.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery.png" alt="ESU">
        <div class="judul-ukm">
          English Speaking Union (ESU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery1.png" alt="LPPMD">
        <div class="judul-ukm">
          Lembaga Pengkajian dan Pengabdian <br> Masyarakat Demokratis (LPPMD)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery1.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery2.png" alt="PEC">
        <div class="judul-ukm">
          Padjadjaran Ensemble Club (PEC)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery2.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom olahraga">
        <img src="images/ukm/ukm-gallery3.png" alt="UFFU">
        <div class="judul-ukm">
          Unit Flag Footbal UNPAD (UFFU)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
          <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery3.png" data-lightbox="gallery"></a>
				</div>
      </div>

      
      <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom senibahasa">
        <img src="images/ukm/ukm-gallery4.png" alt="IAAS">
        <div class="judul-ukm">
          International Association of Students in <br> Agricultural and Related Sciences (IAAS)
        </div>
				<div class="overlay-item-gallery trans-0-4 flex-c-m">
           <a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="images/ukm/ukm-gallery4.png" data-lightbox="gallery"></a>
				</div>
      </div>       -->
    </div>
</div>

@endsection  
</html>