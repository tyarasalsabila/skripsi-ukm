@extends ('adminukm')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Berita</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Berita</h3>
						</div>
						<div class="panel-body">
						<form action="/dashukmberitaupd/{{$berita->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
							<div class="form-group">
									<label> Judul </label>
							<input type="text" name="judul" class="form-control" value="{{$berita->judul}}">
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
								<input type="text" name="isi" class="form-control" value="{{$berita->isi}}">
								</div>

								<br>

								<label> Upload Foto </label>
								<div class="custom-file">
								<input type="file" name="image" class="custom-file-input" value="{{$berita->foto}}">
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