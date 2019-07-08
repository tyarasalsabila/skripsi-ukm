@extends ('adminukm')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Agenda</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Agenda</h3>
						</div>
						<div class="panel-body">
						<form action="{{route('dashbem')}}" method="POST">
							@csrf
							<div class="modal-body">
							<div class="form-group">
									<label> Nama </label>
									<input type="text" name="nama" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="text" name="email" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>

								<div class="form-group">
									<label> No. HP </label>
									<input type="text" name="nohp" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Fakultas </label>
									<input type="text" name="fakultas" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Jurusan </label>
									<input type="text" name="jurusan" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<div class="form-group">
									<label> Angkatan </label>
									<input type="text" name="angkatan" class="form-control" placeholder="Masukkan Isi Berita">
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
			</div>
		</div>
	</div>
</div>
@endsection  
</html>