@extends ('app')

@section ('title','UKM UNPAD')

@section ('content')


<!-- UKM -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
	<h2 class="tit7-ukm" style="text-align:center">
    {{$ukm->nama_ukm}}
  </h2>
</section>


<div class="bread-crumb bo5-b p-t-17 p-b-17">
	<div class="container">
		<a href="/ukm" class="txt27" style="text-decoration:none">
			UKM
		</a>

		<span class="txt29 m-l-10 m-r-10">/</span>

		<a  class="txt29" style="text-decoration:none">
      {{$ukm->nama_ukm}}
		</a>
	</div>
</div>


<div class="container p-t-50 p-b-50">
<div class="row">
  <div class="col-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-profil-list" data-toggle="list" href="#list-profil" role="tab" aria-controls="profil">Profil</a>
      <a class="list-group-item list-group-item-action" id="list-jadwal-list" data-toggle="list" href="#list-jadwal" role="tab" aria-controls="jadwal">Jadwal</a>
      <a class="list-group-item list-group-item-action" id="list-prestasi-list" data-toggle="list" href="#list-prestasi" role="tab" aria-controls="prestasi">Prestasi</a>
      <a class="list-group-item list-group-item-action" id="list-anggota-list" data-toggle="list" href="#list-anggota" role="tab" aria-controls="anggota">Anggota</a>
      <a class="list-group-item list-group-item-action" id="list-kontak-list" data-toggle="list" href="#list-kontak" role="tab" aria-controls="kontak">Kontak</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-profil" role="tabpanel" aria-labelledby="list-profil-list">
        <p> {{$ukm->profil}} </p>
      </div>

      <div class="tab-pane fade" id="list-jadwal" role="tabpanel" aria-labelledby="list-jadwal-list">
        <h6> Hari </h6>
        <p> {{$ukm->hari}} </p>

        <hr>

        <h6> Jam </h6>
        <p> {{$ukm->jam}} - selesai </p>

        <hr>

        <h6> Tempat </h6>
        <p> {{$ukm->tempat}} </p>
      </div>
      
      <div class="tab-pane fade" id="list-prestasi" role="tabpanel" aria-labelledby="list-prestasi-list">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Prestasi</th>
              <th scope="col">Anggota</th>
              <th scope="col">Tahun</th>
            </tr>
          </thead>
          <tbody>
            @php ($x = 0)
            @php ($member = (object)[])
            @foreach ($ukm->prestasi as $prest)
            @php ($x = $x+1)
            <tr>
              <th scope="row">{{$x}}</th>
              <td>{{$prest->nama}}</td>
              <td>{{$prest->anggota}}</td>
              <td>{{$prest->tahun}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade" id="list-anggota" role="tabpanel" aria-labelledby="list-anggota-list">
      <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Fakultas</th>
              <th scope="col">Angkatan</th>
            </tr>
          </thead>
          <tbody>
            @php ($x = 0)
            @foreach ($ukm->anggota as $angg)
            @php ($x = $x+1)
            <tr>
              <th scope="row">{{$x}}</th>
              <td>{{$angg->nama}}</td>
              <td>{{$angg->jurusan}}</td>
              <td>{{$angg->fakultas}}</td>
              <td>{{$angg->angkatan}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade" id="list-kontak" role="tabpanel" aria-labelledby="list-kontak-list">
        <h6> Line </h6>
        <p> {{$ukm->line}} </p>

        <hr>

        <h6> Facebook </h6>
        <p> {{$ukm->facebook}} </p>
        
        <hr>

        <h6> Twitter </h6>
        <p> {{$ukm->twitter}} </p>

        <hr>

        <h6> Instagram </h6>
        <p> {{$ukm->instagram}} </p>

        <hr>
        
        <h6> Email </h6>
        <p> {{$ukm->email}} </p>
      </div>
    </div>
  </div>
</div>
</div>

@endsection  
</html>