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
  <!-- @foreach($ukms as $ukm)
    <div class="col-md-3">
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
    @endforeach -->
    <div class="col-3">
        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-semua-list" data-toggle="list" href="#list-semua" role="tab" aria-controls="semua">Semua UKM</a>
          <a class="list-group-item list-group-item-action" id="list-olahraga-list" data-toggle="list" href="#list-olahraga" role="tab" aria-controls="olahraga">Olah Raga</a>
          <a class="list-group-item list-group-item-action" id="list-beladiri-list" data-toggle="list" href="#list-beladiri" role="tab" aria-controls="beladiri">Bela Diri</a>
          <a class="list-group-item list-group-item-action" id="list-sosial-list" data-toggle="list" href="#list-sosial" role="tab" aria-controls="sosial">Sosial</a>
          <a class="list-group-item list-group-item-action" id="list-senibahasa-list" data-toggle="list" href="#list-senibahasa" role="tab" aria-controls="senibahasa">Seni dan Bahasa</a>
        </div>
      </div>

      <div class="col-md-9">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-semua" role="tabpanel" aria-labelledby="list-semua-list">
            <div class="row">
            @foreach($ukms as $ukm)
              <div class="card mb-3 mr-3 ml-1 hoverboxukm" style="width:30%; height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
                <a href="/galeri/{{$ukm->id}}" style="text-decoration:none">
                  <div class="header p-t-30 p-r-10" style="text-align:center; color:black">
                    <b><h5> {{$ukm->namapendek}} </h5></b>
                  </div>
                  <div class="container" style="text-align:center">
                    <p>{{Str::limit($ukm->nama_ukm,35)}}</p>
                  </div>
                </a>
              </div>
              <br>
              @endforeach
            </div>
          </div>

          <div class="tab-pane fade" id="list-olahraga" role="tabpanel" aria-labelledby="list-olahraga-list">
            <div class="row">
              @foreach($ukms as $ukm)
              @if($ukm->id_kategori == 1)
              <div class="card mb-3 mr-3 ml-1 hoverboxukm" style="width:30%; height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
                <a href="/galeri/{{$ukm->id}}" style="text-decoration:none">
                  <div class="header p-t-30" style="text-align:center; color:black">
                    <b><h5> {{$ukm->namapendek}} </h5></b>
                  </div>
                  <div class="container" style="text-align:center">
                    <p>{{Str::limit($ukm->nama_ukm,35)}}</p>
                  </div>
                </a>
              </div>
              <br>
              @endif
              @endforeach
            </div>
          </div>
          
          <div class="tab-pane fade" id="list-beladiri" role="tabpanel" aria-labelledby="list-beladiri-list">
            <div class="row">
              @foreach($ukms as $ukm)
              @if($ukm->id_kategori == 2)
              <div class="card mb-3 mr-3 ml-1 hoverboxukm" style="width:30%; height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
                <a href="/galeri/{{$ukm->id}}" style="text-decoration:none">
                  <div class="header p-t-30" style="text-align:center; color:black">
                    <b><h5> {{$ukm->namapendek}} </h5></b>
                  </div>
                  <div class="container" style="text-align:center">
                    <p>{{Str::limit($ukm->nama_ukm,35)}}</p>
                  </div>
                </a>
              </div>
              <br>
              @endif
              @endforeach
            </div>
          </div>
          
          <div class="tab-pane fade" id="list-sosial" role="tabpanel" aria-labelledby="list-sosial-list">
            <div class="row">
              @foreach($ukms as $ukm)
              @if($ukm->id_kategori == 3)
              <div class="card mb-3 mr-3 ml-1 hoverboxukm" style="width:30%; height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
                <a href="/galeri/{{$ukm->id}}" style="text-decoration:none">
                  <div class="header p-t-30" style="text-align:center; color:black">
                    <b><h5> {{$ukm->namapendek}} </h5></b>
                  </div>
                  <div class="container" style="text-align:center">
                    <p>{{Str::limit($ukm->nama_ukm,35)}}</p>
                  </div>
                </a>
              </div>
            <br>
            @endif
            @endforeach
            </div>
          </div>

          <div class="tab-pane fade" id="list-senibahasa" role="tabpanel" aria-labelledby="list-senibahasa-list">
            <div class="row">
              @foreach($ukms as $ukm)
              @if($ukm->id_kategori == 4)
              <div class="card mb-3 mr-3 ml-1 hoverboxukm" style="width:30%; height:150px; box-shadow: 0px 12px 18px -6px rgba(0,0,0,0.1);">
                <a href="/galeri/{{$ukm->id}}" style="text-decoration:none">
                  <div class="header p-t-30" style="text-align:center; color:black">
                    <b><h5> {{$ukm->namapendek}} </h5></b>
                  </div>
                  <div class="container" style="text-align:center">
                    <p>{{Str::limit($ukm->nama_ukm,35)}}</p>
                  </div>
                </a>
              </div>
            <br>
            @endif
            @endforeach
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection  
</html>
