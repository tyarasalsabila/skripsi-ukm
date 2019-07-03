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
								@php ($x = 0)
								@foreach ($agenda as $agd)
								@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$agd->create_at}}</td>
										<td>{{$agd->judul}}</td>
										<td>{{$agd->ukm->nama}}</td>
										<td>{{$agd->foto}}</td>
										<td>{{$agd->isi}}</td>
										<td>{{$agd->link}}</td>
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