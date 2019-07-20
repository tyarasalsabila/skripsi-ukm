@extends ('adminukm')

@section ('title','Detail Berita')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Berita</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<h4>
							{{$berita->judul}}
						</h4>
						<br>
						<img src="{{  url('').'/storage/'.$berita->foto }}" alt="">		
						
						<br>
						<p class="p-t-20">
							{{$berita->isi}}
						</p>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection  
</html>