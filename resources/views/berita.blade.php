@extends ('app')

@section ('title','Berita')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
	<h2 class="tit7-ukm">
    BERITA
  </h2>
</section>

<section>
	<div class="container p-b-80 p-t-80">
      <div class="row">
        @foreach ($beritas as $berita)
        <div class="col-md-4 p-t-30">             
          <div class="blo1">
            <div class="wrap-pic-blo1 bo-rad-4 hov-img-zoom pos-relative">
            <a href="/berita/{{$berita->id}}"><img src="{{url('').'/storage/'.$berita->foto}}" alt="IMG-INTRO"></a>
              <div class="time-blog">
              {{ \Carbon\Carbon::parse($berita->created_at)->format('d M Y')}}
              </div>
            </div>

            <div class="wrap-text-blo1 p-t-35">
              <a href="/berita/{{$berita->id}}" style="text-decoration:none">
                <h4 class="txt5 color0-hov m-b-13">
                  {{$berita->judul}}
                </h4>
              </a>

              <p class="m-b-20">
                {{Str::limit($berita->isi,10)}}
              </p>

              <a href="/berita/{{$berita->id}}" class="txt4" style="text-decoration:none">
                Selengkapnya
	              <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
</section>

@endsection  
</html>