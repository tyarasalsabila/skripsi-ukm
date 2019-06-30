@extends ('adminbem')

@section ('title','Dashboard BEM')

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
							<h3 class="panel-title">Notifikasi Berita</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>UKM</th>
										<th>Judul</th>
										<!-- <th>Isi</th> -->
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach($berita as $brt)
									<tr>
										<td></td>
										<td>{{$brt->ukm->nama}}</td>
										<td>{{$brt->judul}}</td>
										<!-- <td>-</td> -->
										<td>
											<a href="" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#exampleModal">Detail</button>
											<a href="" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#exampleModal"><i style="width:10px" class="fa fa-check"></i></button>
											<a href="" class="btn btn-danger btn-toastr" data-toggle="modal" data-target="#exampleModal"><i style="width:10px" class="fa fa-times"></i></button>
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Notifikasi Agenda</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>UKM</th>
										<th>Judul</th>
										<!-- <th>Isi</th> -->
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach($berita as $brt)
									<tr>
										<td>Berita</td>
										<td>{{$brt->ukm->nama}}</td>
										<td>{{$brt->judul}}</td>
										<!-- <td>-</td> -->
										<td>
											<button type="button" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#addModal">Detail</button>
											<button type="button" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#exampleModal"><i style="width:10px" class="fa fa-check"></i></button>
											<button type="button" class="btn btn-danger btn-toastr" data-toggle="modal" data-target="#exampleModal"><i style="width:10px" class="fa fa-times"></i></button>
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		
			<!-- Modal Add -->
			<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">New message</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbem')}}" method="POST">

							{{ csrf_field() }}
							<div class="modal-body">
								<div class="form-group">
									<label> Judul </label>
									<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Berita">
								</div>

								<div class="form-group">
									<label> Isi </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Modal Add -->
		</div>
	</div>
</div>


<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

@endsection  
</html>

