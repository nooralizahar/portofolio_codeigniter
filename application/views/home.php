<!DOCTYPE html>
<html>

<!-- Head -->
<head>
	<title>My Portofolio</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Portofolio">
	<meta name="keywords" content="portofolio, codeigniter, laravel, django, website, mobile android, build, make apps">
	<meta name="author" content="Noor Alizah Afifah R">
	<!-- Animate AOS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo.png">

	<!-- style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">

	<!-- icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/v4-shims.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- lightbox css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
</head>
<!-- Head End -->

<!-- Body -->
<body>

	<!-- Slider -->
	<nav class="navbar navbar-expand-md navbar-light fixed-top shadow-sm bg-white py-3">
		<div class="container">
			<div class="d-none d-lg-block justify-content-sm-center w-25">
				<a class="navbar-brand mr-0" href="<?= site_url('') ?>"><img src="<?= base_url() ?>assets/images/logo.png" class="w-50" alt="logo"></a>
			</div>

			<!--  Show this only on mobile to medium screens  -->
			<a class="navbar-brand d-lg-none w-25" href="<?= site_url('') ?>"><img src="<?= base_url() ?>assets/images/logo.png" class="w-100" alt="logo"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse collapse justify-content-center justify-content-sm-start" id="collapsingNavbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#about">About Me </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#skill">Skill </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#hobby">Hobby </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#achievement">Achievement </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#experience">Experience </a>
					</li>
				</ul>

				<span class="navbar-text">
					Login
				</span>
			</div>

		</div>
	</nav>
	<!-- Navbar End -->

	<!-- Slide -->
	<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= base_url() ?>assets/images/slider/slider-1.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1>Workspace</h1>
					<p>My Room Is My Workspace and where i Make My Program Code.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url() ?>assets/images/slider/slider-3.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1>Workspace</h1>
					<p>My Room Is My Workspace and where i Make My Program Code.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url() ?>assets/images/slider/slider-4.jpg" class="d-block w-100 img-fluid" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1>Workspace</h1>
					<p>My Room Is My Workspace and where i Make My Program Code.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Slider End -->

	<!-- About Me -->
	<div data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="section bg-white" id="about">
		<h3 class="text-center pb-3">About Me</h3>
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="<?= base_url() ?>assets/images/foto.jpg" class="card-img img-fluid" style="height:450px" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Noor Alizah Afifah R</h5>
						<p class="card-text">
							Born in Makassar on September 25, 2000, parents Ridwan and Dewi, father as a private employee mother as a housewife and owner of an online restaurant. The second child of 4 siblings, has 1 big brother and 2 twin brothers. Lived in Makassar until the age of 8 years, moved to Medan until the age of 10 years, moved again to Surabaya until the age of 14 years, and now lives in Depok.
						</p>
						<p class="card-text">
							Dream when I was little was to be a scientist or astronaut, from childhood I never wanted to be the person sitting behind a computer. But now working as a programmer, I think fate is funny because sometimes what we most avoid is what we will become later. Right now my dream is to make my parents proud and use all my abilities to create something meaningful and useful.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Me End -->

	<!-- Skill -->
	<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="section bg-green" id="skill">
		<h3 class="text-center pb-3">Skill</h3>
		<div class="container">
			<div class="row">

				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>

				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>

				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>

				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 col-6 text-center text-muted p-3">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
					<div style="border:1px solid rgb(184, 209, 197, .8)">
						<h5 class="card-title pt-3">PHP</h5>
						<p>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
							<i class="fa fa-star text-warning"></i>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Skill End -->

	<!-- Hobby -->
	<div data-aos="zoom-in-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="section bg-white" id="hobby">
		<h3 class="text-center pb-3">Hobby</h3>
		<div class="container">
			<div class="row">
				<div data-aos="zoom-in-up" data-aos-anchor-placement="top-center" data-aos-duration="2000" class="col-md-4 col-12 text-muted p-3">
					<div class="card">
						<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Lorem ipsum</h4>
							<p class="text-justify">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
							</p>
						</div>
					</div>
				</div>
				<div data-aos="zoom-in-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-4 col-12 text-muted p-3">
					<div data-aos="zoom-in-up" class="card">
						<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Lorem ipsum</h4>
							<p class="text-justify">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
							</p>
						</div>
					</div>
				</div>
				<div data-aos="zoom-in-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-4 col-12 text-muted p-3">
					<div class="card">
						<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Lorem ipsum</h4>
							<p class="text-justify">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hobby End -->

	<!-- Achievement -->
	<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="section bg-green" id="achievement">
		<h3 class="text-center pb-3">Achievement</h3>
		<div class="container">
			<div class="row">
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="col-md-6 p-2 col-6">
					<div class="card pt-2 pl-2 pr-2">
						<div class="row no-gutters">
							<div class="col-md-4 col-12">
								<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="rounded img-fluid" alt="...">
							</div>
							<div class="col-md-8 col-12">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum</h4>
									<p class="">
										Lorem ipsum dolor sit amet. sit amet.sit
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="col-md-6 p-2 col-6">
					<div class="card pt-2 pl-2 pr-2">
						<div class="row no-gutters">
							<div class="col-md-4 col-12">
								<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="rounded img-fluid" alt="...">
							</div>
							<div class="col-md-8 col-12">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum</h4>
									<p class="">
										Lorem ipsum dolor sit amet. sit amet.sit
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="col-md-6 p-2 col-6">
					<div class="card pt-2 pl-2 pr-2">
						<div class="row no-gutters">
							<div class="col-md-4 col-12">
								<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="rounded img-fluid" alt="...">
							</div>
							<div class="col-md-8 col-12">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum</h4>
									<p class="">
										Lorem ipsum dolor sit amet. sit amet.sit
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="col-md-6 p-2 col-6">
					<div class="card pt-2 pl-2 pr-2">
						<div class="row no-gutters">
							<div class="col-md-4 col-12">
								<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="rounded img-fluid" alt="...">
							</div>
							<div class="col-md-8 col-12">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum</h4>
									<p class="">
										Lorem ipsum dolor sit amet. sit amet.sit
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="col-md-6 p-2 col-6">
					<div class="card pt-2 pl-2 pr-2">
						<div class="row no-gutters">
							<div class="col-md-4 col-12">
								<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="rounded img-fluid" alt="...">
							</div>
							<div class="col-md-8 col-12">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum</h4>
									<p class="">
										Lorem ipsum dolor sit amet. sit amet.sit
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div data-aos="flip-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="col-md-6 p-2 col-6">
					<div class="card pt-2 pl-2 pr-2">
						<div class="row no-gutters">
							<div class="col-md-4 col-12">
								<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" class="rounded img-fluid" alt="...">
							</div>
							<div class="col-md-8 col-12">
								<div class="card-body">
									<h4 class="card-title">Lorem ipsum</h4>
									<p class="">
										Lorem ipsum dolor sit amet. sit amet.sit
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Achievement End -->

	<!-- Experience -->
	<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="section bg-white" id="experience">
		<h3 class="text-center pb-3">Experience</h3>
		<div class="container">
			<div class="row">
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 p-2 text-center col-6">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" width="150" height="150" class="img-fluid rounded-circle mb-3">
					<h4>Lorem Ipsum</h4>
					<p>Lorem ipsum dolor sit amet. sit amet.sit</p>
					<p><span>2018-2020</span></p>
				</div>
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 p-2 text-center col-6">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" width="150" height="150" class="img-fluid rounded-circle mb-3">
					<h4>Lorem Ipsum</h4>
					<p>Lorem ipsum dolor sit amet. sit amet.sit</p>
					<p><span>2018-2020</span></p>
				</div>
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 p-2 text-center col-6">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" width="150" height="150" class="img-fluid rounded-circle mb-3">
					<h4>Lorem Ipsum</h4>
					<p>Lorem ipsum dolor sit amet. sit amet.sit</p>
					<p><span>2018-2020</span></p>
				</div>
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-3 p-2 text-center col-6">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" width="150" height="150" class="img-fluid rounded-circle mb-3">
					<h4>Lorem Ipsum</h4>
					<p>Lorem ipsum dolor sit amet. sit amet.sit</p>
					<p><span>2018-2020</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Experience End -->

	<!-- Footer -->
	<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="section bg-footer" id="">
		<div class="container">
			<div class="row">
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-4 text-center foot-img">
					<img src="<?= base_url() ?>assets/images/slider/slider-2.jpg" width="150" height="150" class="img-fluid">
					<h6 class="pt-3">Visitors : </h6>
				</div>
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000" class="col-md-4">
					<h4 class="pl-3">Connected With Me</h4>
					<div class="p-3">
						<h6 class="text-light"><i class="fa fa-whatsapp text-success logo-foot"></i> 0858 8457 1705</h6>
						<h6 class="text-light"><i class="fa fa-instagram text-danger logo-foot"></i> @nooralizah948</h6>
						<h6 class="text-light"><i class="fa fa-linkedin text-primary logo-foot"></i> Noor Afifah</h6>
						<h6 class="text-light"><i class="fa fa-envelope text-danger logo-foot"></i> nooralizahar@gmail.com</h6>
						<h6 class="text-light"><i class="fa fa-github text-info logo-foot"></i> kuroiyuki48</h6>
						<h6 class="text-light"><i class="fa fa-facebook text-primary logo-foot"></i> Noor Alizah</h6>
					</div>
				</div>
				<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000" class="col-md-4">
					<h4 class="pl-3">Connected With Me</h4>
					<div class="p-3 rounded">
						<form class="pt-3">
							<div class="form-group">
								<input type="text" name="nama" class="form-control" autocomplete="off" required placeholder="Name">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" autocomplete="off" required placeholder="Email">
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-success form-control">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr style="border: .5px solid white">
			<p class="text-white">Copyright 2020 @ Noor Alizah Afifah R</p>
		</div>
	</div>
	<!-- Footer End -->

</body>
<!-- Body End -->

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
	// You can also pass an optional settings object
	// below listed default settings
	AOS.init({
	  // Global settings:
	  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
	  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
	  initClassName: 'aos-init', // class applied after initialization
	  animatedClassName: 'aos-animate', // class applied on animation
	  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
	  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
	  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
	  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
	  

	  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
	  offset: 120, // offset (in px) from the original trigger point
	  delay: 0, // values from 0 to 3000, with step 50ms
	  duration: 400, // values from 0 to 3000, with step 50ms
	  easing: 'ease', // default easing for AOS animations
	  once: false, // whether animation should happen only once - while scrolling down
	  mirror: false, // whether elements should animate out while scrolling past them
	  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

	});
</script>
<!-- Script End -->

</html>