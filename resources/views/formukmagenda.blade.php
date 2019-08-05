@extends ('adminukm')

@section ('title','Edit Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Agenda</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
						<form action="/dashukmagendaupd/{{$agenda->id}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
							<div class="form-group">
									<label> Judul </label>
							<input type="text" name="judul" class="form-control" value="{{$agenda->judul}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<textarea class="form-control" name="isi" id="isi" cols="110%" rows="10" required> {{$agenda->isi}} </textarea>
								</div>

								<br>

								<div class="form-group">
									<label> Link </label>
									<input type="text" name="link" class="form-control" value="{{$agenda->link}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Waktu </label>
									<input type="time" name="waktu" class="form-control" value="{{$agenda->waktu}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Tanggal </label>
									<input type="date" name="tanggal" class="form-control" value="{{$agenda->tanggal}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" class="form-control" value="{{$agenda->tempat}}" required>
								</div>

								<br>

								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" value="{{$agenda->foto}}" required>
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardukmagenda" type="button" class="btn btn-default">Kembali</a>
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