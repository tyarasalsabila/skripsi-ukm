@extends ('app')

@section ('title','Galeri')

@section ('content')

<!-- Galeri -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
    <h2 class="tit7-ukm">
        Unit Perisai Diri Unpad (PD)
    </h2>
</section>


<div class="bread-crumb bo5-b p-t-17 p-b-17">
	<div class="container">
		<a href="/galeri" class="txt27" style="text-decoration:none">
			Galeri
		</a>

		<span class="txt29 m-l-10 m-r-10">/</span>

		<a class="txt29" style="text-decoration:none">
			{{$ukm->nama}}
		</a>
	</div>
</div>


<div class="wrap-gallery isotope-grid flex-w p-l-30">
	@foreach($galeris as $galeri)
	<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom">
		<img src="{{url('').'/storage/'.$galeri->link_foto }}"  data-lightbox="gallery" alt="IAAS">
		<div class="overlay-item-gallery trans-0-4 flex-c-m">
			<a class="btn-show-gallery flex-c-m fa fa-search" style="text-decoration: none" href="{{url('').'/storage/'.$galeri->link_foto }}" data-lightbox="gallery"></a>
		</div>
	</div>
	@endforeach
</div>




@endsection  
</html>
