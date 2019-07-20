@extends ('app')

@section ('title','Tentang Kami')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
	<h2 class="tit7-ukm">
    TENTANG KAMI
  </h2>
</section>

<section class="bg2-pattern p-t-80 p-b-100 t-center p-l-15 p-r-15">
	<h3 class="tit3-tentang t-center m-b-35 m-t-5">
		Tentang UKM UNPAD
	</h3>

	<p class="t-center size32 m-l-r-auto">
    Unit Kegiatan Mahasiswa (UKM) UNPAD merupakan organisasi kemahasiswaan 
    di tingkat Universitas yang berfungsi menampung berbagai minat 
    dan bakat dari para mahasiswa Universitas Padjadjaran.
    Saat ini Universitas Padjadjaran memiliki 34 UKM Aktif.
  </p>
  
  <div class="flex-c-m m-t-6 p-t-40">
		<a href="/ukm" class="btn3 flex-c-m size13-daftar-ukm txt11" style="text-decoration:none">
			LIHAT DAFTAR UKM
		</a>
	</div>
</section>

@endsection  
</html>