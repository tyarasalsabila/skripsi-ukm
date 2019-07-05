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
							<table class="table table-responsive table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>NPM</th>
										<th>Email</th>
										<th>No. HP</th>
										<th>Fakultas</th>
										<th>Jurusan</th>
										<th>Angkatan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								@php ($x = 0)
								@foreach($reg as $rgt)
								@php ($x = $x+1)
									<tr>
										<th>{{$x}}</th>
										<td>{{$rgt->nama}}</td>
										<td>{{$rgt->npm}}</td>
										<td>{{$rgt->email}}</td>
										<td>{{$rgt->nohp}}</td>
										<td>{{$rgt->fakultas}}</td>
										<td>{{$rgt->jurusan}}</td>
										<td>{{$rgt->angkatan}}</td>
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
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
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

{{-- <script>
$(document).on("click", ".editDialog", function () {
	console.log(dataId); 
	var dataId = $(this).data('id');
	 $(".modal-body #bookId").val( myBookId );
	 
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});</script> --}}

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

