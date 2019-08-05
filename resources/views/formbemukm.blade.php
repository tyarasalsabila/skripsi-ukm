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
										<input type="text" name="nama_ukm" id="nama" class="form-control" value="{{$ukm->nama_ukm}}" required>
									</div>

									<br>

								<div class="form-group">
										<label> Kategori </label>
										<!-- <input type="text" name="kategori" id="kategori" class="form-control" value="{{$ukm->kategori->kategori}}"> -->
										<select class="form-control" id="kategori" name="kategori" required>
											<option value="" disabled="disabled" selected="selected">Pilih Kategori UKM</option>
											<option value="1">Olah Raga</option>
											<option value="2">Bela Diri</option>
											<option value="3">Sosial</option>
											<option value="4">Seni dan Bahasa</option>
										</select>
									</div>
									
									<br>

									<div class="form-group">
										<label> Nama Pendek </label>
										<input type="text" name="namapendek" id="namapendek" class="form-control" value="{{$ukm->namapendek}}" required>
									</div>

									<br>

									<div class="form-group">
										<label> Hari </label>
										<input type="text" name="hari" id="hari" class="form-control" value="{{$ukm->hari}}" required>
									</div>
			
									<br>

									<div class="form-group">
										<label> Jam </label>
										<input type="time" name="jam" id="jam" class="form-control" value="{{$ukm->jam}}" required>
									</div>
			
									<br>

									<div class="form-group">
										<label> Tempat </label>
										<input type="text" name="tempat" id="tempat" class="form-control" value="{{$ukm->tempat}}" required>
									</div>
			
									<br>

									<div class="form-group">
										<label> Profil </label>
										<textarea class="form-control" name="profil" id="profil" cols="110%" rows="10" required> {{$ukm->profil}} </textarea>
									</div>
			
									<br>

									<div class="form-group">
										<label> Ketua </label>
										<input type="text" name="ketua" id="ketua" class="form-control" value="{{$ukm->ketua}}" required>
									</div>

									<br>

									<div class="form-group">
										<label> NPM </label>
										<input type="text" name="npm" id="npm" class="form-control" value="{{$ukm->npm}}" required>
									</div>

									<div class="form-group">
										<label> Pembina </label>
										<input type="text" name="pembina"id="pembina" class="form-control" value="{{$ukm->pembina}}" required>
									</div>

									<div class="form-group">
										<label> Line </label>
										<input type="text" name="line"id="line" class="form-control" value="{{$ukm->line}}" required>
									</div>

									<div class="form-group">
										<label> Facebook </label>
										<input type="text" name="facebook"id="facebook" class="form-control" value="{{$ukm->facebook}}" required>
									</div>

									<div class="form-group">
										<label> Twitter </label>
										<input type="text" name="twitter"id="twitter" class="form-control" value="{{$ukm->twitter}}" required>
									</div>

									<div class="form-group">
										<label> Instagram </label>
										<input type="text" name="instagram"id="instagram" class="form-control" value="{{$ukm->instagram}}" required>
									</div>

									<div class="form-group">
										<label> Email </label>
										<input type="email" name="email"id="email" class="form-control" value="{{$ukm->email}}" required>
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