@extends ('adminukm')

@section ('title','Edit Galeri')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Galeri</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
						<form action="/dashukmgaleriupd/{{$galeri->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							{{ method_field('PUT') }}
							<div class="modal-body">
								<div class="form-group" style="padding-top:20px">
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" value="{{$galeri->judul}}" required>
								</div>
								
								<br>
								
								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" value="{{$galeri->link_foto}}"> 
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardukmgaleri" type="button" class="btn btn-default">Kembali</a>
								<button type="submit" class="btn btn-primary">Update Foto</button>
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