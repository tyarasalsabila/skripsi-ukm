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
					<p class="panel-subtitle">Unit Kegiatan Mahasiswa UNPAD - BEM</p>
				</div>
				<div class="panel-body">
					<div class="row">
                        <div class="col-md-3">
							<div class="metric">
                                <p style="text-align:center">
								<span class="number">{{$count}}</span>
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
						<div style="overflow:auto">
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
											<th>Foto</th>
											<th>Isi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@php ($x = 0)
									@foreach($berita as $brt)
									@php ($x = $x+1)
										<tr>
											<td>{{$x}}</td>
											<td>{{$brt->ukm->nama_ukm}}</td>
											<td>{{$brt->judul}}</td>
											<td><img src="{{  url('').'/storage/'.$brt->foto }}" width="70px" alt=""></td>
											<td>{{$brt->isi}}</td>
											<td>
												<a href="/detailberitabem/{{$brt->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/acceptberita/{{$brt->id}}" type="button" class="btn btn-primary accept"  onclick="return confirm('Terima Berita?')">Accept</a>
												<a href="/rejectberita/{{$brt->id}}" type="button" class="btn btn-danger reject" onclick="return confirm('Tolak Berita?')">Reject</a>
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
			

			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
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
											<th>Foto</th>
											<th>Isi</th>
											<th>Link</th>
											<th>Jam</th>
											<th>Tanggal Acara</th>
											<th>Tempat</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@php ($x = 0)
									@foreach($agenda as $agd)
									@php ($x = $x+1)
										<tr>
											<td>{{$x}}</td>
											<td>{{$agd->ukm->nama_ukm}}</td>
											<td>{{$agd->judul}}</td>
											<td><img src="{{ url('').'/storage/'.$agd->foto}}" width="70px" alt=""></td>
											<td>{{$agd->isi}}</td>
											<td>{{$agd->link}}</td>
											<td>{{$agd->waktu}}</td>
											<td>{{$agd->tanggal}}</td>
											<td>{{$agd->tempat}}</td>
											<td>
												<a href="/detailagendabem/{{$agd->id}}" type="button" class="btn btn-primary">Detail</a>	
												<a href="/acceptagenda/{{$agd->id}}" type="button" class="btn btn-primary accept"  onclick="return confirm('Terima Agenda?')">Accept</a>
												<a href="/rejectagenda/{{$agd->id}}" type="button" class="btn btn-danger reject" onclick="return confirm('Tolak Agenda?')">Reject</a>
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

						<form action="{{route('dashbem')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="modal-body">
									<input type="text" name="judul" class="form-control" value="" placeholder="Masukkan Judul Berita">
								</div>

								<br>

								<div class="form-group">
									<label> Isi </label>
									<input type="text" name="isi" class="form-control" placeholder="Masukkan Isi Berita">
								</div>

								<br>
								
								<label> Upload Foto </label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input">
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


			<!-- Accept -->
			<div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="acceptModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="{{route('dashbem')}}" method="POST">
							@csrf
							<div class="modal-body">
								<input type="hidden" name="judul">
								<p id="test"></p>

								<p> Accept Data? </p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
								<button type="submit" class="btn btn-primary">Ya</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Accept -->


			<!-- Reject -->
			<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<form action="{{route('dashbem')}}" method="POST">
							@csrf
							<div class="modal-body">
								<input type="hidden" name="judul">
								<p> Reject Data? </p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
								<button type="submit" class="btn btn-primary">Ya</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Reject -->
		</div>
	</div>
</div>


<!-- {{-- <script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script> --}}
 
{{-- <script>
$(document).on("click", ".editDialog", function () {
	console.log(dataId); 
	var dataId = $(this).data('id');
	 $(".modal-body #bookId").val( myBookId );
	 
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});</script> --}} 

<script type="text/javascript">
	$(document).ready(function () {
			var table = $('#datatable').DataTable();

			//Edit
			


			//Delete
			table.on('click', '.delete', function () {
				$tr = $(this).closest('tr');
				if($($tr).hasClass('child')) {
					$tr = $tr.prev('.parent');
				}

				var data = table.row($tr).data();
				console.log(data);

				$('#id').val(data[0]);

				$('#deleteForm').attr('action', '/dashbemukmdelete/'+data[0]);
				
			});
		});
</script> -->

@endsection  
</html>