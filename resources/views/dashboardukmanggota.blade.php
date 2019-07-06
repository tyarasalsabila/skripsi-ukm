@extends ('adminukm')

@section ('title','Dashboard UKM - Anggota')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Anggota UKM</h3>
						</div>
					<div class="panel-body">
						<p class="demo-button">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Anggota</button>
						</p>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>NPM</th>
									<th>Email</th>
									<th>No. HP</th>
									<th>Fakultas</th>
									<th>Jurusan</th>
									<th>Angkatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@php ($x = 0)
							@foreach ($anggota as $ang)
							@php ($x = $x+1)
								<tr>
									<td>{{$x}}</td>
									<td>{{$ang->nama}}</td>
									<td>{{$ang->npm}}</td>
									<td>{{$ang->email}}</td>
									<td>{{$ang->nohp}}</td>
									<td>{{$ang->fakutlas}}</td>
									<td>{{$ang->jurusan}}</td>
									<td>{{$ang->angkatan}}</td>
									<td>
										<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addModal">Delete</button>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
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

						<form action="{{route('dashukmanggota')}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Nama </label>
									<input type="text" name="nama" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="text" name="email" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> No. HP </label>
									<input type="text" name="nohp" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Fakultas </label>
									<input type="text" name="fakultas" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Jurusan </label>
									<input type="text" name="jurusan" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Angkatan </label>
									<input type="text" name="angkatan" class="form-control" placeholder="Masukkan Isi Berita">
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
									<label> Nama </label>
									<input type="text" name="nama" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="text" name="email" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> No. HP </label>
									<input type="text" name="nohp" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Fakultas </label>
									<input type="text" name="fakultas" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Jurusan </label>
									<input type="text" name="jurusan" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Angkatan </label>
									<input type="text" name="angkatan" class="form-control" placeholder="Masukkan Isi Berita">
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

						<form action="{{route('dashukm')}}" method="POST">
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