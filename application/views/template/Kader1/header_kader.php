<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Medigo Blue, free responsive template</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->

	<link rel="stylesheet" href="<?= base_url() . 'assets/Template/Kader/bootstrap/bootstrap.css'; ?>">
	<link rel="stylesheet" href="<?= base_url() . 'assets/Template/Kader/css/misc.css'; ?>">
	<link rel="stylesheet" href="<?= base_url() . 'assets/Template/Kader/css/blue-scheme.css'; ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<!-- JavaScripts -->

	<script src="<?= base_url() . 'assets/Template/Kader/js/jquery-1.10.2.min.js'; ?>"></script>
	<script src="<?= base_url() . 'assets/Template/Kader/js/jquery-migrate-1.2.1.min.js'; ?>"></script>


	<link rel="shortcut icon" href="<?= base_url() . 'assets/Template/Kader/images/favicon.ico'; ?>" type="image/x-icon" />

</head>

<body>
	<div class="responsive_menu">
		<ul class="main_menu">
			<li><a href="<?= base_url() . 'kader/Dashboard/index' ?>">Home</a></li>
			<li><a href="#">Lansia</a>
				<ul>
					<li><a href="<?= base_url() . 'Kader/data_lansia/index'; ?>">Data Lansia</a></li>
					<li><a href="<?= base_url() . 'Kader/data_kes_lansia/index'; ?>">Data Kesehatan Lansia</a></li>
				</ul>
			</li>
			<li><a href="#">Kegiatan</a>
				<ul>
					<li><a href="<?= base_url() . 'Kader/jadwal_kegiatan/index'; ?>">Jadwal Kegiatan</a></li>
					<li><a href="<?= base_url() . 'Kader/Dashboard/keterangan_kegiatan'; ?>">Rincian Jadwal</a></li>
					<li><a href="#">visit templatemo</a></li>
				</ul>
			</li>
			<li><a href="#">Gizi</a>
				<ul>
					<li><a href="<?= base_url() . 'Kader/gizi/index'; ?>">Data Gizi</a></li>
					<li><a href="<?= base_url() . 'Kader/Dashboard/keterangan_kegiatan'; ?>">Rincian Gizi</a></li>
				</ul>
			</li>
			<li><a href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Yakin akan logout?')">Logout</a>
		</ul> <!-- /.main_menu -->
	</div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-9">

					<div class="pull-left logo">
						<a href="<?= base_url() . 'assets/Template/Kader/index.html'; ?>">
							<img src="<?= base_url() . 'assets/Template/Kader/images/logopuskesmas.png'; ?>" width="200px" height="80px" alt="Medigo by templatemo">
						</a>
					</div> <!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
<<<<<<< HEAD:application/views/template/Kader/header_kader.php
								<li class="active"><a href="<?= base_url(); ?>kader/Dashboard/index">Home</a></li>
								<li><a href="#">Lansia</a>
									<ul>
										<li><a href="<?= base_url(); ?>Kader/data_lansia/index">Data Lansia</a></li>
										<li><a href="<?= base_url(); ?>Kader/data_kes_lansia/index">Data Kesehatan Lansia</a></li>
										<!-- <li><a href="<?= base_url() . 'assets/Template/Kader/project-slideshow.html'; ?>">Project Slideshow</a></li> -->
									</ul>
								</li>
								<li><a href="#">Kegiatan</a>
									<ul>
										<li><a href="<?= base_url(); ?>Kader/jadwal_kegiatan/index">Jadwal Kegiatan</a></li>
										<li><a href="<?= base_url(); ?>Kader/Dashboard/keterangan_kegiatan">Rincian Jadwal</a></li>
										<!-- <li><a href="<?= base_url() . 'assets/Template/Kader/project-slideshow.html'; ?>">Project Slideshow</a></li> -->
									</ul>
								</li>
								<li><a href="#">Gizi</a>
									<ul>
										<li><a href="<?= base_url(); ?>Kader/gizi/index">Gizi</a></li>
										<li><a href="<?= base_url(); ?>Kader/Dashboard/keterangan_kegiatan">Pentingnya Gizi</a></li>
										<!-- <li><a href="<?= base_url() . 'assets/Template/Kader/project-slideshow.html'; ?>">Project Slideshow</a></li> -->
									</ul>
								</li>
=======
								<li class="active"><a href="<?=base_url();?>/kader1/Dashboard/index">Home</a></li>
					            <li><a href="#">Lansia</a>
					            	<ul>
					            		<li><a href="<?=base_url();?>/Kader1/data_lansia/index">Data Lansia</a></li>
					            		<li><a href="<?=base_url();?>/Kader1/data_kes_lansia/index">Data Kesehatan Lansia</a></li>
					            		<!-- <li><a href="<?= base_url().'assets/Template/Kader/project-slideshow.html';?>">Project Slideshow</a></li> -->
					            	</ul>
					            </li>
								<li><a href="#">Kegiatan</a>
					            	<ul>
					            		<li><a href="<?=base_url();?>/Kader1/jadwal_kegiatan/index">Jadwal Kegiatan</a></li>
					            		<li><a href="<?=base_url();?>/Kader1/Dashboard/keterangan_kegiatan">Rincian Jadwal</a></li>
					            		<!-- <li><a href="<?= base_url().'assets/Template/Kader/project-slideshow.html';?>">Project Slideshow</a></li> -->
					            	</ul>
					            </li>
								<li><a href="#">Gizi</a>
					            	<ul>
					            		<li><a href="<?=base_url();?>/Kader1/gizi/index">Gizi</a></li>
					            		<li><a href="<?=base_url();?>/Kader1/Dashboard/keterangan_kegiatan">Pentingnya Gizi</a></li>
					            		<!-- <li><a href="<?= base_url().'assets/Template/Kader/project-slideshow.html';?>">Project Slideshow</a></li> -->
					            	</ul>
					            </li>
>>>>>>> 721deb13d41ba81b12692e1b19a352488751b090:application/views/template/Kader1/header_kader.php
								<li><a href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Yakin akan logout?')">Logout</a>
								</li>


						</nav>

						<!-- This one in here is responsive menu for tablet and mobiles -->
						<div class="responsive-navigation visible-sm visible-xs">
							<a href="#nogo" class="menu-toggle-btn">
								<i class="fa fa-bars"></i>
							</a>
						</div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->