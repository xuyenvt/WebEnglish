@extends('user.master')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('public/user/images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Truyện</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Truyện <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
		
<section class="ftco-section">
	<div class="container">
		<div class="row">
			@foreach($CateStory as $item)
			<div class="col-md-6 course d-lg-flex ftco-animate">
				<div class="img">
					<img src="{!! asset('resources/upload/imagestory/'.$item->image) !!}" style="width: 250px; height: 210px">
				</div>
				<div class="text bg-light p-4">
					<h3><a href="#">{!! $item->catesto_title!!}</a></h3>
      				<p class="subheading"><span>--------************--------</span></p>
      				<p>{!! $item->desc!!}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection