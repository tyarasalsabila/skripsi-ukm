@extends ('app')

@section ('title','Daftar UKM')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/ukm/ukm-cover.jpg);">
	<h2 class="tit7-ukm">
    DAFTAR UKM
  </h2>
</section>

<!-- Reservation -->
<!-- <section class="bg1-pattern p-t-100 p-b-113">
	<div class="container">
		<form action="" class="main-form needs-validation">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control">
				<div class="invalid-feedback"> Ok! </div>
			</div>

			<div class="form-group">
				<label for="npm">NPM</label>
				<input type="text" name="npm" id="npm" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>

			<button type="submit"> Submit </button>
		</form>
	</div>
</section> -->

<!-- <section class="bg1-pattern p-t-100 p-b-113">
	<div class="container">
		<div class="row">
			<div class="card-body">
				<form>
					<div class="form-group">
    				<label>Nama</label>
						<input class="form-control" id="nama" placeholder="Nama" type="text" required>
					</div>

					<div class="form-group">
    				<label>NPM</label>
						<input class="form-control" id="npm" placeholder="NPM" type="text" required>
					</div>

					<div class="form-group">
    				<label>Email</label>
						<input class="form-control" id="email" placeholder="Email" type="text" required>
					</div>

					<div class="form-group">
    				<label>No. HP</label>
						<input class="form-control" id="nohp" placeholder="No. HP" type="text" required>
					</div>
					
					<div class="form-group">
    				<label>Fakultas</label>
						<input class="form-control" id="fakultas" placeholder="Fakultas" type="text" required>
					</div>

					<div class="form-group">
    				<label>Jurusan</label>
						<input class="form-control" id="jurusan" placeholder="Jurusan" type="text" required>
					</div>

					<div class="form-group">
    				<label>Angkatan</label>
						<input class="form-control" id="angkatan" placeholder="Angkatan" type="text" required>
					</div>

					<div class="form-group">
    				<label>Pilih UKM</label>
						<input class="form-control" id="pilih ukm" placeholder="Angkatan" type="text" required>
					</div>
				</form>
			</div>
		</div>
	</div>	
</section> -->

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
				var optionArray = ["|","D4AP|D4 Akuntansi Perpajakan","A|Akuntansi","EP|Ekonomi Pembangunan", "M|Manajemen", "EI|Ekonomi Islam", "BD|Bisnis Digital"];
			}
			else if(a1.value == "FF"){
				var optionArray = ["|","F|Farmasi"];
			} else if(a1.value == "FH"){
				var optionArray = ["|","IH|Ilmu Hukum"];
			} else if(a1.value == "FIB"){
				var optionArray = ["|","D4BBT|D4 Bahasa dan Budaya Tiongkok", "SI|Sastra Indonesia", "SS|Sastra Sunda", "IS|Ilmu Sejarah", "BBJ|Bahasa dan Budaya Jepang", "SIng|Sastra Inggris", "SP|Sastra Perancis", "SJ|Sastra Jerman", "SA|Sastra Arab", "SR|Sastra Rusia"];
			} else if(a1.value == "FIKOM"){
				var optionArray = ["|", "D3HM|D3 Hubungan Masyarakat", "D4MPM|D4 Manajemen Produksi Media", "IK|Ilmu Komunikasi", "IP|Ilmu Perpustakaan", "J|Jurnalistik", "MK|Manajemen Komunikasi", "TF|Televisi dan Film"];
			} else if(a1.value == "FISIP"){
				var optionArray = ["|","D3A|D3 Administrasi", "D3AP|D3 Administrasi Pemerintahan", "D4AP|D4 Administrasi Pemerintahan", "D4APu|D4 Administrasi Publik", "AP|Administrasi Publik", "IHI|Ilmu Hubungan Internasional", "IKS|Ilmu Kesejahteraan Sosial", "IP|Ilmu Pemerintahan", "IAB| Ilmu Administrasi Bisnis", "S|Sosiologi", "A|Antropologi", "Ilpo|Ilmu Politik"];
			} else if(a1.value == "FK"){
				var optionArray = ["|","D4K|D4 Kebidanan", "K|Kedokteran", "KH|Kedokteran Hewan"];
			} else if(a1.value == "FKep"){
				var optionArray = ["|","Kep|Keperawatan"];
			} else if(a1.value == "FMIPA"){
				var optionArray = ["|","M|Matematika", "K|Kimia", "F|Fisika", "B|Biologi", "G|Geofisika", "TI|Teknik Informatika", "TE|Teknik Elektro"];
			} else if(a1.value == "FPIK"){
				var optionArray = ["|","P|Perikanan", "IK|Ilmu Kelautan"];
			} else if(a1.value == "FAPERTA"){
				var optionArray = ["|","Agro|Agroteknologi", "Agri|Agribisnis"];
			} else if(a1.value == "FAPET"){
				var optionArray = ["|","P|Peternakan"];
			} else if(a1.value == "FAPSI"){
				var optionArray = ["|","P|Psikologi"];
			} else if(a1.value == "FTG"){
				var optionArray = ["|","TG|Teknik Geologi"];
			} else if(a1.value == "FTIP"){
				var optionArray = ["|","TP|Teknik Pertanian", "TekP|Teknologi Pangan", "TIP|Teknologi Industri Pertanian"];
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
