@extends ('adminukm')

@section ('title','UKM - Prestasi')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">List Prestasi</h3>
							</div>
							<div class="panel-body">
								<p class="demo-button">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Prestasi</button>
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
											<th>Prestasi</th>
											<th>Anggota</th>
											<th>Tahun</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<!-- @php ($x = 0) -->
									@foreach ($prestasi as $prest)
									{{-- @php ($member = App\Anggota::where('id',$prest->id_anggota)->first()) --}}
									<!-- @php ($x = $x+1) -->
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{Str::limit($prest->nama,10)}}</td>
											<td>{{$prest->anggota}}</td>
											<td>{{$prest->tahun}}</td>
											<td>
												<a href="/detailprestasiukm/{{$prest->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/editprestasiukm/{{$prest->id}}" type="button" class="btn btn-warning">Edit</a>
												<a href="/dashukmprestasidel/{{$prest->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus Prestasi?')">Delete</a>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
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
									<input type="text" name="prestasi" class="form-control" placeholder="Masukkan Prestasi" required>
								</div>

								<br>

								<div class="form-group">
									<label> Anggota </label>
									<input type="text" name="anggota" class="form-control" placeholder="Masukkan Nama Peraih Prestasi" required>
								</div>

								<br>

								<div class="form-group">
									<label> Tahun </label>
									<input type="number" name="tahun" class="form-control" placeholder="Masukkan Tahun Prestasi" required>
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
@endsection  
</html>