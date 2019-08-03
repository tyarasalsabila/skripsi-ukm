@extends ('adminbem')

@section ('title','Detail Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Detail Berita</h3>
			<div class="row">
				<div class="col-md-12">
						<div class="panel">
							<div class="panel-body">
								<br>
								<h4>
									{{$berita->judul}}
								</h4>
								
								<br>
								
								<img src="{{  url('').'/storage/'.$berita->foto }}" width="70px" alt="">
								
								<br><br>

								<p class="p-t-20">
									{{$berita->isi}}
								</p>

								<br> 

								<div class="modal-footer">
									<a href="/dashboardbemberita" type="button" class="btn btn-default">Kembali</a>
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