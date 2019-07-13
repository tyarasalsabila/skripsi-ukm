@extends ('app')

@section ('title','Beranda')

@section ('content')


<!-- Slide1 -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/benerin/fotoberanda.png);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<h2 class="caption2-slide1 tit12 t-center visible-false m-b-15">
						UNIT KEGIATAN MAHASISWA
    		        </h2>
            		<h2 class="caption2-slide1 tit13 t-center visible-false m-b-15">
						Universitas Padjadjaran
					</h2>
				</div>
			</div>
		</div>
	<div class="wrap-slick1-dots"></div>
	</div>
</section>


<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-70 p-b-70">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-30 p-b-30">
					<div class="wrap-text-welcome t-center">
						<h3 class="tit3-tentang t-center m-b-35 m-t-5">
							UKM UNPAD
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
						Unit Kegiatan Mahasiswa (UKM) UNPAD merupakan organisasi kemahasiswaan
            di tingkat Universitas yang berfungsi menampung berbagai minat
            dan bakat dari para mahasiswa Universitas Padjadjaran. 
						</p>

						<a href="/tentang" class="txt4" style="text-decoration:none">
							Selengkapnya
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/tentang/tentang1.png" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-9 p-b-80">
        <h2 class="txttitleagenda p-b-35 p-t-80">
          Berita Terbaru
        </h2>
        <div class="row">
			@foreach ($berita as $brt)
          <div class="col-md-4 p-t-30">             
            <div class="blo1">
              <div class="wrap-pic-blo1 bo-rad-4 hov-img-zoom pos-relative">
			   <a href="/berita/{{$brt->id}}"><img src="{{url('').'/storage/'.$brt->foto}}" alt="IMG-INTRO"></a>
                <div class="time-blog">
     	            {{ \Carbon\Carbon::parse($brt->created_at)->format('d M Y')}}
                </div>
              </div>

              <div class="wrap-text-blo1 p-t-35">
			  <a href="/berita/{{$brt->id}}" style="text-decoration:none"><h4 class="txt5 color0-hov m-b-13">
                  {{$brt->judul}} 
                </h4></a>

                <p class="m-b-20">
					{{Str::limit($brt->isi,100)}}
                </p>

			<a href="/berita/{{$brt->id}}" class="txt4" style="text-decoration:none">
                  Selengkapnya
  	              <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                </a>
              </div>
            </div>
		  </div>
		  @endforeach
		</div>

					<div class="flex-c-m m-t-6 p-t-60">
						<a href="/berita" class="btn3 flex-c-m size13 txt11" style="text-decoration:none">
							BERITA LAINNYA
						</a>
					</div>
				</div>
				
				<div class="col-md-3 col-lg-3">
          <h2 class="txtsidebar p-t-30 p-b-27 p-t-80">
            Agenda Terbaru
					</h2>
					
					<div class="sidebar2 p-b-80 p-l-0-md p-t-0-md">
						<div class="popular">
							<ul>
								@foreach ($agenda as $agd)
									
								
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-4 wrap-pic-w of-hidden m-r-18">
										<a href="{{url('').'/storage/'.$agd->foto}}" data-lightbox="gallery-footer">
											<img src="{{url('').'/storage/'.$agd->foto}}" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="/agenda/{{$agd->id}}" class="dis-block txt28 m-b-8" style="text-decoration:none">
											{{$agd->judul}}
										</a>

										<span class="txt14">
											{{ \Carbon\Carbon::parse($agd->tanggal)->format('d M Y')}}
										</span>
									</div>

									<div class="modal fade" id="EventModal1" tabindex="-1" role="dialog" aria-labelledby="EventModal1" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="EventModal1">{{$agd->judul}}</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h6> Tanggal </h6>
													<p> {{ \Carbon\Carbon::parse($agd->tanggal)->format('d M Y')}}</p>
													<hr>
													<h6> Waktu </h6>
													<p> {{ \Carbon\Carbon::parse($agd->tanggal)->format('l')}}, {{ \Carbon\Carbon::parse($agd->waktu)->format('h:m')}}  </p>

													<hr>

													<h6> Tempat </h6>
													<p> {{$agd->tempat}} </p>

													<hr>

													<h6> UKM Penyelenggara </h6>
													@if ($agd->ukm != NULL)
														<p> {{$agd->ukm->nama}} </p>
													@else
														<p> - </p>
													@endif
													
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
								{{-- <li class="flex-w m-b-25">
									<div class="size16 bo-rad-4 wrap-pic-w of-hidden m-r-18">
										<a href="images/agenda/agendafull1.png" data-lightbox="gallery-footer">
											<img src="images/agenda/agenda1.png" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="/" data-toggle="modal" data-target="#EventModal2" class="dis-block txt28 m-b-8" style="text-decoration:none">
											Choralescence
										</a>

										<span class="txt14">
											13 Mei 2019
										</span>
									</div>

									<div class="modal fade" id="EventModal2" tabindex="-1" role="dialog" aria-labelledby="EventModal2" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="EventModal2">Choralescence</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h6> Tanggal </h6>
													<p> 13 Mei 2019 </p>

													<hr>
													<h6> Waktu </h6>
													<p> Senin, 12:30 - Selesai </p>

													<hr>

													<h6> Tempat </h6>
													<p> Bale Santika </p>

													<hr>

													<h6> UKM Penyelenggara </h6>
													<p> Padjadjaran Ensemble Club (PEC) </p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-4 wrap-pic-w of-hidden m-r-18">
										<a href="images/agenda/agendafull2.png" data-lightbox="gallery-footer">	
											<img src="images/agenda/agenda2.png" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="/" data-toggle="modal" data-target="#EventModal3" class="dis-block txt28 m-b-8" style="text-decoration:none">
											The Past, The Love, The Memories
										</a>

										<span class="txt14">
											23 Mei 2019
										</span>
									</div>

									<div class="modal fade" id="EventModal3" tabindex="-1" role="dialog" aria-labelledby="EventModal3" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="EventModal3">The Past, The Love, The Memories</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h6> Tanggal </h6>
													<p> 23 Mei 2019 </p>

													<hr>
													<h6> Waktu </h6>
													<p> Kamis, 12:30 - Selesai </p>

													<hr>

													<h6> Tempat </h6>
													<p> Bale Santika </p>

													<hr>

													<h6> UKM Penyelenggara </h6>
													<p> Gelanggang Seni  Sastra, Teater dan Film (GSSTF) </p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
									</div>
								</li> --}}

								<a href="/agenda" class="txt4" style="text-decoration:none">
										Selengkapnya
                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                  </a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 


<!-- Daftar UKM -->
<section class="bg1-pattern p-t-100 t-center p-l-15 p-r-15">
	<h3 class="txt5-daftar-ukm t-center m-b-35 m-t-5">
		GABUNG UKM UNPAD DISINI
	</h3>

	<div class="flex-c-m m-t-6  p-b-100">
		<a href="/registrasi" class="btn3 flex-c-m size13 txt11" style="text-decoration:none">
			DAFTAR UKM
		</a>
	</div>
</section>

@endsection  
</html>
