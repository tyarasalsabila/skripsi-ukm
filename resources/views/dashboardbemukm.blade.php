@extends ('adminbem')

@section ('title','Dashboard BEM - UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Dashboard UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List UKM</h3>
						</div>
					<div class="panel-body">
						<p class="demo-button">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add UKM</button>
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
						</p>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>UKM</th>
									<th>Nama Pendek</th>
									<th>Ketua</th>
									<th>No. HP</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>No</td>
									<td>Paduan Suara Mahasiswa</td>
									<td>PSM</td>
									<td>Malih</td>
									<td>08121423409</td>
								</tr>
							</tbody>
						</table>
					</div>						
				</div>
			</div>

			<!-- Modal Add -->
			<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">New message</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbemukm')}}" method="POST">
							
							{{ csrf_field() }}
							<div class="modal-body">
								<div class="form-group">
									<label> UKM </label>
									<input type="text" name="ukm" class="form-control" placeholder="Masukkan Nama UKM">
								</div>

								<div class="form-group">
									<label> Nama Pendek </label>
									<input type="text" name="namapendek" class="form-control" placeholder="Masukkan Nama Pendek UKM">
								</div>

								<div class="form-group">
									<label> Ketua </label>
									<input type="text" name="ketua" class="form-control" placeholder="Masukkan Ketua UKM">
								</div>

								<div class="form-group">
									<label> No. HP </label>
									<input type="text" name="nohp" class="form-control" placeholder="Masukkan Kontak UKM">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Modal Add -->
		</div>
	</div>
</div>
@endsection  
</html>