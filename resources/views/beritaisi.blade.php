@extends ('app')

@section ('title','Berita Isi')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('images/ukm/ukm-cover.jpg')}});">
	<h2 class="tit7-ukm">
    BERITA
  </h2>
</section>


<div class="bread-crumb bo5-b p-t-17 p-b-17">
	<div class="container">
		<a href="/berita" class="txt27" style="text-decoration:none">
			Berita
		</a>

		<span class="txt29 m-l-10 m-r-10">/</span>

		<a class="txt29" style="text-decoration:none">
			Ngabuburit Bersama Unit Karate Unpad
		</a>
	</div>
</div>


<div class="container">
	<div class="row ">
		<div class="col-md-8 col-lg-9">
			<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
				<div class="blo4 p-b-63">
					<div class="text-blo4 p-t-33">
						<h4 class="p-b-16">
							<a href="/beritaisi" class="tit9" style="text-decoration:none"> Ngabuburit Bersama Unit Karate Unpad </a>
						</h4>

						<div class="txt32 flex-w p-b-24">
							<span>
								by Admin
								<span class="m-r-6 m-l-4">|</span>
							</span>

							<span>
								01 Mei, 2019
								<span class="m-r-6 m-l-4">|</span>
							</span>

							<span>
								Berita UKM
							</span>
						</div>
					</div>

					<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
						<a>
							<img src="{{ asset ('images/berita/beritaisi.png')}}" alt="IMG-BLOG">
						</a>
					</div>

					<p class="p-t-20">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum. Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex tempor, sit amet scelerisque eros rhoncus. Cras scelerisque auctor gravida. Nunc fermentum luctus rhoncus. Nulla vulputate fermentum convallis. In quis pellentesque tortor. Cras metus nibh, gravida vitae ante vel, finibus semper tellus. Nulla vel tincidunt magna. Morbi tempor velit lectus, eu commodo quam volutpat vitae.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection  
</html>