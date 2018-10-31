<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Informasi LAB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url()?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo base_url()?>fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url()?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Informasi LAB</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo base_url(); ?>index.php/home/index">Home</a></li>
								<li class="<?php echo $ai; ?>"><a href="<?php echo base_url(); ?>index.php/home/aimp">AIMP</a></li>
								<li class="<?php echo $cc; ?>"><a href="<?php echo base_url(); ?>index.php/home/cc">CC</a></li>
								<li class="<?php echo $iot; ?>"><a href="<?php echo base_url(); ?>index.php/home/iot">IoT</a></li>
								<li><a href="<?php echo base_url(); ?>index.php/home/contact">Contact</a></li>
								<li><a href="<?php echo site_url('login/ceklogout')?>" class="btn btn-danger btn-xs">Log Out</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url('<?php echo base_url()?>images/cover_img_3.jpg');">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1><?php echo $a; ?></h1>
				   					<h2><a href="index.html">Home</a> - <a href="project.html"><?php echo $c; ?></a></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		<div id="colorlib-project">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-8 animate-box">
						<img class="img-responsive project-single" src="<?php echo base_url()?>images/lab/<?php echo $g; ?>" alt="html5 bootstrap template by colorlib.com">
						<div class="thumb-wrap">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-6">
									<a class="thumb-img" style="background-image: url('<?php echo base_url()?>images/lab/<?php echo $e; ?>');"></a>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6">
									<a class="thumb-img" style="background-image: url('<?php echo base_url()?>images/lab/<?php echo $f; ?>');"></a>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6">
									<a class="thumb-img" style="background-image: url('<?php echo base_url()?>images/lab/<?php echo $h; ?>');"></a>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6">
									<a class="thumb-img" style="background-image: url('<?php echo base_url()?>images/lab/<?php echo $i; ?>');"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="project-single-desc"> 
							<h2>Lab Details</h2>
							<ul class="list">
								<li><span class="title">Kepala LAB:</span> <span class="title-2"><?php echo $info1; ?></span></li>
								<li><span class="title">Location:</span> <span class="title-2"><?php echo $info2; ?></span></li>
								<li><span class="title">Mahasiswa:</span> <span class="title-2"><?php echo $info3; ?></span></li>
								<li><span class="title">Dosen:</span> <span class="title-2"><?php echo $info4; ?></span>

								</li>
								<li><span class="title">Penelitian:</span> <span class="title-2"><?php echo $info5; ?></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div >
						<h3 align="center">Lab Description</h3>
						<p><?php echo $info6; ?></p>
					</div>
				</div>
				<div id="colorlib-about">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Team</h2>
						
					</div>
				</div>
				<div class="row">
					<?php foreach($b as $r){ ?>
					<div class="col-md-3 animate-box">
						<a class="staff-img staff-img2" style="background-image: url('<?php echo base_url()?>images/dosen/<?php echo $r['foto_dosen']?>');">
							<div class="desc-staff">
								<h3><?php echo $r['nama_dosen'] ?></h3>
								<span><?php echo $r['jabatan'] ?></span>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="project-single-desc">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>List Tugas Akhir</h2>
						
					</div>
				</div>
				<div class="row">
					<?php foreach($d as $y){ ?>
					<div class="col-md-4 animate-box">
						<div class="project-entry">
							<a href="<?php echo base_url() ?>index.php/detail/<?php echo $j?>/<?php echo $y['id_ta']?>" class="project-img text-center" style="background-image: url('<?php echo base_url()?>images/tugasakhir/<?php echo $y['gambar_ta']?>');">
								<span class="icon"><i class="icon-search2"></i></span>
							</a>
							<div class="desc">
								<h3><a href="<?php echo base_url() ?>index.php/detail/<?php echo $j?>/<?php echo $y['id_ta']?>"><?php echo $y['judul_ta'] ?></a></h3>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
		
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-7 col-md-offset-3">
						<div class="row">
							<form action="<?php echo site_url('home/insertEmail')?>" method="POST" class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer">
			<div class="contact-information">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 text-center">
									<div class="info-wrap">
										<span class="icon"><i class="icon-location4"></i></span>
										<p>Jln. Poros Malino , Km.6, Gowa<br>Electrical Building 2F</p>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="info-wrap">
										<span class="icon"><i class="icon-world"></i></span>
										<p><a href="#">informatika@unhas.ac.id</a> <br> <a href="#">http://eng.unhas.ac.id/informatika</a></p>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="info-wrap">
										<span class="icon"><i class="icon-phone2"></i></span>
										<p><a href="#">(0411) 588111</a> <br> <a href="#">(0411) 590125</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 colorlib-widget">
						<h4>About Informatics Engineering</h4>
						<p>Pusat unggulan dalam pendidikan, penelitian dan penerapan teknologi berbasi jaringan komputer dan sistem cerdas berlandaskan Benua Maritim Indonesia tahun 2025</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.facebook.com/groups/191869157575021/"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-4 colorlib-widget">
						<h4 align="center">Instagram</h4>
						<div class="instagram">
							<a href="https://www.instagram.com/okifftuh/" class="insta-img" style="background-image: url('<?php echo base_url()?>images/building-1.jpg');"></a>
							<a href="https://www.instagram.com/okifftuh/" class="insta-img" style="background-image: url('<?php echo base_url()?>images/building-2.jpg');"></a>
							<a href="https://www.instagram.com/okifftuh/" class="insta-img" style="background-image: url('<?php echo base_url()?>images/building-3.jpg');"></a>
							<a href="https://www.instagram.com/okifftuh/" class="insta-img" style="background-image: url('<?php echo base_url()?>images/building-4.jpg');"></a>
							<a href="https://www.instagram.com/okifftuh/" class="insta-img" style="background-image: url('<?php echo base_url()?>images/building-5.jpg');"></a>
							<a href="https://www.instagram.com/okifftuh/" class="insta-img" style="background-image: url('<?php echo base_url()?>images/building-6.jpg');"></a>
						</div>
					</div>

					<div class="col-md-4 col-md-push-1 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>Jln. Poros Malino , Km.6, Gowa<br>Electrical Building 2F</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> 0411-588111</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> informatika@unhas.ac.id</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> http://eng.unhas.ac.id/informatika</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart3" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url()?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url()?>js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url()?>js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url()?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url()?>js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url()?>js/main.js"></script>

	</body>
</html>

