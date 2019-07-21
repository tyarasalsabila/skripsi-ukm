@extends ('app')

@section ('title','Daftar UKM')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/unpad/headermini1.png') }});">
	<h2 class="tit7-ukm">
    DAFTAR UKM
  </h2>
</section>

<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
		@if($message!=NULL)
			<div class="alert alert-success">
			{{$message}}
			@endif
			</div>
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<form method="POST" action="{{route('daftar')}}" class="size22 m-l-r-auto" >
						@csrf
						<span class="txt9">
							Nama
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<input id="nama" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nama" placeholder="Nama" required>
						</div>


						<span class="txt9">
							NPM
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<input id="npm" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="npm" placeholder="NPM" required>
						</div>

							
						<span class="txt9">
							Email
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<input id="email"class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email" required>
						</div>


						<span class="txt9">
							No. HP
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<input id="no-hp" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nohp" placeholder="No. HP" required>
						</div>
		

						<span class="txt9">
							Fakultas
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
						<select id="fakultas" class="selection-1 bo-rad-10 sizefull txt10 p-l-20" name="fakultas" onchange="populate(this.id, 'jurusan')" required>
								<option disabled="disabled" selected="selected">Fakultas</option>
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


						<span class="txt9">
							Jurusan
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<select id="jurusan" class="selection-1" name="jurusan" required>
								<option disabled="disabled" selected="selected">Jurusan</option>
							</select>
						</div>


						<span class="txt9">
							Angkatan
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<input id="angkatan" class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="angkatan" placeholder="Angkatan" required>
						</div>

						
						<span class="txt9">
							Pilih UKM
						</span>
						<div class="size12 bo-rad-10 m-t-3 m-b-23">
							<select id="pilih-ukm" class="selection-1 bo-rad-10 sizefull txt10 p-l-20" name="pilihukm" required>
								<option disabled="disabled" selected="selected">Pilih UKM</option>
								@foreach($ukms as $ukm)

								<option value="{{$ukm->id}}">{{$ukm->nama}}</option>
								@endforeach
								
							</select>
						</div>


						<div class="wrap-btn-booking flex-c-m m-t-6 p-t-30">
							<input value="Daftar" type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
							<!-- </button> -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

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

	<script>
		var form = document.querySelector('.needs-validation');
		form.addEventListener('submit', funciton(event){
			if (form.checkValidity() === false){
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
		})
	</script>

<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> -->

<script>
	bootstrapValidate('#nama', 'min:5:Enter the name')
</script>

@endsection  
</html>
