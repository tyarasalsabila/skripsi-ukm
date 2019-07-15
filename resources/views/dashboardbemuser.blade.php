@extends ('adminbem')

@section ('title','Dashboard BEM - UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Dashboard UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
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
									<th>User</th>
								</tr>
							</thead>
							<tbody>
						 	@php ($x = 0)
							@foreach($accs as $acc)
            				@php ($x = $x+1)
								<tr>
									<td>{{$x}}</td>
									<td>{{$acc->ukm->nama}}</td>
									<td>{{$acc->name}}</td>
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

						<form action="{{route('dashbemuser')}}" method="POST">
							@csrf
							<div class="modal-body">
							<span class="txt9">
								Pilih UKM
							</span>
							<div class="size12 bo-rad-10 m-t-3 m-b-23">
								<select id="pilih-ukm" class="selection-1 bo-rad-10 sizefull txt10 p-l-20" name="pilihukm" required>
									<option disabled="disabled" selected="selected">Pilih UKM</option>
									@foreach($ukms as $ukm)

									<option value="{{$ukm->id}}">{{$ukm->nama}}</option>
									@endforeach
									
								</select>
							</div>

								<br>

								<div class="form-group">
									<label> Username </label>
									<input type="text" name="name" class="form-control" placeholder="Masukkan Username">
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="text" name="email" class="form-control" placeholder="Masukkan Email">
								</div>

								<br>

								<div class="form-group">
									<label> Password </label>
									<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
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

					<form action="'/dashbemukmupdate'" method="POST" id="editForm">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<div class="modal-body">
							<div class="form-group">
									<label> UKM </label>
									<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama UKM">
								</div>

								<br>

								{{-- <div class="form-group">
									<label> ID </label>
									<input type="text" name="id" id="id" class="form-control" placeholder="Masukkan Nama Pendek UKM">
								</div>
								<br> --}}

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="namapendek" id="namapendek" class="form-control" placeholder="Masukkan Nama Pendek UKM">
								</div>

								<br>

								<div class="form-group">
									<label> Hari </label>
									<input type="text" name="hari" id="hari" class="form-control" placeholder="Masukkan Hari">
								</div>
		
								<br>

								<div class="form-group">
									<label> Jam </label>
									<input type="time" name="jam" id="jam" class="form-control" placeholder="Masukkan Jam">
								</div>
		
								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" id="tempat" class="form-control" placeholder="Masukkan Tempat">
								</div>
		
								<br>

								<div class="form-group">
									<label> Profil </label>
									<input type="text" name="profil" id="profil" class="form-control" placeholder="Masukkan Profil">
								</div>
		
								<br>

								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="ketua" id="ketua" class="form-control" placeholder="Masukkan Nama Ketua">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Ketua">
								</div>

								<div class="form-group">
									<label> Pembina </label>
									<input type="text" name="pembina"id="pembina" class="form-control" placeholder="Masukkan Pembina UKM">
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

						<form action="'/dashbemukmdelete'" method="POST" id="deleteForm">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<div class="modal-body">
								<input type="hidden" name="_method" value="DELETE">
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