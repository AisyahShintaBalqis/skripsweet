<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Sistem Pendukung Keputusan</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{asset('layout/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('layout/css/main.css')}}">
</head>

<body>
	@include('frontend.partial.header')
	<!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-6 col-md-6 ">
					<h6 class="text-white ">WELCOME TO WEBSITE</h6>
					<h1 class="text-uppercase">
						CV. MARAQDIA PUTERA AGUNG
					</h1>
					<p class="pt-10 pb-10 text-white">
						Kopi Mandar
					</p>
					<a href="login" class="primary-btn text-uppercase">Login</a>
				</div>

			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="{{asset('layout/img/about-img.jpg')}}" alt="">
				</div>
				<div class="col-lg-6 about-right">
					<h1>CAP MARADDIA</h1>
					<h4>Sekilas tentang CV. Maraqdia Putera Agung</h4>
					<h6>Sumber : karyakreatifindonesia.go.id</h6>
					<br>
					<p>CV. Maraqdia Putra Agung merupakan UMKM pengolahan kopi dengan merek
						"Kopi Cap Maraddia" yang berdiri sejak tahun 2016. Dengan hanya bermodal anggaran puluhan juta
						rupiah
						dan emperan rumah kecil di sudut kebun pada awal perintisannya, kini usaha ini berkembang hingga
						memiliki rumah produksi sendiri dan diakui sebagai salah satu kopi specialty di Sulawesi Barat
						(oleh SCAI (Specialty Coffee Association of Indonesia)). Kopi Cap Maraddia juga telah memiliki
						sertifikasi halal dan BPOM.
						Adapun kopi yang diproduksi yaitu dalam bentuk bubuk kopi dan roasted bean.</p>
					<a class="text-uppercase primary-btn" href="#">Get Details</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start services Area -->
	<section class="services-area pb-120">
		<div class="container">
			<div class="row section-title">
				<h1>Layanan Kami</h1>
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 single-service">
					<span class="lnr lnr-car"></span>
					<a href="#">
						<h4>Taxi Service</h4>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
				<div class="col-lg-4 single-service">
					<span class="lnr lnr-briefcase"></span>
					<a href="#">
						<h4>Office Pick-ups</h4>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
				<div class="col-lg-4 single-service">
					<span class="lnr lnr-bus"></span>
					<a href="#">
						<h4>Event Transportation</h4>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End services Area -->

	<!-- Start image-gallery Area -->
	<section class="image-gallery-area section-gap">
		<div class="container">
			<div class="row section-title">
				<h1>Daftar Produk</h1>
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 single-gallery">
					<a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="{{asset('layout/img/g1.jpg')}}"
							alt=""></a>
					{{-- <a href="img/g4.jpg" class="img-gal"><img class="img-fluid"
							src="{{asset('layout/img/g4.jpg')}}" alt=""></a> --}}
				</div>
				<div class="col-lg-4 single-gallery">
					<a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="{{asset('layout/img/g2.jpg')}}"
							alt=""></a>
					{{-- <a href="img/g5.jpg" class="img-gal"><img class="img-fluid"
							src="{{asset('layout/img/g5.jpg')}}" alt=""></a> --}}
				</div>
				<div class="col-lg-4 single-gallery">
					<a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="{{asset('layout/img/g3.jpg')}}"
							alt=""></a>
					{{-- <a href="img/g6.jpg" class="img-gal"><img class="img-fluid"
							src="{{asset('layout/img/g6.jpg')}}" alt=""></a> --}}
				</div>
			</div>
		</div>
	</section>
	<!-- End image-gallery Area -->

	<!-- Start reviews Area -->
	<section class="reviews-area section-gap">
		<div class="container">
			<div class="row section-title">
				<h1>Review Product</h1>
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Cody Hines</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Chad Herrera</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Andre Gonzalez</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Jon Banks</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Landon Houston</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-review">
						<h4>Nelle Wade</h4>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker.
						</p>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End reviews Area -->

	<!-- Start home-calltoaction Area -->
	{{-- <section class="home-calltoaction-area relative">
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row align-items-center section-gap">
				<div class="col-lg-8">
					<h1>Experience Great Support</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</p>
				</div>
				<div class="col-lg-4 btn-left">
					<a href="#" class="primary-btn">Reach Our Support Team</a>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End home-calltoaction Area -->

	<!-- Start latest-blog Area -->
	{{-- <section class="latest-blog-area section-gap">
		<div class="container">
			<div class="row section-title">
				<h1>Latest News from our Blog</h1>
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="single-latest-blog">
						<div class="thumb">
							<img class="img-fluid" src="img/b1.jpg" alt="">
						</div>
						<ul class="tags">
							<li><a href="#">Travel</a></li>
							<li><a href="#">Life Style</a></li>
						</ul>
						<a href="#">
							<h4>Portable latest Fashion for young women</h4>
						</a>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore.
						</p>
						<p class="date">31st January, 2018</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-latest-blog">
						<div class="thumb">
							<img class="img-fluid" src="img/b2.jpg" alt="">
						</div>
						<ul class="tags">
							<li><a href="#">Travel</a></li>
							<li><a href="#">Life Style</a></li>
						</ul>
						<a href="#">
							<h4>Portable latest Fashion for young women</h4>
						</a>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore.
						</p>
						<p class="date">31st January, 2018</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End latest-blog Area -->

	<!-- start footer Area -->
	@include('frontend.partial.footer')
	<!-- End footer Area -->

	<script src="{{asset('layout/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="{{asset('layout/js/vendor/bootstrap.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('layout/js/easing.min.js')}}"></script>
	<script src="{{asset('layout/js/hoverIntent.js')}}"></script>
	<script src="j{{asset('layout/s/superfish.min.js')}}"></script>
	<script src="{{asset('layout/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('layout/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('layout/js/jquery-ui.js')}}"></script>
	<script src="{{asset('layout/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('layout/js/mail-script.js')}}"></script>
	<script src="{{asset('layout/js/main.js')}}"></script>
</body>

</html>