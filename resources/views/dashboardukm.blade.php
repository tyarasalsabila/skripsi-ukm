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
					<p class="panel-subtitle">Unit Kegiatan Mahasiswa UNPAD - UKM</p>
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
										<th>No</th>
										<th>Nama</th>
										<th>UKM</th>
										<th>Judul</th>
										<th>Isi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach($reg as $rgt)
								@php ($x = $x+1)
									<tr>
										<th></th>
										<td>{{$rgt->nama}}</td>
										<td>{{$rgt->ukm->nama}}</td>
										<td>ABC</td>
										<td>-</td>
										<td>
											<button type="button" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#acceptModal">Accept</button>
											<button type="button" class="btn btn-danger btn-toastr" data-toggle="modal" data-target="#rejectModal">Reject</button>
										</td>
									</tr>
								@endforeach
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

