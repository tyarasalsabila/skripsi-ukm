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
							<p class="p-t-20">
								UKM : {{$ukm->nama_ukm}}
							</p>

							<br>

							<p class="p-t-20">
								Nama Pendek : {{$ukm->namapendek}}
							</p>

							<br>

							<p class="p-t-20">
								Hari : {{$ukm->hari}}
							</p>

							<br>

							<p class="p-t-20">
								Jam : {{$ukm->jam}}
							</p>

							<br>

							<p class="p-t-20">
								Tempat : {{$ukm->tempat}}
							</p>

							<br>

							<p class="p-t-20">
								Profil : {{$ukm->profil}}
							</p>

							<br>

							<p class="p-t-20">
								Ketua : {{$ukm->ketua}}
							</p>

							<br>

							<p class="p-t-20">
								NPM : {{$ukm->npm}}
							</p>

							<br>

							<p class="p-t-20">
								Pembina : {{$ukm->pembina}}
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