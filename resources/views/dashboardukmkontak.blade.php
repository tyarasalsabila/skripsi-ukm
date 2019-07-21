@extends ('adminukm')

@section ('title','UKM - Kontak')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">Kontak UKM</h3>
							</div>
							<div class="panel-body">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Line</th>
											<th>Facebook</th>
											<th>Twitter</th>
											<th>Instagram</th>
											<th>Email</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									{{-- @foreach ($ukms as $ukm) --}}
										<tr>
											<td>{{$ukm->line}}</td>
											<td>{{$ukm->facebook}}</td>
											<td>{{$ukm->twitter}}</td>
											<td>{{$ukm->instagram}}</td>
											<td>{{$ukm->email}}</td>
											<td>
											<a href="/editkontakukm/{{$ukm->id}}" type="button" class="btn btn-warning">Edit</a>
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