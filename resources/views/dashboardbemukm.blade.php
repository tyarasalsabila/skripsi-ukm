@extends ('adminbem')

@section ('title','BEM - UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">List UKM</h3>
							</div>
							<div class="panel-body table-responsive">
								<p class="demo-button">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add UKM</button>
								</p>

								<table id="datatable" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>UKM</th>
											<th>Nama Pendek</th>
											<th>Hari</th>
											<th>Jam</th>
											<th>Tempat</th>
											<th>Profil</th>
											<th>Ketua</th>
											<th>NPM</th>
											<th>Pembina</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@php ($x = 0)
									@foreach($ukms as $ukm)
									@php ($x = $x+1)
										<tr>
											<td>{{$x}}</td>
											<td>{{$ukm->nama_ukm}}</td>
											<td>{{$ukm->namapendek}}</td>
											<td>{{$ukm->hari}}</td>
											<td>{{$ukm->jam}}</td>
											<td>{{Str::limit($ukm->tempat,10)}}</td>
											<td>{{Str::limit($ukm->profil,10)}}</td>
											<td>{{Str::limit($ukm->ketua,10)}}</td>
											<td>{{$ukm->npm}}</td>
											<td>{{$ukm->pembina}}</td>
											<td>
												<a href="/detailukmbem/{{$ukm->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/editukm/{{$ukm->id}}" type="button" class="btn btn-warning edit">Edit</a>
												<a href="/deleteukm/{{$ukm->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus Data?')">Delete</a>
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

						<form action="{{route('dashbemukm')}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> UKM </label>
									<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama UKM">
								</div>

								<br>

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="namapendek" class="form-control" placeholder="Masukkan Nama Pendek UKM">
								</div>

								<br>

								<div class="form-group">
									<label> Hari </label>
									<input type="text" name="hari" class="form-control" placeholder="Masukkan Hari">
								</div>
		
								<br>

								<div class="form-group">
									<label> Jam </label>
									<input type="time" name="jam" class="form-control" placeholder="Masukkan Jam">
								</div>
		
								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat">
								</div>
		
								<br>

								<div class="form-group">
									<label> Profil </label>
									<input type="text" name="profil" class="form-control" placeholder="Masukkan Profil">
								</div>
		
								<br>


								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="ketua" class="form-control" placeholder="Masukkan Nama Ketua">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Masukkan NPM Ketua">
								</div>

								<div class="form-group">
									<label> Pembina </label>
									<input type="text" name="pembina" class="form-control" placeholder="Masukkan Pembina UKM">
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