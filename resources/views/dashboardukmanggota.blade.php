@extends ('adminukm')

@section ('title','Dashboard UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Dashboard UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Anggota UKM</h3>
						</div>
					<div class="panel-body">
						<p class="demo-button">
							<button type="button" class="btn btn-primary">Add Anggota</button>
							<button type="button" class="btn btn-warning">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</p>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Fakultas</th>
									<th>Jurusan</th>
									<th>Angkatan</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							@php ($x = 0)
							@php ($member = (object)[])
							@foreach ($ukm->prestasi as $prest)
							@php ($member = App\Anggota::where('id',$prest->id_anggota)->first())
							@php ($x = $x+1)
								<tr>
									<td>{{$x}}</td>
									<td>{{}}</td>
									<td>MIPA</td>
									<td>Teknik Informatika</td>
									<td>2019</td>
									<td>Aktif</td>
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
@endsection  
</html>