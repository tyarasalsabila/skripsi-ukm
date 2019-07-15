@extends ('app')

@section ('title','Galeri')

@section ('content')

<!-- Galeri -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/ukm/ukm-cover.jpg);">
    <h2 class="tit7-ukm">
        GALERI
    </h2>
</section>

        
<div class="container">
  <div class="row">
  @foreach($ukms as $ukm)
    <div class="col-md-3">
      <div class="card border-secondary mb-3" style="max-width: 18rem; height:170px;">
          <div class="card-body text-secondary">
            <a href="/galeri/{{$ukm->id}}" style="text-decoration:none; color: #000"><h5 class="card-title">{{$ukm->nama}}</h5></a>
          </div>
      </div>    
    </div>
    @endforeach

  </div>
</div>


<!-- Galeri -->
<!-- <div class="outer-container">
    <div class="container portfolio-page">
        <div class="row">
            <div class="kotakcol-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri1.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri2.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri3.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri1.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri2.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri3.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri1.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri2.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri3.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri1.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri2.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="portfolio-content">
                    <figure>
                        <img src="img/galeri/fotogaleri3.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center">
                        <h3><a href="#">Flower Skin</a></h3>

                        <ul class="flex flex-wrap justify-content-center">
                            <li><a href="#">Portfolio,</a></li>
                            <li><a href="#">Tree</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> -->

@endsection  
</html>
