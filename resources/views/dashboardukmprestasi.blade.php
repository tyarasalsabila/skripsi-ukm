@extends ('adminukm')

@section ('title','Dashboard Pendaftaran UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Prestasi</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Prestasi</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Prestasi</th>
										<th>Anggota</th>
										<th>Tahun</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach ($prestasi as $prest)
								{{-- @php ($member = App\Anggota::where('id',$prest->id_anggota)->first()) --}}
								@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$prest->nama}}</td>
										<td>{{$prest->anggota}}</td>
										<td>{{$prest->tahun}}</td>
										<td>
											<a href="/formukmprestasi" type="button" class="btn btn-warning">Edit</a>
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>						
				</div>
			</div>


			<!-- Add -->
			<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<!-- <h5 class="modal-title" id="addModalLabel"></h5> -->
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashukmprestasi')}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Prestasi </label>
									<input type="text" name="prestasi" class="form-control" placeholder="Masukkan Prestasi">
								</div>

								<br>

								<div class="form-group">
									<label> Anggota </label>
									<input type="text" name="anggota" class="form-control" placeholder="Masukkan Nama Peraih Prestasi">
								</div>

								<br>

								<div class="form-group">
									<label> Tahun </label>
									<input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun Prestasi">
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
			<!-- Add -->


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
									<label> Prestasi </label>
									<input type="text" name="prestasi" class="form-control" placeholder="Masukkan Prestasi">
								</div>

								<br>

								<div class="form-group">
									<label> Anggota </label>
									<input type="text" name="anggota" class="form-control" placeholder="Masukkan Nama Peraih Prestasi">
								</div>

								<br>

								<div class="form-group">
									<label> Tahun </label>
									<input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun Prestasi">
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Update Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Edit -->


			<!-- Delete -->
			<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbem')}}" method="POST">
							@csrf
							<div class="modal-body">
								<input type="hidden" name="judul">
								<p> Hapus Data? </p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
								<button type="submit" class="btn btn-primary">Ya</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Delete -->
		</div>
	</div>
</div>
@endsection  
</html>