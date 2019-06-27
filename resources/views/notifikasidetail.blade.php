@extends ('admin')

@section ('title','Dashboard')

@section ('content')


<div class="main">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb" style="background-color:whitesmoke">
			<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Notifikasi</li>
		</ol>
	</nav>
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Notifikasi Detail</h3>
				</div>
				<div class="panel-body">
					<p>Kategori</p>
					<select class="form-control">
						<option selected="selected" disabled="disabled" value="kategori">Kategori</option>
						<option value="berita">Berita</option>
						<option value="agenda">Agenda</option>
					</select>

					<br>

					<p>UKM</p>
					<input type="text" class="form-control" placeholder="PSM">
					
					<br>

					<p>Judul</p>
					<input type="text" class="form-control" placeholder="ABC">
					
					<br>

					<p>Action</p>
					<select class="form-control">
						<option value="cheese">Cheese</option>
						<option value="tomatoes">Tomatoes</option>
						<option value="mozarella">Mozzarella</option>
						<option value="mushrooms">Mushrooms</option>
						<option value="pepperoni">Pepperoni</option>
						<option value="onions">Onions</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection  
</html>

