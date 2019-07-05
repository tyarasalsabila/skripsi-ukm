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
										<td>{{$brt->ukm->nama}}</td>
										<td>{{$brt->judul}}</td>
										<td>{{$brt->isi}}</td>
										<td>
											<!-- <button type="button" class="btn btn-primary btn-toastr" data-toggle="modal" data-target="#acceptModal">Accept</button> -->
											<a href="#" data-target = "#acceptModal" data-toggle="modal" data-id = "{{$brt->id}}" role="button" class="btn btn-primary btn-toastr">Accept</a>
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
										<th>Isi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach($agenda as $agd)
            					@php ($x = $x+1)
									<tr>
										<td>{{$x}}</td>
										<td>{{$agd->ukm->nama}}</td>
										<td>{{$agd->judul}}</td>
										<td>{{$agd->isi}}</td>
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


{{-- <script>
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
<!-- 
{{-- <script>
$(document).on("click", ".editDialog", function () {
	console.log(dataId); 
	var dataId = $(this).data('id');
	 $(".modal-body #bookId").val( myBookId );
	 
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});</script> --}} -->

<script>
$('#acceptModal').on('show', function(e) {
    var link     = e.relatedTarget(),
        modal    = $(this),
        id = link.data("id");
        // email    = link.data("email");
	window.alert(id);
    modal.find("#email").val(email);
    modal.find("#username").val(username);
});
</script>



<script>
$('.editDialog').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var dataId = $(e.relatedTarget).data('id');

//populate the textbox
$(e.currentTarget).find('input[name="bookId"]').val(dataId);
});
</script>

@endsection  
</html>

