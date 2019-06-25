@extends ('app')

@section ('title','Masuk')

@section ('content')


<!-- Header -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/ukm/ukm-cover.jpg);">
	<h2 class="tit7-ukm">
  </h2>
</section>

<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">	
					<form class="wrap-form-booking">
						<div class="row">
							<span class="txt9 p-t-30">
								Email
							</span>
							<div class="size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
							</div>

							<span class="txt9">
								Password
							</span>
							<div class="size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="password" placeholder="Password">
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6 p-t-30">
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Masuk
							</button>
						</div>
					</form>
				</div>

				
			</div>
		</div>
	</section>

@endsection  
</html>