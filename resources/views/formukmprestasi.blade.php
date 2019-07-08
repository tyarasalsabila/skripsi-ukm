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
									<label> Prestasi </label>
									<input type="text" name="prestasi" class="form-control" placeholder="Masukkan Prestasi">
								</div>

								<br>

								<div class="form-group">
									<label> Anggota </label>
									<input type="text" name="anggota" class="form-control" placeholder="Masukkan Nama Peraih Prestasi">
								</div>

								<br>

								<div class="form-group">
									<label> Tahun </label>
									<input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun Prestasi">
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