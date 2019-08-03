@extends ('adminbem')

@section ('title','Detail UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Detail UKM</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body" style="padding-top:20px">
							<p style="padding-top:10px">
								UKM : {{$ukm->nama_ukm}}
							</p>

							<br>

							<p>
								Kategori : {{$ukm->kategori->kategori}}
							</p>

							<br>
							
							<p>
								Nama Pendek : {{$ukm->namapendek}}
							</p>

							<br>

							<p>
								Hari : {{$ukm->hari}}
							</p>

							<br>

							<p>
								Jam : {{$ukm->jam}}
							</p>

							<br>

							<p>
								Tempat : {{$ukm->tempat}}
							</p>

							<br>

							<p>
								Profil : {{$ukm->profil}}
							</p>

							<br>

							<p>
								Ketua : {{$ukm->ketua}}
							</p>

							<br>

							<p>
								NPM : {{$ukm->npm}}
							</p>

							<br>

							<p>
								Pembina : {{$ukm->pembina}}
							</p>

							<br>

							<p>
								Line : {{$ukm->line}}
							</p>

							<br>

							<p>
								Facebook : {{$ukm->facebook}}
							</p>

							<br>

							<p>
								Twitter : {{$ukm->twitter}}
							</p>

							<br>

							<p>
								Instagram : {{$ukm->instagram}}
							</p>

							<br>

							<p>
								Email : {{$ukm->email}}
							</p>

							<br>

							<div class="modal-footer">
								<a href="/dashboardbemukm" type="button" class="btn btn-default">Kembali</a>
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