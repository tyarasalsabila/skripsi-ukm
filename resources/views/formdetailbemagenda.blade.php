@extends ('adminbem')

@section ('title','Detail Agenda')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Detail Agenda</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<br>
							<h4>
								{{$agenda->judul}}
							</h4>
							
							<br>
							
							<img src="{{  url('').'/storage/'.$agenda->foto }}" alt="">		
							
							<br><br>

							<p class="p-t-20">
								{{$agenda->isi}}
							</p>

							<br>

							<p class="p-t-20">
								Link Pendaftaran : {{$agenda->link}}
							</p>

							<br>

							<p class="p-t-20">
								Jam : {{$agenda->waktu}}
							</p>

							<br>

							<p class="p-t-20">
								Tanggal : {{$agenda->tanggal}}
							</p>

							<br>

							<p class="p-t-20">
								Tempat : {{$agenda->tempat}}
							</p>

							<br>

							<div class="modal-footer">
								<a href="/dashboardbem" type="button" class="btn btn-default">Kembali</a>
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