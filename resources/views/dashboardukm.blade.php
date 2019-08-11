@extends ('adminukm')

@section ('title','Dashboard UKM')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Dashboard</h3>
					<p class="panel-subtitle">{{$ukm->nama_ukm}} - {{$ukm->namapendek}}</p>
				</div>
				<div class="panel-body">
					<div class="row">
                        <div class="col-md-3">
							<div class="metric">
                                <p style="text-align:center">
									<span class="number">{{$count}}</span>
									<span class="title">Jumlah Anggota</span>
                                </p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<p style="text-align:center">
									<span class="number">{{$count2}}</span>
									<span class="title">Jumlah Pendaftar</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-headline">
						<div class="panel-heading">
							@if (session('status'))
								<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-check-circle"></i> {{ session('status') }}
								</div>
							@endif
							<h3 class="panel-title">Profil</h3>
							<br>
							<p>{{Str::limit($ukm->profil,200)}}</p>
							<br> 
							<a href="/editprofil/{{$ukm->id}}" type="button" class="btn btn-warning" required>
								Edit
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="panel panel-headline">
						<div class="panel-heading">
							@if (session('status'))
								<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-check-circle"></i> {{ session('status') }}
								</div>
							@endif
							<h3 class="panel-title">Pengurus</h3>
							<br>
							<p>Ketua : {{$ukm->ketua}} </p>
							<p>NPM : {{$ukm->npm}}</p>
							<p> Pembina :  {{$ukm->pembina}} </p>
							<br>
							<a href="/editpengurus/{{$ukm->id}}" type="button" class="btn btn-warning" required>
								Edit
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection 
</html>
