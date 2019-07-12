@extends ('adminukm')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Jadwal</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Jadwal</h3>
						</div>
						<div class="panel-body">
						<form action="/dashukmjadwalupd/{{$ukm->id}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Hari </label>
									<input type="text" name="hari" class="form-control" value="{{$ukm->hari}}">
								</div>

								<br>

								<div class="form-group">
									<label> Jam </label>
									<input type="text" name="jam" class="form-control" value="{{$ukm->jam}}">
								</div>

								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" class="form-control" value="{{$ukm->tempat}}">
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
			</div>
		</div>
	</div>
</div>
@endsection  
</html>