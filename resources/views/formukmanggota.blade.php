@extends ('adminukm')

@section ('title','Edit Anggota')

@section ('content')


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Anggota</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-body">
							<form action="/dashukmanggotaupd/{{$anggota->id}}" method="POST">
								@csrf
								<div class="form-group" style="padding-top:20px">
									<label> Nama </label>
									<input type="text" name="nama" class="form-control" value="{{$anggota->nama}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> NPM </label>
									<input type="text" name="npm" class="form-control" value="{{$anggota->npm}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> Email </label>
									<input type="email" name="email" class="form-control" value="{{$anggota->email}}" required>
								</div>

								<br>

								<div class="form-group">
									<label> No. HP </label>
									<input type="text" name="nohp" class="form-control" value="{{$anggota->hp}}" required>
								</div>

								<div class="form-group">
									<label> Fakultas </label>
									<!-- <input type="text" name="fakultas" class="form-control" value="{{$anggota->fakultas}}"> -->
									<select class="form-control" id="fakultas" name="fakultas" onchange="populate(this.id, 'jurusan')" required>
										<option  selected="selected"> {{$anggota->fakultas}} </option>
										<option value="FEB">Ekonomi & Bisnis</option>
										<option value="FF">Farmasi</option>
										<option value="FH">Hukum</option>
										<option value="FIB">Ilmu Budaya</option>
										<option value="FIKOM">Ilmu Komunikasi</option>
										<option value="FISIP">Ilmu Sosial & Ilmu Politik</option>
										<option value="FK">Kedokteran</option>
										<option value="FKG">Kedokteran Gigi</option>
										<option value="FKep">Keperawatan</option>
										<option value="FMIPA">Matematika & IPA</option>
										<option value="FPIK">Perikanan & Ilmu Kelautan</option>
										<option value="FAPERTA">Pertanian</option>
										<option value="FAPET">Peternakan</option>
										<option value="FAPSI">Psikologi</option>
										<option value="FTG">Teknik Geologi</option>
										<option value="FTIP">Teknologi Industri Pertanian</option>
									</select>
								</div>

								<div class="form-group">
									<label> Jurusan </label>
									<!-- <input type="text" name="jurusan" class="form-control" value="{{$anggota->jurusan}}"> -->
									<select class="form-control" id="jurusan" name="jurusan" required>
										<option  selected="selected"> {{$anggota->jurusan}} </option>
									</select>
								</div>

								<div class="form-group">
									<label> Angkatan </label>
									<input type="text" name="angkatan" class="form-control" value="{{$anggota->angkatan}}" required>
								</div>

								<br>
							</div>
							<div class="modal-footer">
								<a href="/dashboardukmanggota" type="button" class="btn btn-default">Kembali</a>
								<button type="submit" class="btn btn-primary">Update Data</button>
							</div>
						</form>
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>


<script>
	function populate(a1,a2){
		var a1 = document.getElementById(a1);
		var a2 = document.getElementById(a2);
		a2.innerHTML = "";
	
		if(a1.value == "FEB"){
			var optionArray = ["|","D4 Akuntansi Perpajakan|D4 Akuntansi Perpajakan","Akuntansi|Akuntansi","Ekonomi Pembangunan|Ekonomi Pembangunan", "Manajemen|Manajemen", "Ekonomi Islam|Ekonomi Islam", "Bisnis Digital|Bisnis Digital"];
		}
		else if(a1.value == "FF"){
			var optionArray = ["|","Farmasi|Farmasi"];
		} else if(a1.value == "FH"){
			var optionArray = ["|","Ilmu Hukum|Ilmu Hukum"];
		} else if(a1.value == "FIB"){
			var optionArray = ["|","D4 Bahasa dan Budaya Tiongkok|D4 Bahasa dan Budaya Tiongkok", "Sastra Indonesia|Sastra Indonesia", "Sastra Sunda|Sastra Sunda", "Ilmu Sejarah|Ilmu Sejarah", "Bahasa dan Budaya Jepang|Bahasa dan Budaya Jepang", "Sastra Inggris|Sastra Inggris", "Sastra Perancis|Sastra Perancis", "Sastra Jerman|Sastra Jerman", "Sastra Arab|Sastra Arab", "Sastra Rusia|Sastra Rusia"];
		} else if(a1.value == "FIKOM"){
			var optionArray = ["|", "D3 Hubungan Masyarakat|D3 Hubungan Masyarakat", "D4 Manajemen Produksi Media|D4 Manajemen Produksi Media", "Ilmu Komunikasi|Ilmu Komunikasi", "Ilmu Perpustakaan|Ilmu Perpustakaan", "Jurnalistik|Jurnalistik", "Manajemen Komunikasi|Manajemen Komunikasi", "Televisi dan Film|Televisi dan Film"];
		} else if(a1.value == "FISIP"){
			var optionArray = ["|","D3 Administrasi|D3 Administrasi", "D3 Administrasi Pemerintahan|D3 Administrasi Pemerintahan", "D4 Administrasi Pemerintahan|D4 Administrasi Pemerintahan", "D4 Administrasi Publik|D4 Administrasi Publik", "Administrasi Publik|Administrasi Publik", "Ilmu Hubungan Internasional|Ilmu Hubungan Internasional", "Ilmu Kesejahteraan Sosial|Ilmu Kesejahteraan Sosial", "Ilmu Pemerintahan|Ilmu Pemerintahan", "Ilmu Administrasi Bisnis|Ilmu Administrasi Bisnis", "Sosiologi|Sosiologi", "Antropologi|Antropologi", "Ilmu Politik|Ilmu Politik"];
		} else if(a1.value == "FK"){
			var optionArray = ["|","D4 Kebidanan|D4 Kebidanan", "Kedokteran|Kedokteran", "Kedokteran Hewan|Kedokteran Hewan"];
		} else if(a1.value == "FKG"){
			var optionArray = ["|","Kedokteran Gigi|Kedokteran Gigi"];
		} else if(a1.value == "FKep"){
			var optionArray = ["|","Keperawatan|Keperawatan"];
		} else if(a1.value == "FMIPA"){
			var optionArray = ["|","Matematika|Matematika", "Kimia|Kimia", "Fisika|Fisika", "Biologi|Biologi", "Geofisika|Geofisika", "Teknik Informatika|Teknik Informatika", "Teknik Elektro|Teknik Elektro"];
		} else if(a1.value == "FPIK"){
			var optionArray = ["|","Perikanan|Perikanan", "Ilmu Kelautan|Ilmu Kelautan"];
		} else if(a1.value == "FAPERTA"){
			var optionArray = ["|","Agroteknologi|Agroteknologi", "Agribisnis|Agribisnis"];
		} else if(a1.value == "FAPET"){
			var optionArray = ["|","Peternakan|Peternakan"];
		} else if(a1.value == "FAPSI"){
			var optionArray = ["|","Psikologi|Psikologi"];
		} else if(a1.value == "FTG"){
			var optionArray = ["|","Teknik Geologi|Teknik Geologi"];
		} else if(a1.value == "FTIP"){
			var optionArray = ["|","Teknik Pertanian|Teknik Pertanian", "Teknologi Pangan|Teknologi Pangan", "Teknologi Industri Pertanian|Teknologi Industri Pertanian"];
		}

		for(var option in optionArray){
			var pair = optionArray[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			a2.options.add(newOption);
		}
	}
</script>

@endsection  
</html>