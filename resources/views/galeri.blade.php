@extends ('app')

@section ('title','Galeri')

@section ('content')

<!-- Galeri -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
    <h2 class="tit7-ukm">
        GALERI
    </h2>
</section>

        
<div class="container" style="padding-top: 60px; padding-bottom: 50px">
  <div class="row">
  @foreach($ukms as $ukm)
    <div class="col-md-3">
      <!-- <div class="card border-secondary mb-3" style="height:150px;">
          <div class="card-body text-secondary">
            <a href="/galeri/{{$ukm->id}}" style="text-decoration:none; color: #000"><p class="card-title">{{$ukm->nama}}</p></a>
          </div>
      </div>     -->
      <div class="card mb-3 hoverboxukm" style="height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
        <a href="/galeri/{{$ukm->id}}" style="text-decoration:none">
          <div class="header p-t-30" style="text-align:center; color:black">
            <h5> {{$ukm->namapendek}} </h5>
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
