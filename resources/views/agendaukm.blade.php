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
							<p class="demo-button">
								<button type="button" class="btn btn-primary">Add Agenda</button>
								<button type="button" class="btn btn-warning">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tanggal</th>
										<th>Tanggal Agenda</th>
										<th>Judul</th>
										<th>UKM</th>
										<th>Foto</th>
										<th>Isi</th>
										<th>Link</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>7/7/2019</td>
										<td>23/7/2019</td>
										<td>Acara IFest</td>
										<td>LISES</td>
										<td>yyy.jpg</td>
										<td>loremipsum</td>
										<td>bit.ly/</td>
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