@extends ('app')

@section ('title','Beranda')

@section ('content')


<!-- Carousel -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/unpad/carousel.png);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<h2 class="caption2-slide1 tit12  visible-false m-b-15">
						UNIT KEGIATAN MAHASISWA
    		        </h2>
            		<h2 class="caption2-slide1 tit13  visible-false m-b-15">
						Universitas Padjadjaran
					</h2>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- About UKM UNPAD -->
<section class="section-welcome bg1-pattern p-t-70 p-b-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-t-30 p-b-30">
				<div class="wrap-text-welcome t-center">
					<h3 class="tit3-tentang t-center m-b-35 m-t-5">
						UKM UNPAD
					</h3>

					<p class="t-center m-b-22 size3 m-l-r-auto">
						Unit Kegiatan Mahasiswa (UKM) UNPAD merupakan organisasi kemahasiswaan
        			    di tingkat Universitas yang berfungsi menampung berbagai minat
            			dan bakat dari para mahasiswa Universitas Padjadjaran. 
					</p>

					<a href="/tentang" class="txt4" style="text-decoration:none">
						Selengkapnya
						<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
					</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
					<img src="images/unpad/tentangunpad.jpg" alt="IMG-OUR">
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Berita dan Agenda Terbaru -->
<section>
	<div class="container">
		<div class="row">
			<!-- Berita Terbaru -->
			<div class="col-md-9 col-lg-9 p-b-80">
				<h2 class="txttitleagenda p-b-35 p-t-80">
					Berita Terbaru
				</h2>
				<div class="row">
					@foreach ($berita as $brt)
					<div class="col-md-4 p-t-30">             
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-4 hov-img-zoom pos-relative">
								<a href="/berita/{{$brt->id}}">
									<img src="{{url('').'/storage/'.$brt->foto}}" alt="IMG-INTRO">
								</a>
								<div class="time-blog">
									<!-- carbon adalah library tanggal laravel/php lupa aku jg  -->
									{{ \Carbon\Carbon::parse($brt->created_at)->format('d M Y')}}
								</div>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="/berita/{{$brt->id}}" style="text-decoration:none">
									<h4 class="txt5 color0-hov m-b-13">
										{{Str::limit($brt->judul,35)}}
									</h4>
								</a>

								<p class="m-b-20">
									{{Str::limit($brt->isi,50)}}
								</p>

								<a href="/berita/{{$brt->id}}" class="txt4" style="text-decoration:none">
									Selengkapnya
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<div class="flex-c-m m-t-6 p-t-60">
					<a href="/berita" class="btn3 flex-c-m size13 txt11" style="text-decoration:none">
						BERITA LAINNYA
					</a>
				</div>
			</div>
			
			
			<!-- Agenda Terbaru -->
			<div class="col-md-3 col-lg-3">
          		<h2 class="txtsidebar p-t-30 p-b-27 p-t-80">
            		Agenda Terbaru
				</h2>
					
				<div class="sidebar2 p-b-80 p-l-0-md p-t-0-md">
					<div class="popular">
						<ul>
							@foreach ($agenda as $agd)								
							<li class="flex-w m-b-25">
								<div class="size16 bo-rad-4 wrap-pic-w of-hidden m-r-18">
									<a href="{{url('').'/storage/'.$agd->foto}}" data-lightbox="gallery-footer">
										<img src="{{url('').'/storage/'.$agd->foto}}" alt="IMG-BLOG">
									</a>
								</div>

								<div class="size28">
									<a href="/agenda/{{$agd->id}}" class="dis-block txt28 m-b-8" style="text-decoration:none">
										{{Str::limit($agd->judul,30)}}
									</a>

									<span class="txt14">
										{{ \Carbon\Carbon::parse($agd->tanggal)->format('d M Y')}}
									</span>
								</div>
							</li>
							@endforeach

							<a href="/agenda" class="txt4" style="text-decoration:none">
								Agenda Lainnya
                    			<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                  			</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 


<!-- Daftar UKM -->
<section class="bg1-pattern p-t-100 t-center p-l-15 p-r-15">
	<h3 class="txt5-daftar-ukm t-center m-b-35 m-t-5">
		GABUNG UKM UNPAD DISINI
	</h3>

	<div class="flex-c-m m-t-6  p-b-100">
		<a href="/registrasi" class="btn3 flex-c-m size13 txt11" style="text-decoration:none">
			DAFTAR UKM
		</a>
	</div>
</section>

@endsection  
</html>