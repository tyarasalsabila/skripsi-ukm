@extends ('adminukm')

@section ('title','Dashboard Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Berita</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Berita</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Anggota</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Judul</th>
										<th>UKM</th>
										<th>Foto</th>
										<th>Isi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach ($berita as $brt)
								@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$brt->create_at}}</td>
										<td>{{$brt->judul}}</td>
										<td>{{$brt->ukm->nama}}</td>
										<td>{{$brt->foto}}</td>
										<td>{{$brt->isi}}</td>
										<td>
											<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
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

						<form action="{{route('dashbem')}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> UKM </label>
									<input type="text" name="ukm" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="namapendek" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="ketua" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Masukkan Isi Berita">
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
									<label> UKM </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
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
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
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