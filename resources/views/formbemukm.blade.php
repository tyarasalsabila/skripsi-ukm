@extends ('adminbem')

@section ('title','Edit UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<form action="/updateukm/{{$ukm->id}}" method="POST" id="editForm">
								{{ csrf_field() }}
								{{ method_field('PUT') }}
								<div class="modal-body">
									<div class="form-group">
										<label> UKM </label>
										<input type="text" name="nama" id="nama" class="form-control" value="{{$ukm->nama_ukm}}">
									</div>

									<br>

									<div class="form-group">
										<label> Kategori </label>
										<input type="text" name="kategori" id="kategori" class="form-control" value="{{$ukm->kategori->kategori}}">
									</div>
									
									<br>

									<div class="form-group">
										<label> Nama Pendek </label>
										<input type="text" name="namapendek" id="namapendek" class="form-control" value="{{$ukm->namapendek}}">
									</div>

									<br>

									<div class="form-group">
										<label> Hari </label>
										<input type="text" name="hari" id="hari" class="form-control" value="{{$ukm->hari}}">
									</div>
			
									<br>

									<div class="form-group">
										<label> Jam </label>
										<input type="time" name="jam" id="jam" class="form-control" value="{{$ukm->jam}}">
									</div>
			
									<br>

									<div class="form-group">
										<label> Tempat </label>
										<input type="text" name="tempat" id="tempat" class="form-control" value="{{$ukm->tempat}}">
									</div>
			
									<br>

									<div class="form-group">
										<label> Profil </label>
										<textarea class="form-control" name="profil" id="profil" cols="110%" rows="10"> {{$ukm->profil}} </textarea>
									</div>
			
									<br>

									<div class="form-group">
										<label> Ketua </label>
										<input type="text" name="ketua" id="ketua" class="form-control" value="{{$ukm->ketua}}">
									</div>

									<br>

									<div class="form-group">
										<label> NPM </label>
										<input type="text" name="npm" id="npm" class="form-control" value="{{$ukm->npm}}">
									</div>

									<div class="form-group">
										<label> Pembina </label>
										<input type="text" name="pembina"id="pembina" class="form-control" value="{{$ukm->pembina}}">
									</div>
									<br>
								</div>
								<div class="modal-footer">
									<a href="/dashboardbemukm" type="button" class="btn btn-default">Kembali</a>
										<button type="submit" class="btn btn-primary">Update Data</button>
								</div>
							</form>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection  
</html>