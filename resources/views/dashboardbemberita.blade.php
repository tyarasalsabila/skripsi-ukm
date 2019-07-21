@extends ('adminbem')

@section ('title','BEM - Berita')

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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Berita</button>
							</p>
							<table class="table table-bordered table-hover" id="datatable">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Judul</th>
										{{-- <th>UKM</th> --}}
										<th>Foto</th>
										<th>Isi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach($berita as $brt)
            					@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$brt->created_at}}</td>
										<td>{{$brt->judul}}</td>
										{{-- <td>{{$brt->ukm->nama}}</td> --}}
										<td><img src="{{  url('').'/storage/'.$brt->foto }}" width="70px"; alt=""></td>
										<td>{{$brt->isi}}</td>
										<td>
											<a href="/editberita/{{$brt->id}}" type="button" class="btn btn-warning">Edit</a>
											{{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button> --}}
											<a href="/deleteberita/{{$brt->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus data?')">Delete</a>

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

						<form action="{{route('dashbemberita')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>


								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input">
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