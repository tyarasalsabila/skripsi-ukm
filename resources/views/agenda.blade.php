@extends ('app')

@section ('title','Agenda')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/ukm/ukm-cover.jpg);">
	<h2 class="tit7-ukm">
    AGENDA
  </h2>
</section>

<section>
	<div class="container p-b-80 p-t-80">
      <div class="row">
        @foreach ($agendas as $agenda)
        <div class="col-md-4 p-t-30">             
          <div class="blo1">
            <div class="wrap-pic-blo1 bo-rad-4 hov-img-zoom pos-relative">
              <a href="/agenda/{{$agenda->id}}"><img src="images/agenda/agendafull.png" alt="IMG-INTRO"></a>
              <div class="time-blog">
                  {{ \Carbon\Carbon::parse($agenda->created_at)->format('d M Y')}}
              </div>
            </div>

            <div class="wrap-text-blo1 p-t-35">
              <a href="/agenda/{{$agenda->id}}" style="text-decoration:none">
                <h4 class="txt5 color0-hov m-b-13">
                  {{$agenda->judul}}
                </h4>
              </a>

              <p class="m-b-20">
                {{$agenda->isi}}
              </p>

              <a href="/agenda/{{$agenda->id}}" class="txt4" style="text-decoration:none">
                Selengkapnya
	              <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
</section>

@endsection  
</html>