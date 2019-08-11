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

								@if (session('status'))
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> {{ session('status') }}
									</div>
								@endif

								<table id="datatable" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Action</th>
											<th>UKM</th>
											<th>Kategori</th>
											<th>Nama Pendek</th>
											<th>Hari</th>
											<th>Jam</th>
											<th>Tempat</th>
											<th>Profil</th>
											<th>Ketua</th>
											<th>NPM</th>
											<th>Pembina</th>
											<th>Line</th>
											<th>Facebook</th>
											<th>Twitter</th>
											<th>Instagram</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
									<!-- @php ($x = 0) -->
									@foreach($ukms as $ukm)
									<!-- @php ($x = $x+1) -->
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>
												<a href="/detailukmbem/{{$ukm->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/editukm/{{$ukm->id}}" type="button" class="btn btn-warning edit">Edit</a>
												<a href="/deleteukm/{{$ukm->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus UKM?')">Delete</a>
											</td>
											<td>{{$ukm->nama_ukm}}</td>
											<td>{{$ukm->kategori->kategori}}</td>
											<td>{{$ukm->namapendek}}</td>
											<td>{{$ukm->hari}}</td>
											<td>{{$ukm->jam}}</td>
											<td>{{Str::limit($ukm->tempat,10)}}</td>
											<td>{{Str::limit($ukm->profil,10)}}</td>
											<td>{{Str::limit($ukm->ketua,10)}}</td>
											<td>{{$ukm->npm}}</td>
											<td>{{$ukm->pembina}}</td>
											<td>{{$ukm->line}}</td>
											<td>{{$ukm->facebook}}</td>
											<td>{{$ukm->twitter}}</td>
											<td>{{$ukm->instagram}}</td>
											<td>{{$ukm->email}}</td>
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
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbemukm')}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> UKM </label>
									<input type="text" name="nama_ukm" class="form-control" placeholder="Masukkan Nama UKM" required>
								</div>

								<br>

								<div class="form-group">
									<label> Kategori </label>
									<select class="form-control" id="kategori" name="kategori" required>
										<option value="" disabled="disabled" selected="selected" >Masukkan Kategori UKM</option>
										<option value="1" >Olah Raga</option>
										<option value="2" >Bela Diri</option>
										<option value="3" >Sosial</option>
										<option value="4" >Seni dan Budaya</option>
									</select>
								</div>

								<br>

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="namapendek" class="form-control" placeholder="Masukkan Nama Pendek UKM" required>
								</div>

								<br>

								<div class="form-group">
									<label> Hari </label>
									<input type="text" name="hari" class="form-control" placeholder="Masukkan Hari Kegiatan" required>
								</div>
		
								<br>

								<div class="form-group">
									<label> Jam </label>
									<input type="time" name="jam" class="form-control" placeholder="Masukkan Jam Kegiatan" required>
								</div>
		
								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat Kegiatan" required>
								</div>
		
								<br>

								<div class="form-group">
									<label> Profil </label>
									<textarea class="form-control" name="profil" id="profil" cols="110%" rows="10" placeholder="Masukkan Profil" required></textarea>
								</div>
		
								<br>


								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="ketua" class="form-control" placeholder="Masukkan Nama Ketua" required>
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Masukkan NPM Ketua" required>
								</div>
								
								<br>

								<div class="form-group">
									<label> Pembina </label>
									<input type="text" name="pembina" class="form-control" placeholder="Masukkan Pembina UKM" required>
								</div>

								<br>

								<div class="form-group">
									<label> Line </label>
									<input type="text" name="line" class="form-control" placeholder="Masukkan Kontak Line" required>
								</div>

								<br>

								<div class="form-group">
									<label> Facebook </label>
									<input type="text" name="facebook" class="form-control" placeholder="Masukkan Kontak Facebook" required>
								</div>

								<br>

								<div class="form-group">
									<label> Twitter </label>
									<input type="text" name="twitter" class="form-control" placeholder="Masukkan Kontak Twitter" required>
								</div>

								<br>

								<div class="form-group">
									<label> Instagram </label>
									<input type="text" name="instagram" class="form-control" placeholder="Masukkan Kontak Instagram" required>
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="email" name="email" class="form-control" placeholder="Masukkan Email UKM" required>
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