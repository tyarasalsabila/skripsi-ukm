@extends ('adminbem')

@section ('title','BEM - User')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List User UKM</h3>
						</div>
					<div class="panel-body table-responsive">
						<p class="demo-button">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add User UKM</button>
						</p>

						@if (session('status'))
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<i class="fa fa-check-circle"></i> {{ session('status') }}
							</div>
						@endif

						<table id="datatable" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>UKM</th>
									<th>User</th>
								</tr>
							</thead>
							<tbody>
						 	<!-- @php ($x = 0) -->
							@foreach($accs as $acc)
            				<!-- @php ($x = $x+1) -->
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$acc->ukm->nama_ukm}}</td>
									<td>{{$acc->name}}</td>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>						
				</div>
			</div>

			
			<!-- Add -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<!-- <h5 class="modal-title" id="addModalLabel"></h5> -->
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbemuser')}}" method="POST">
							@csrf
							<div class="modal-body">
							<span class="txt9">
								Pilih UKM
							</span>
							<div class="size12 bo-rad-10 m-t-3 m-b-23">
								<select id="pilih-ukm" class="form-control" name="pilihukm" required>
									<option value="" disabled="disabled" selected="selected">Pilih UKM</option>
									@foreach($ukms as $ukm)

									<option value="{{$ukm->id}}">{{$ukm->nama_ukm}}</option>
									@endforeach
									
								</select>
							</div>

								<br>

								<div class="form-group">
									<label> Username </label>
									<input type="text" name="name" class="form-control" placeholder="Masukkan Username" required>
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
								</div>

								<br>

								<div class="form-group">
									<label> Password </label>
									<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
								</div>

								<br>

								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Add -->
		</div>
	</div>
</div>


@endsection  
</html>