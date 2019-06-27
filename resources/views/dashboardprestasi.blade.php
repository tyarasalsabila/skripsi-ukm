@extends ('admin')

@section ('title','Dashboard Pendaftaran UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Prestasi UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Prestasi</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary">Add Prestasi</button>
								<button type="button" class="btn btn-warning">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Prestasi</th>
										<th>Anggota</th>
										<th>Tahun</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Juara 1 Lomba Menyanyi</td>
										<td>Tyara Salsabila</td>
										<td>2019</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection  
</html>