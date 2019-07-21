@extends ('adminukm')

@section ('title','Edit Profil')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Profil</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<form action="/updateprofil/{{$ukm->id}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="modal-body">
									<div class="form-group" style="padding-top:20px">
										<label style="padding-bottom:10px"> Profil </label>
										<br>
										<!-- <input type="text" name="profil" class="form-control" value="{{$ukm->profil}}"> -->
										<textarea class="form-control" name="profil" id="profil" cols="110%" rows="10"> {{$ukm->profil}} </textarea>
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