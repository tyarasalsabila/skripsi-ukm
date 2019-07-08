@extends ('adminbem')

@section ('title','Dashboard BEM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Agenda</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Agenda</h3>
						</div>
						<div class="panel-body">
						<form action="'/dashbemukmupdate'" method="POST" id="editForm">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<div class="modal-body">
							<div class="form-group">
									<label> UKM </label>
									<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama UKM">
								</div>

								<br>

								{{-- <div class="form-group">
									<label> ID </label>
									<input type="text" name="id" id="id" class="form-control" placeholder="Masukkan Nama Pendek UKM">
								</div>
								<br> --}}

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="namapendek" id="namapendek" class="form-control" placeholder="Masukkan Nama Pendek UKM">
								</div>

								<br>

								<div class="form-group">
									<label> Hari </label>
									<input type="text" name="hari" id="hari" class="form-control" placeholder="Masukkan Hari">
								</div>
		
								<br>

								<div class="form-group">
									<label> Jam </label>
									<input type="time" name="jam" id="jam" class="form-control" placeholder="Masukkan Jam">
								</div>
		
								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" id="tempat" class="form-control" placeholder="Masukkan Tempat">
								</div>
		
								<br>

								<div class="form-group">
									<label> Profil </label>
									<input type="text" name="profil" id="profil" class="form-control" placeholder="Masukkan Profil">
								</div>
		
								<br>

								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="ketua" id="ketua" class="form-control" placeholder="Masukkan Nama Ketua">
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Ketua">
								</div>

								<div class="form-group">
									<label> Pembina </label>
									<input type="text" name="pembina"id="pembina" class="form-control" placeholder="Masukkan Pembina UKM">
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