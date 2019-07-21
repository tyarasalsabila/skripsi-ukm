@extends ('adminukm')

@section ('title','UKM - Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Berita</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Berita</button>
							</p>
							<table class="table table-bordered table-hover" id="datatable">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Judul</th>
										<th>Foto</th>
										<th>Isi</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach ($berita as $brt)
								@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$brt->created_at}}</td>
										<td>{{$brt->judul}}</td>
										<td><img src="{{  url('').'/storage/'.$brt->foto }}" width="70px" alt=""></td>
										<td>{{Str::limit($brt->isi,10)}}</td>
										@if($brt->confirmed == 1)
											<td>Diterima</td>
										@elseif($brt->confirmed === 0)
											<td>Ditolak</td>
										@else
											<td>Belum ada kabar</td>
										@endif
										<td>
											<a href="/detailberitaukm/{{$brt->id}}" type="button" class="btn btn-primary">Detail</a>
											<a href="/editberitaukm/{{$brt->id}}" type="button" class="btn btn-warning">Edit</a>
											<a href="/dashukmberitadel/{{$brt->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus data?')">Delete</a>
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

						<form action="{{route('dashukmberita')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Berita" required>
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita" required>
								</div>

								<br>

								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" required>
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
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Berita" required>
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita" required>
								</div>

								<br>

								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" required>
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