@extends ('adminukm')

@section ('title','Detail Prestasi')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Detail Prestasi</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<br>
							
							<p class="p-t-20">
								Prestasi : {{$prestasi->nama}}
							</p>

							<br>

							<p class="p-t-20">
								Anggota : {{$prestasi->anggota}}
							</p>

							<br>

							<p class="p-t-20">
								Tahun : {{$prestasi->tahun}}
							</p>

							<br>

							<div class="modal-footer">
								<a href="/dashboardukmprestasi" type="button" class="btn btn-default">Kembali</a>
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