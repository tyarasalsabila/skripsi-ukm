@extends ('adminukm')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Anggota</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Anggota</h3>
						</div>
						<div class="panel-body">
							<form action="/dashukmanggotaupd/{{$anggota->id}}" method="POST">
								@csrf
								<div class="form-group">
									<label> Nama </label>
									<input type="text" name="nama" class="form-control" value="{{$anggota->nama}}">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" value="{{$anggota->npm}}">
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="text" name="email" class="form-control" value="{{$anggota->email}}">
								</div>

								<br>

								<div class="form-group">
									<label> No. HP </label>
									<input type="text" name="nohp" class="form-control" value="{{$anggota->hp}}">
								</div>

								<div class="form-group">
									<label> Fakultas </label>
									<input type="text" name="fakultas" class="form-control" value="{{$anggota->fakultas}}">
								</div>

								<div class="form-group">
									<label> Jurusan </label>
									<input type="text" name="jurusan" class="form-control" value="{{$anggota->jurusan}}">
								</div>

								<div class="form-group">
									<label> Angkatan </label>
									<input type="text" name="angkatan" class="form-control" value="{{$anggota->angkatan}}">
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardukmanggota" type="button" class="btn btn-default">Kembali</a>
								<a type="submit" class="btn btn-primary">Update Data</a>
							</div>
						</form>
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>

@endsection  
</html>