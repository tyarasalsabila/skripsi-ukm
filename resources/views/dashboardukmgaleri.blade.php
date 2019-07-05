@extends ('adminukm')

@section ('title','Dashboard UKM - Galeri')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Dashboard UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Anggota UKM</h3>
						</div>
					<div class="panel-body">
						<p class="demo-button">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Prestasi</button>
						</p>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Foto</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@php ($x = 0)
								@foreach ($galeri as $glr)
								@php ($x = $x+1)
								<tr>
									<td>{{$x}}</td>
									<td>{{Bambang}}</td>
									<td>
										<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
									</td>
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