<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home 02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('/')}}/public/resouces/admin/upload/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">



	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/resouces/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="{{url('/')}}/public/resouces/admin/upload/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="{{route('trang-chu')}}">Home</a>
						
					</li>

					<li>
						<a href="">Shop</a>
						<ul class="sub_menu">
									@foreach($cat as $value)
							<li><a href="{{route('san-pham',['id'=>$value->id])}}">{{$value->name}}</a></li>
							@endforeach
						</ul>
					</li>

					<li class="sale-noti">
						<a href="">Sale</a>
					</li>

					<li>
						<a href="{{route('gio-hang')}}">Cart</a>
					</li>

					<li>
						<a href="{{route('blog')}}">Blog</a>
					</li>

					<li>
						<a href="{{route('gioi-thieu')}}">About</a>
					</li>

					<li>
						<a href="{{route('lien-he')}}">Contact</a>
					</li>
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="{{url('/')}}/public/resouces/admin/upload/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="{{url('/')}}/public/resouces/admin/upload/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<a style="color: white" href="{{route('gio-hang')}}" class="header-icons-noti">{{count($cart)}}</a>

				<!-- Header cart noti -->
				
			</div>
		</div>
	</div>

	

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="index.html" class="logo2">
					<img src="{{url('/')}}/public/resouces/admin/upload/icons/logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					@if (Auth::check()) 
					<span class="topbar-email">
								{{Auth::user()->email}} 
					</span> |
					 <a href="{{route('logout')}}"> logout</a>
					@else
					<div class="topbar-language rs1-select2">
						<a href="{{route('login')}}">đăng nhập </a> |
						<a href="{{route('dang-ky')}}"> đăng ký</a>
					</div>
@endif
					<!--  -->
					<a href="#" class="header-wrapicon1 dis-block m-l-30">
						<img src="{{url('/')}}/public/resouces/admin/upload/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="{{url('/')}}/public/resouces/admin/upload/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<a style="color: white" href="{{route('gio-hang')}}" class="header-icons-noti">{{count($cart)}}</a>

						<!-- Header cart noti -->
						
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							
								
									<li><a href="{{route('trang-chu')}}">Homepage</a></li>
									
							

							<li>
								<a href="">Shop</a>
								<ul class="sub_menu">
									@foreach($cat as $value)
							<li><a href="{{route('san-pham',['id'=>$value->id])}}">{{$value->name}}</a></li>
							@endforeach
						</ul>
							</li>

							<li class="sale-noti">
								<a href="">Sale</a>
							</li>

							<li>
								<a href="{{route('gio-hang')}}">Cart</a>
							</li>

							<li>
								<a href="{{route('blog')}}">Blog</a>
							</li>

							<li>
								<a href="{{route('gioi-thieu')}}">About</a>
							</li>

							<li>
								<a href="{{route('lien-he')}}">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="{{url('/')}}/public/resouces/admin/upload/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="{{url('/')}}/public/resouces/admin/upload/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="{{url('/')}}/public/resouces/admin/upload/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<a style="color: white" href="{{route('gio-hang')}}" class="header-icons-noti">{{count($cart)}}</a>

						<!-- Header cart noti -->
						
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
							
								  
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						@if (Auth::check())
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								 
								<p>{{Auth::user()->email}} | </p> 
							
							</span> 

							<div class="topbar-language rs1-select2">
								<a href="{{route('logout')}}"> log out</a>
							</div>
						</div>
						@else
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								 
								<a href="{{route('login')}}">đăng nhập |</a> 
							
							</span> 

							<div class="topbar-language rs1-select2">
								<a href="{{route('dang-ky')}}">| đăng ký</a>
							</div>
						</div>
						@endif
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('trang-chu')}}">Home</a>
					
					</li>

					<li class="item-menu-mobile">
						<a href="">Shop</a>
							
						<ul class="sub-menu">
								@foreach($cat as $value)
							<li><a href="{{route('san-pham',['id'=>$value->id])}}">{{$value->name}}</a></li>
							@endforeach
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('gio-hang')}}">Cart</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('blog')}}">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('gioi-thieu')}}">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="{{route('lien-he')}}">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	@yield('content')


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="{{url('/')}}/public/resouces/admin/upload/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="{{url('/')}}/public/resouces/admin/upload/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="{{url('/')}}/public/resouces/admin/upload/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="{{url('/')}}/public/resouces/admin/upload/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="{{url('/')}}/public/resouces/admin/upload/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	@yield('script')
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="{{url('/')}}/public/resouces/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="{{url('/')}}/public/resouces/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>

<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<script src="{{url('/')}}/public/resouces/js/main.js"></script>
	
</body>
</html>
