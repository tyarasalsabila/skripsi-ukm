@extends ('adminukm')

@section ('title','Dashboard UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<!-- BEM -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Dashboard</h3>
					<p class="panel-subtitle">Unit Kegiatan Mahasiswa UNPAD</p>
				</div>
				<div class="panel-body">
					<div class="row">
                        <div class="col-md-3">
							<div class="metric">
                                <p style="text-align:center">
                                    <span class="number">100</span>
                                    <span class="title">Jumlah Anggota</span>
                                </p>
							</div>
                        </div>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Permintaan Anggota Baru</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Nama</th>
										<th>UKM</th>
										<th>Judul</th>
										<!-- <th>Isi</th> -->
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Berita</td>
										<td>PSM</td>
										<td>ABC</td>
										<!-- <td>-</td> -->
										<td>
											<a href="/"><button type="button" class="btn btn-primary btn-toastr">Detail</button></a>
											<a href="/"><button type="button" class="btn btn-primary btn-toastr"><i style="width:10px" class="fa fa-check"></i></button></a>
											<a href="/"><button type="button" class="btn btn-danger btn-toastr"><i style="width:10px" class="fa fa-times"></i></button></a>
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
</div>

@endsection  
</html>

