@extends('layouts.frontend')

@section('body-content')


	<!-- HOME -->
	<section id="home" class="padbot0" style="margin-top: 10px;">

		<!-- TOP FIRST SLIDER -->
		<div class="flexslider top_slider sale_page" style="margin-bottom: 10px;">
			<ul class="slides">
				@foreach($slideBanners as $slider)
				<li class="slide1">
					<div class="container" >
						<a href="{{ $slider->product_id ? 'product-detail/'. $slider->product_id:$slider->url }}">
							<div style="background-image: url('{{ asset('storage/banner/'. $slider->image_path) }}'); background-size: cover; height: 100%;">
								<div class="sale_caption1" >
									@if(!empty($slider->caption))
										<p class="title1 captionDelay2 FromTop" style="background-color: rgba(255, 255, 255, 0.5);">{{ $slider->caption }}</p>
									@endif
								</div>
							</div>
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		<!-- //TOP FIRST SLIDER -->
		<!-- TOP SECOND SLIDER -->
		<div class="flexslider top_slider sale_page">
			<ul class="slides">
				@foreach($slideBanners as $slider)
					<li class="slide1">
						<div class="container" >
							<a href="{{ $slider->product_id ? 'product-detail/'. $slider->product_id:$slider->url }}">
								<div style="background-image: url('{{ asset('storage/banner/'. $slider->image_path) }}'); background-size: cover; height: 100%;">
									<div class="sale_caption1" >
										@if(!empty($slider->caption))
											<p class="title1 captionDelay2 FromTop" style="background-color: rgba(255, 255, 255, 0.5);">{{ $slider->caption }}</p>
										@endif
									</div>
								</div>
							</a>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
		<!-- //TOP SECOND SLIDER -->
	</section><!-- //HOME -->


	<!-- TOVAR SECTION -->
	<section class="tovar_section margbot10">

		<!-- CONTAINER -->
		<div class="container">
			{{--<h2>Featured products</h2>--}}

			<!-- ROW -->
			<div class="row margbot10">
				<div class="col-lg-3 col-md-3 col-sm-12" style="padding-right: 0;">
					<div class="category_img" style="background-image: url('{{ asset('frontend_images/example/pewarna.jpg') }}')">
						<div class="category_img_title">
							<span>Pewarna</span>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0;">
					<div class="category_wrapper">
						<div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
							@for($i =0; $i< 4; $i++)
								<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12">
									<div class="category_product_wrapper">
										<div class="tovar_item">
											<div class="tovar_img">
												<div class="tovar_img_wrapper">
													<img class="img" src="{{ asset('frontend_images/example/pewarna.jpg') }}" alt="" />
													<img class="img_h" src="{{ asset('frontend_images/example/pewarna.jpg') }}" alt="" />
												</div>
												<div class="tovar_item_btns">
													<a class="add_bag" href="#" onclick="addToCart('{{ $featuredProducts[$i]->id }}'); return false;"><i class="fa fa-shopping-cart"></i></a>
													{{--<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>--}}
												</div>
											</div>
											{{--<div class="tovar_description clearfix">--}}
											{{--<a class="tovar_title" href="{{ route('product-detail', ['id' => $featuredProducts[$i]->id]) }}" >{{ $featuredProducts[$i]->name }}</a>--}}
											{{--<span class="tovar_price">{{ $featuredProducts[$i]->price }}</span>--}}
											{{--</div>--}}
										</div>
									</div>
								</div>
							@endfor
						</div>
					</div>
				</div>
			</div>
			<div class="row margbot10">
				<div class="col-lg-3 col-md-3 col-sm-12" style="padding-right: 0;">
					<div class="category_img" style="background-image: url('{{ asset('frontend_images/example/pewarna.jpg') }}')">
						<div class="category_img_title">
							<span>Tofieco Essence & Pasta</span>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0;">
					<div class="category_wrapper">
						<div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
							@for($i =0; $i< 4; $i++)
								<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12">
									<div class="category_product_wrapper">
										<div class="tovar_item">
											<div class="tovar_img">
												<div class="tovar_img_wrapper">
													<img class="img" src="{{ asset('frontend_images/example/pewarna.jpg') }}" alt="" />
													<img class="img_h" src="{{ asset('frontend_images/example/pewarna.jpg') }}" alt="" />
												</div>
												<div class="tovar_item_btns">
													<a class="add_bag" href="#" onclick="addToCart('{{ $featuredProducts[$i]->id }}'); return false;"><i class="fa fa-shopping-cart"></i></a>
													{{--<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>--}}
												</div>
											</div>
											{{--<div class="tovar_description clearfix">--}}
											{{--<a class="tovar_title" href="{{ route('product-detail', ['id' => $featuredProducts[$i]->id]) }}" >{{ $featuredProducts[$i]->name }}</a>--}}
											{{--<span class="tovar_price">{{ $featuredProducts[$i]->price }}</span>--}}
											{{--</div>--}}
										</div>
									</div>
								</div>
							@endfor
						</div>
					</div>
				</div>
			</div>
			<div class="row margbot10">
				<div class="col-lg-3 col-md-3 col-sm-12" style="padding-right: 0;">
					<div class="category_img" style="background-image: url('{{ asset('frontend_images/example/pewarna.jpg') }}')">
						<div class="category_img_title">
							<span>Rum, Pasta % Essence</span>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12" style="padding-left: 0;">
					<div class="category_wrapper">
						<div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
							@for($i =0; $i< 4; $i++)
								<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12">
									<div class="category_product_wrapper">
										<div class="tovar_item">
											<div class="tovar_img">
												<div class="tovar_img_wrapper">
													<img class="img" src="{{ asset('frontend_images/example/pewarna.jpg') }}" alt="" />
													<img class="img_h" src="{{ asset('frontend_images/example/pewarna.jpg') }}" alt="" />
												</div>
												<div class="tovar_item_btns">
													<a class="add_bag" href="#" onclick="addToCart('{{ $featuredProducts[$i]->id }}'); return false;"><i class="fa fa-shopping-cart"></i></a>
													{{--<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>--}}
												</div>
											</div>
											{{--<div class="tovar_description clearfix">--}}
											{{--<a class="tovar_title" href="{{ route('product-detail', ['id' => $featuredProducts[$i]->id]) }}" >{{ $featuredProducts[$i]->name }}</a>--}}
											{{--<span class="tovar_price">{{ $featuredProducts[$i]->price }}</span>--}}
											{{--</div>--}}
										</div>
									</div>
								</div>
							@endfor
						</div>
					</div>
				</div>
			</div>
			<!-- //ROW -->


			<!-- ROW -->
			<div class="row">


			</div>
				<!-- //ROW -->
		</div><!-- //CONTAINER -->
	</section><!-- //TOVAR SECTION -->


	<!-- NEW ARRIVALS -->
	<section class="new_arrivals padbot50">

		<!-- CONTAINER -->
		<div class="container">
			<h2>new arrivals</h2>

			<!-- JCAROUSEL -->
			<div class="jcarousel-wrapper">

				<!-- NAVIGATION -->
				<div class="jCarousel_pagination">
					<a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
					<a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
				</div><!-- //NAVIGATION -->

				<div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
					<ul>
						@foreach($recentProducts as $recProduct)
							<li>
								<!-- TOVAR -->
								<div class="tovar_item_new">
									<div class="tovar_img">
										<img src="{{ URL::asset('frontend_images/tovar/women/new/1.jpg') }}" alt="" />
									</div>
									<div class="tovar_description clearfix">
										<a class="tovar_title" href="{{ route('product-detail', ['id' => $recProduct->id]) }}" >{{$recProduct->name}}</a>
										@if(!empty($recProduct->discount) || !empty($recProduct->discount_flat))
											<span style="text-decoration: line-through;">Rp {{ $recProduct->price }}</span><br/>
											<p style="color:orange;"><b>Rp {{ $recProduct->price_discounted }}</b></p>
										@else
											<span class="tovar_price">Rp {{$recProduct->price}}</span>
										@endif
									</div>
								</div><!-- //TOVAR -->
							</li>
						@endforeach
					</ul>
				</div>
			</div><!-- //JCAROUSEL -->
		</div><!-- //CONTAINER -->
	</section><!-- //NEW ARRIVALS -->

	<section>
		<div class="container">
			<div class="list-group category_home_menu">
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-camera"></span> Pictures
				</a>
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-file"></span> Documents
				</a>
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-music"></span> Music
				</a>
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-film"></span> Videos
				</a>
			</div>
			<div class="list-group category_home_menu">
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-camera"></span> Pictures
				</a>
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-file"></span> Documents
				</a>
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-music"></span> Music
				</a>
				<a href="#" class="list-group-item">
					<span class="glyphicon glyphicon-film"></span> Videos
				</a>
			</div>
		</div>
	</section>


	<!-- BRANDS -->
	{{--<section class="brands_carousel">--}}

		{{--<!-- CONTAINER -->--}}
		{{--<div class="container">--}}

			{{--<!-- JCAROUSEL -->--}}
			{{--<div class="jcarousel-wrapper">--}}

				{{--<!-- NAVIGATION -->--}}
				{{--<div class="jCarousel_pagination">--}}
					{{--<a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>--}}
					{{--<a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>--}}
				{{--</div><!-- //NAVIGATION -->--}}

				{{--<div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>--}}
					{{--<ul>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/1.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/2.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/3.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/4.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/5.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/6.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/7.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/8.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/9.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/10.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/11.jpg') }}" alt="" /></a></li>--}}
						{{--<li><a href="javascript:void(0);" ><img src="{{ URL::asset('frontend_images/brands/12.jpg') }}" alt="" /></a></li>--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{--</div><!-- //JCAROUSEL -->--}}
		{{--</div><!-- //CONTAINER -->--}}
	{{--</section><!-- //BRANDS -->--}}

	<hr class="container">

	<script>
        var urlLink = '{{route('addCart')}}';
	</script>
	@include('frontend.partials._modal')
@endsection