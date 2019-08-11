@extends ('adminukm')

@section ('title','UKM - Jadwal')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">Jadwal UKM</h3>
							</div>

							@if (session('status'))
								<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-check-circle"></i> {{ session('status') }}
								</div>
							@endif
								
							<div class="panel-body">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Hari</th>
											<th>Jam</th>
											<th>Tempat</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									{{-- @foreach ($ukms as $ukm) --}}
										<tr>
											<td>{{$ukm->hari}}</td>
											<td>{{$ukm->jam}}</td>
											<td>{{$ukm->tempat}}</td>
											<td>
											<a href="/editjadwalukm/{{$ukm->id}}" type="button" class="btn btn-warning">Edit</a>
											</td>
										</tr>
									{{-- @endforeach --}}
									</tbody>
								</table>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection  
</html>