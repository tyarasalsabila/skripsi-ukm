@extends ('adminukm')

@section ('title','Edit Prestasi')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Prestasi</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
						<form action="/dashukmprestasiupd/{{$prestasi->id}}" method="POST">
							@csrf
							<div class="modal-body">
							<div class="form-group">
									<label> Prestasi </label>
							<input type="text" name="prestasi" class="form-control" value="{{$prestasi->nama}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Anggota </label>
									<input type="text" name="anggota" class="form-control" value="{{$prestasi->anggota}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Tahun </label>
								<input type="number" name="tahun" class="form-control" value="{{$prestasi->tahun}}" required>
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardukmprestasi" type="button" class="btn btn-default">Kembali</a>
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