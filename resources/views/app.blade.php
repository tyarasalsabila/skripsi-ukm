<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title> @yield('title') </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T')}}" crossorigin="anonymous">

    <!-- Font -->
    <link href="{{ asset ('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset ('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('fonts/themify/themify-icons.css')}}">
    
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="{{ asset ('css/style.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/util.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{ asset ('css/main.css')}}">

    <!-- Vendor -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/animsition/css/animsition.min.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/lightbox2/css/lightbox.min.css')}}">

    <!-- Admin Klorofil
    <link rel="stylesheet" href="{{ asset ('assets/vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/vendor/chartist/css/chartist-custom.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/main1.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/demo.css')}}">
    <link href="{{ asset ('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700')}}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('assets/img/apple-icon.png')}}">
	  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset ('assets/img/favicon.png')}}"> -->
    
  </head>

  <body>
    <!-- Header -->
    <header>
      <!-- Header desktop -->
      <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
          <div class="wrap_header trans-0-3">
            <!-- Logo -->
            <div class="logo">
              <a href="/">
                <img src="{{ asset('images/logo/logo4.png') }}" alt="IMG-LOGO" data-logofixed="images/logo/logo.png">
              </a>
            </div>

            <!-- Menu -->
            <div class="wrap_menu p-l-45 p-l-0-xl">
              <nav class="menu">
                <ul class="main_menu" style="margin-bottom:0px">
                  <li>
                    <a href="/">Beranda</a>
                  </li>
                  <li>
                    <a href="/ukm">UKM</a>
                  </li>
                  <li>
                    <a href="/galeri">Galeri</a>
                  </li>
                  <li>
                    <a href="/berita">Berita</a>
                  </li>
                  <li>
                    <a href="/agenda">Agenda</a>
                  </li>
                  <li>
                    <a href="/tentang">Tentang</a>
                  </li>
                  <li>
                    <a href="/registrasi">Daftar UKM</a>
                  </li>
                </ul>
              </nav>
            </div>
            

            <!-- Social -->
            <div class="social flex-w flex-l-m p-r-20">
              <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar trans-0-4">
      <!-- Button Hide sidebar -->
      <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

      <!-- - -->
      <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
          <a href="/" class="txt19">Beranda</a>
        </li>
        <li class="t-center m-b-13">
          <a href="/ukm" class="txt19">UKM</a>
        </li>
        <li class="t-center m-b-13">
          <a href="/galeri" class="txt19">Galeri</a>
        </li>
        <li class="t-center m-b-13">
          <a href="/berita" class="txt19">Berita</a>
        </li>
        <li class="t-center m-b-13">
          <a href="/agenda" class="txt19">Agenda</a>
        </li>
        <li class="t-center m-b-13">
          <a href="/tentang" class="txt19">Tentang</a>
        </li>
        <li class="t-center m-b-13">
          <a href="/daftarukm" class="txt19">Daftar UKM</a>
        </li>
      </ul>
    </aside>


  
  @yield('content')

  <!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-20">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Kontak Kami
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Jl. Raya Bandung Sumedang KM.21, <br>Hegarmanah, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							08123456789
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							ukm.unpad@unpad.ac.id
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						MEDIA SOSIAL
          </h4>
          
          <ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							@ukmunpad
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-facebook fs-16 dis-inline-block size19" aria-hidden="true"></i>
							UKM UNPAD
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Made By
          </h4>
          <p class="txt14 m-b-18">
            Tyara Salsabila <br>
            Teknik Informatika, 2015
					</p>

				</div>
			</div>
		</div>
  </footer>
  
  <!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  

</body>
