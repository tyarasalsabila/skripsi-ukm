@extends ('app')

@section ('title','Agenda Isi')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/ukm/ukm-cover.jpg);">
	<h2 class="tit7-ukm">
    AGENDA
  </h2>
</section>


<div class="bread-crumb bo5-b p-t-17 p-b-17">
	<div class="container">
		<a href="/agenda" class="txt27" style="text-decoration:none">
			Agenda
		</a>

		<span class="txt29 m-l-10 m-r-10">/</span>

		<a class="txt29" style="text-decoration:none">
			{{$agenda->judul}}
		</a>
	</div>
</div>


<div class="container">
	<div class="row ">
		<div class="col-md-8 col-lg-9">
			<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
				<div class="blo4 p-b-63">
					<div class="text-blo4 p-t-33">
						<h4 class="p-b-16">
							<a href="/agenda/{{$agenda->id}}" class="tit9" style="text-decoration:none"> {{$agenda->judul}} </a>
						</h4>

						<div class="txt32 flex-w p-b-24">
							<span>
								@if ($agenda->ukm != null)
								by {{$agenda->ukm->nama}}
								@else
								by BEM
								@endif
								
								<span class="m-r-6 m-l-4">|</span>
							</span>

							<span>
									{{ \Carbon\Carbon::parse($agenda->created_at)->format('d M Y')}}
								<span class="m-r-6 m-l-4">|</span>
							</span>

							<span>
								{{$agenda->judul}}
							</span>
						</div>
					</div>

					<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
						<a>
							<img src="{{url('').'/storage/'.$agenda->foto}}" alt="IMG-BLOG">
						</a>
					</div>

					<p class="p-t-20">
						<b> Link Pendaftaran : </b> {{$agenda->link}}
					</p>

					<p>
						<b> Tanggal : </b> {{$agenda->tanggal}}
					</p>

					<p>
						<b> Jam : </b> {{$agenda->waktu}}
					</p>

					<p>
						<b> Tempat : </b> {{$agenda->tempat}}
					</p>

					<p class="p-t-20">
          				{{$agenda->isi}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection  
</html>
