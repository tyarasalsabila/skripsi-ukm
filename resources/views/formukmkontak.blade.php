@extends ('adminukm')

@section ('title','Edit Kontak UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Kontak</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Kontak</h3>
						</div>
						<div class="panel-body">
						<form action="/dashukmkontakupd/{{$ukm->id}}" method="POST">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Line </label>
									<input type="text" name="line" class="form-control" value="{{$ukm->line}}">
								</div>

								<br>

								<div class="form-group">
									<label> Facebook </label>
									<input type="text" name="facebook" class="form-control" value="{{$ukm->facebook}}">
								</div>

								<br>

								<div class="form-group">
									<label> Twitter </label>
									<input type="text" name="twitter" class="form-control" value="{{$ukm->twitter}}">
								</div>

								<br>

								<div class="form-group">
									<label> Instagram </label>
									<input type="text" name="instagram" class="form-control" value="{{$ukm->instagram}}">
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="text" name="email" class="form-control" value="{{$ukm->email}}">
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