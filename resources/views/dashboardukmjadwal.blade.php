@extends ('admin')

@section ('title','Dashboard Pendaftaran UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Jadwal UKM</h3>
						</div>
						<div class="panel-body">
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
										<td>{{$ukm->hari}}</td>
										<td>{{$ukm->jam}}</td>
										<td>{{$ukm->tempat}}</td>
										<td>
											<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>						
				</div>
			</div>


			<!-- Edit -->
			<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<!-- <h5 class="modal-title" id="addModalLabel"></h5> -->
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbem')}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Hari </label>
									<input type="text" name="hari" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Jam </label>
									<input type="text" name="jam" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Edit -->
		</div>
	</div>
</div>
@endsection  
</html>