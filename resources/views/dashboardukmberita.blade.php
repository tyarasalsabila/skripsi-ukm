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
										<th>No</th>
										<th>Tanggal</th>
										<th>Judul</th>
										<th>UKM</th>
										<th>Foto</th>
										<th>Isi</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach ($berita as $brt)
								@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$brt->create_at}}</td>
										<td>{{$brt->judul}}</td>
										<td>{{$brt->ukm->nama}}</td>
										<td>{{$brt->foto}}</td>
										<td>{{$brt->isi}}</td>
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