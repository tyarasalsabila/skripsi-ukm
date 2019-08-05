@extends ('adminukm')

@section ('title','Edit Pengurus')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Pengurus</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
						<form action="/updatepengurus/{{$ukm->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
							<div class="form-group" style="padding-top:20px">
									<label> Ketua </label>
									<input type="text" name="ketua" class="form-control" value="{{$ukm->ketua}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" value="{{$ukm->npm}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Pembina </label>
									<input type="text" name="pembina" class="form-control" value="{{$ukm->pembina}}" required>
								</div>
							</div>

							<br>

							<div class="modal-footer">
								<a href="/dashboardukm" type="button" class="btn btn-default">Kembali</a>
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