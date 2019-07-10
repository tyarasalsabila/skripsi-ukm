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
			{{$berita->judul}}
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
							<a href="/beritaisi" class="tit9" style="text-decoration:none"> {{$berita->judul}} </a>
						</h4>

						<div class="txt32 flex-w p-b-24">
							<span>
								by {{$berita->user->nama}}
								<span class="m-r-6 m-l-4">|</span>
							</span>

							<span>
								{{$berita->created_at}}
								<span class="m-r-6 m-l-4">|</span>
							</span>

							<span>
								Berita UKM
							</span>
						</div>
					</div>

					<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
						<a>
							<img src="{{  url('').'/storage/'.$berita->foto }} ">
						</a>
					</div>

					<p class="p-t-20">
						{{$berita->isi}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection  
</html>