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
							<button type="button" class="btn btn-primary">Add UKM</button>
							<button type="button" class="btn btn-warning">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
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
									<td>08123456789</td>
								</tr>
							</tbody>
						</table>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection  
</html>