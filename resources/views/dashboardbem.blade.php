@extends ('adminbem')

@section ('title','Dashboard BEM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- BEM -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Dashboard</h3>
					<p class="panel-subtitle">Unit Kegiatan Mahasiswa UNPAD - BEM</p>
				</div>
				<div class="panel-body">
					<div class="row">
                        <div class="col-md-3">
							<div class="metric">
                                <p style="text-align:center">
								<span class="number">{{$count}}</span>
                                    <span class="title">Jumlah UKM</span>
                                </p>
							</div>
                        </div>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">Notifikasi Berita</h3>
							</div>

							<div class="panel-body">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>UKM</th>
											<th>Judul</th>
											<th>Foto</th>
											<th>Isi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<!-- @php ($x = 0) -->
									@foreach($berita as $brt)
									<!-- @php ($x = $x+1) -->
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$brt->created_at}}</td>
											<td>{{$brt->ukm->nama_ukm}}</td>
											<td>{{$brt->judul}}</td>
											<td class="fototable"><img src="{{  url('').'/storage/'.$brt->foto }}" alt=""></td>
											<td>{{Str::limit($brt->isi,10)}}</td>
											<td>
												<a href="/detailberitabem/{{$brt->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/acceptberita/{{$brt->id}}" type="button" class="btn btn-primary accept"  onclick="return confirm('Terima Berita?')">Accept</a>
												<a href="/rejectberita/{{$brt->id}}" type="button" class="btn btn-danger reject" onclick="return confirm('Tolak Berita?')">Reject</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">Notifikasi Agenda</h3>
							</div>
							<div class="panel-body">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>UKM</th>
											<th>Judul</th>
											<th>Foto</th>
											<th>Isi</th>
											<th>Link</th>
											<th>Jam</th>
											<th>Tanggal Acara</th>
											<th>Tempat</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<!-- @php ($x = 0) -->
									@foreach($agenda as $agd)
									<!-- @php ($x = $x+1) -->
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$agd->created_at}}</td>
											<td>{{$agd->ukm->nama_ukm}}</td>
											<td>{{$agd->judul}}</td>
											<td class="fototable"><img src="{{ url('').'/storage/'.$agd->foto}}" alt=""></td>
											<td>{{Str::limit($agd->isi,10)}}</td>
											<td>{{$agd->link}}</td>
											<td>{{$agd->waktu}}</td>
											<td>{{$agd->tanggal}}</td>
											<td>{{$agd->tempat}}</td>
											<td>
												<a href="/detailagendabem/{{$agd->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/acceptagenda/{{$agd->id}}" type="button" class="btn btn-primary accept"  onclick="return confirm('Terima Agenda?')">Accept</a>
												<a href="/rejectagenda/{{$agd->id}}" type="button" class="btn btn-danger reject" onclick="return confirm('Tolak Agenda?')">Reject</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection  
</html>