@extends ('adminukm')

@section ('title','Dashboard Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Berita</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List Berita</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary">Add Berita</button>
								<button type="button" class="btn btn-warning">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tanggal</th>
										<th>Judul</th>
										<th>UKM</th>
										<th>Foto</th>
										<th>Isi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>7/7/2019</td>
										<td>Berita Unpad Lalalalala</td>
										<td>Paduan Suara Mahasiswa</td>
										<td>xxx.jpg</td>
										<td>loremipsum</td>
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