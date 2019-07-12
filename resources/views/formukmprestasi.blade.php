@extends ('adminukm')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Prestasi</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Prestasi</h3>
						</div>
						<div class="panel-body">
						<form action="/dashukmprestasiupd/{{$prestasi->id}}" method="POST">
							@csrf
							<div class="modal-body">
							<div class="form-group">
									<label> Prestasi </label>
							<input type="text" name="prestasi" class="form-control" value="{{$prestasi->nama}}">
								</div>

								<br>

								<div class="form-group">
									<label> Anggota </label>
									<input type="text" name="anggota" class="form-control" value="{{$prestasi->anggota}}">
								</div>

								<br>

								<div class="form-group">
									<label> Tahun </label>
								<input type="text" name="tahun" class="form-control" value="{{$prestasi->tahun}}">
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