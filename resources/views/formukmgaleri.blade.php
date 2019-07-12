@extends ('adminukm')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Galeri</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Galeri</h3>
						</div>
						<div class="panel-body">
						<form action="/dashukmgaleriupd/{{$galeri->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
								<input type="text" name="judul" class="form-control" value="{{$galeri->judul}}">
								</div>
								<br>
								<label> Upload Foto </label>
								<div class="custom-file">
								<input type="file" name="image" class="custom-file-input" value="{{$galeri->link_foto}}">
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