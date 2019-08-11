@extends ('adminbem')

@section ('title','BEM - Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">List Berita</h3>
							</div>
							<div class="panel-body">
								<p class="demo-button">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Berita</button>
								</p>

								@if (session('status'))
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> {{ session('status') }}
									</div>
								@endif
								
								<table class="table table-bordered table-hover" id="datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
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
											<td>{{$brt->judul}}</td>
											<td class="fototable"><img class="fotodetail" src="{{  url('').'/storage/'.$brt->foto }}" alt=""></td>
											<td>{{Str::limit($brt->isi,10)}}</td>
											<td>
												<a href="/detailberitabem1/{{$brt->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/editberita/{{$brt->id}}" type="button" class="btn btn-warning">Edit</a>
												<a href="/deleteberita/{{$brt->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus Berita?')">Delete</a>
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

						<form action="{{route('dashbemberita')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Berita" required>
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<textarea class="form-control" name="isi" id="isi" cols="110%" rows="10" placeholder="Masukkan Isi Berita" required></textarea>
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
			</div>
		</div>
	</div>
</div>
@endsection  
</html>