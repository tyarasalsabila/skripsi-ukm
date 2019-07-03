@extends ('admin')

@section ('title','Dashboard Pendaftaran UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Jadwal UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Prestasi</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-warning">Edit</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Hari</th>
										<th>Jam</th>
										<th>Tempat</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($ukms as $ukm)
									<tr>
										<td>{{ukm->hari}}</td>
										<td>{{$ukm->jam}}</td>
										<td>{{$ukm->tempat}}</td>
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