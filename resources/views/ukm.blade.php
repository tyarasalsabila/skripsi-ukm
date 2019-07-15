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
<div class="container" style="padding-top: 50px;">
  <div class="row">
  @foreach($ukms as $ukm)
    <div class="col-md-3">
      <div class="card border-secondary mb-3" style="height:150px;">
          <div class="card-body text-secondary">
            <a href="/ukm/{{$ukm->id}}" style="text-decoration:none; color: #000"><p class="card-title">{{$ukm->nama}}</p></a>
          </div>
      </div>    
    </div>
  @endforeach
  </div>
</div>

@endsection  
</html>