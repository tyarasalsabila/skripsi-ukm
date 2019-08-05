@extends ('adminukm')

@section ('title','UKM - Galeri')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">Galeri UKM</h3>
							</div>
							<div class="panel-body">
								<p class="demo-button">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Photo</button>
								</p>
								<table class="table table-bordered table-hover" id="datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Judul</th>
											<th>Foto</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@php ($x = 0)
										@foreach ($galeri as $glr)
										@php ($x = $x+1)
										<tr>
											<td>{{$x}}</td>
											<td>{{$glr->created_at}}</td>
											<td>{{$glr->judul}}</td>
											<td class="fototable"><img src="{{ url('').'/storage/'.$glr->link_foto }}" alt=""></td>
											<td>
											<a href="/editgaleriukm/{{$glr->id}}" type="button" class="btn btn-warning">Edit</a>
											<a href="/dashukmgaleridel/{{$glr->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus Foto?')">Delete</a>

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

						<form action="{{route('dashukmgalerii')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Foto" required>
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
								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input">
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