@extends ('adminukm')

@section ('title','Dashboard UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">				
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div style="overflow:auto">
							<div class="panel-heading">
								<h3 class="panel-title">Permintaan Anggota Baru</h3>
							</div>
							<div class="panel-body" style="padding-right:10px">
								<table class="table table-bordered table-hover" id="datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Nama</th>
											<th>NPM</th>
											<th>Email</th>
											<th>No. HP</th>
											<th>Fakultas</th>
											<th>Jurusan</th>
											<th>Angkatan</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
									@php ($x = 0)
									
									@foreach($reg as $rgt)
									@php ($x = $x+1)
										<tr>
											<th>{{$x}}</th>
											<td>{{$rgt->created_at}}</td>
											<td>{{$rgt->nama}}</td>
											<td>{{$rgt->npm}}</td>
											<td>{{$rgt->email}}</td>
											<td>{{$rgt->hp}}</td>
											<td>{{$rgt->fakultas}}</td>
											<td>{{$rgt->jurusan}}</td>
											<td>{{$rgt->angkatan}}</td>
											<td>{{$rgt->status}}</td>
											<td>
											@if($rgt->status === 'Belum dikonfirmasi')
												<a href="/acceptregistrasi/{{$rgt->id}}" type="button" class="btn btn-primary accept"  onclick="return confirm('Terima Anggota?')">Accept</a>
												<a href="/rejectregistrasi/{{$rgt->id}}" type="button" class="btn btn-danger reject" onclick="return confirm('Tolak Anggota?')">Reject</a>
											@endif
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

