@extends ('admin')

@section ('title','Dashboard')

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
                                    <span class="number">20</span>
                                    <span class="title">Jumlah UKM</span>
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
							<h3 class="panel-title">Notifikasi</h3>
						</div>
						<div class="panel-body">
							<p class="demo-button">
								<button type="button" class="btn btn-primary">Add Prestasi</button>
							</p>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Kategori</th>
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
											<a href="/notifikasidetail"><button type="button" class="btn btn-primary btn-toastr">Detail</button></a>
											<a href="/"><button type="button" class="btn btn-warning btn-toastr">Edit</button>
											<a href="/"><button type="button" class="btn btn-danger btn-toastr">Delete</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			


			<!-- UKM -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Dashboard</h3>
					<p class="panel-subtitle">Paduan Suara Mahasiswa</p>
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
						<div class="panel-body table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>NPM</th>
										<th>Angkatan</th>
										<th>Nama</th>
										<th>Fakultas</th>
										<th>Jurusan</th>
										<th>Email</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>140810150019</td>
										<td>2015</td>
										<td>Tyara Salsabila</td>
										<td>FMIPA</td>
										<td>Teknik Informatika</td>
										<td>tyarasalsabila@yahoo.co.id</td>
										<td>Belum Disetujui</td>
										<td>
											<button type="button" class="btn btn-primary btn-toastr"><i style="width:10px" class="fa fa-check"></i></button>
											<button type="button" class="btn btn-danger btn-toastr"><i style="width:10px" class="fa fa-times"></i></button>
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

