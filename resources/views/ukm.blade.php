@extends ('app')

@section ('title','UKM')

@section ('content')


<!-- Jumbotron -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
	<h2 class="tit7-ukm">
    UNIT KEGIATAN MAHASISWA
  </h2>
</section>

<!-- UKM -->
<div class="container" style="padding-top: 60px; padding-bottom: 50px">
  <div class="row">
    @foreach($ukms as $ukm)
    <div class="col-md-3">
      <div class="card mb-3 hoverboxukm" style="height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
        <a href="/ukm/{{$ukm->id}}" style="text-decoration:none">
          <div class="header p-t-30" style="text-align:center; color:black">
            <b><h5> {{$ukm->namapendek}} </h5></b>
          </div>
          <div class="container" style="text-align:center">
            <p>{{Str::limit($ukm->nama_ukm,35)}}</p>
          </div>
        </a>
      </div>
    </div>
    <br>
    @endforeach
  </div>
</div>

@endsection  
</html>