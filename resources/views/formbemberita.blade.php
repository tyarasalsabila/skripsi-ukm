@extends ('adminbem')

@section ('title','Edit Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Berita</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
						<form action="/updateberita/{{$berita->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
								<input id="judul" type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{$berita->judul}}" required>								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<textarea id="isi" class="form-control @error('judul') is-invalid @enderror" name="isi" id="isi" cols="110%" rows="10" required> {{$berita->isi}} </textarea>
								</div>

								<br>


								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" value="{{$berita->foto}}">
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardbemberita" type="button" class="btn btn-default">Kembali</a>
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