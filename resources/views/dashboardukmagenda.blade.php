@extends ('adminukm')

@section ('title','UKM - Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">List Agenda</h3>
							</div>
							<div class="panel-body">
								<p class="demo-button">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Agenda</button>
								</p>

								@if (session('status'))
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> {{ session('status') }}
									</div>
								@endif
								
								<table class="table table-bordered table-hover" id="datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Judul</th>
											<th>Foto</th>
											<th>Isi</th>
											<th>Link</th>
											<th>Jam</th>
											<th>Tanggal Acara</th>
											<th>Tempat</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<!-- @php ($x = 0) -->
									@foreach ($agenda as $agd)
									<!-- @php ($x = $x+1) -->
										<tr>
											<!-- <td>{{$x}}</td> -->
											<td>{{$agd->created_at}}</td>
											<td>{{$agd->judul}}</td>
											<td class="fototable"><img src="{{ url('').'/storage/'.$agd->foto}}" width="70px" alt=""></td>
											<td>{{Str::limit($agd->isi,10)}}</td>
											<td>{{$agd->link}}</td>
											<td>{{$agd->waktu}}</td>
											<td>{{$agd->tanggal}}</td>
											<td>{{$agd->tempat}}</td>
											@if($agd->confirmed == 1)
												<td>Diterima</td>
											@elseif($agd->confirmed === 0)
												<td>Ditolak</td>
											@else
												<td>Menunggu Konfirmasi</td>
											@endif
											<td>
												<a href="/detailagendaukm/{{$agd->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/editagendaukm/{{$agd->id}}" type="button" class="btn btn-warning" >Edit</a>
												<a href="/dashukmagendadel/{{$agd->id}}" type="button" class="btn btn-danger" onclick="return confirm('Hapus Agenda?')">Delete</a>
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

						<form action="{{route('dashukmagenda')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
							<div class="form-group">
							<div class="form-group">
								<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Agenda" required>
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<textarea class="form-control" name="isi" id="isi" cols="110%" rows="10" placeholder="Masukkan Isi Agenda" required></textarea>
								</div>

								<br>

								<div class="form-group">
									<label> Link </label>
									<input type="text" name="link" class="form-control" placeholder="Masukkan Link Pendaftaran (Optional)" required>
								</div>

								<br>

								<div class="form-group">
									<label> Waktu </label>
									<input type="time" name="waktu" class="form-control" placeholder="Masukkan Waktu" required>
								</div>

								<br>

								<div class="form-group">
									<label> Tanggal Acara </label>
									<input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" required>
								</div>

								<br>

								<div class="form-group">
									<label> Tempat </label>
									<input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat" required>
								</div>

								<br>

								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" required>
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