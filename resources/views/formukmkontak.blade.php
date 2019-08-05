@extends ('adminukm')

@section ('title','Edit Kontak')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Kontak</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
						<form action="/dashukmkontakupd/{{$ukm->id}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Line </label>
									<input type="text" name="line" class="form-control" value="{{$ukm->line}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Facebook </label>
									<input type="text" name="facebook" class="form-control" value="{{$ukm->facebook}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Twitter </label>
									<input type="text" name="twitter" class="form-control" value="{{$ukm->twitter}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Instagram </label>
									<input type="text" name="instagram" class="form-control" value="{{$ukm->instagram}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="email" name="email" class="form-control" value="{{$ukm->email}}" required>
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardukmkontak" type="button" class="btn btn-default">Kembali</a>
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