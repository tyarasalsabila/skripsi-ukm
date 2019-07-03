@extends ('admin')

@section ('title','Dashboard Pendaftaran UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Prestasi UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Prestasi</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary">Add Prestasi</button>
								<button type="button" class="btn btn-warning">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Prestasi</th>
										<th>Anggota</th>
										<th>Tahun</th>
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
										<td>{{$prest->nama}}</td>
										<td>{{$member->nama}}</td>
										<td>{{$prest->tahun}}</td>
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
@endsection  
</html>