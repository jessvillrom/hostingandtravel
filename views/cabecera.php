<? define("base_url", "http://localhost/Aprendizaje_SENA/Proyecto_Final/AgenciadeTurismo/"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>FlyCo
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url ?>views/images/icons/flyicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url ?>views/css/main.css">
	<!--===============================================================================================-->
</head>


<body class="animsition">

	<!--Aqui va la cabecera  -->
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">

					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Ayuda & FAQs
						</a>

						<?php
						if (!isset($_SESSION['identity'])) :
						?>
							<a href="<?= base_url ?>user/login" class="flex-c-m trans-04 p-lr-25">
								Iniciar Sesión
							</a>

						<?php else : ?>

							<a href="<?= base_url ?>user/login" class="flex-c-m trans-04 p-lr-25">
								<?php echo ucfirst($_SESSION['identity']->nombre . " " . ucfirst($_SESSION['identity']->apellido)) ?>

							</a>


						<?php
						endif;
						?>

						<?php if (isset($_SESSION['identity']) && $_SESSION['identity']->rol == "admin") : ?>
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								Administrar
							</a>

						<?php endif; ?>


						<?php
						if (isset($_SESSION['identity'])) :
						?>
							<a href="<?= base_url ?>user/logout" class="flex-c-m trans-04 p-lr-25">
								Cerrar Sesión
							</a>

						<?php endif; ?>

					</div>
				</div>
			</div>


			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="<?= base_url ?>" class="logo">
						<img src="<?= base_url ?>views/images/icons/logo-001.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= base_url ?>">Inicio</a>
							</li>

							<li>
								<a href="<?= base_url ?>">Categorias</a>
								<ul class="sub-menu">
									<li><a href="<?= base_url ?>">Alojamiento</a></li>
									<li><a href="<?= base_url ?>categoria/vuelos">Vuelos</a></li>
									<li><a href="<?= base_url ?>categoria/tour">Toures Guiados</a></li>
								</ul>
							</li>

							<li class="label1" data-label1="promo">
								<a href="#">Ofertas</a>
							</li>

							<li>
								<a href="#">Acerca de nosotros</a>
							</li>

							<li>
								<a href="#">Contactenos</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->

				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="<?= base_url ?>views/images/icons/logo-001.png" alt="IMG-LOGO"></a>
			</div>



			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">


				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Ayuda & FAQs
						</a>

						<?php
						if (!isset($_SESSION['identity'])) :
						?>
							<a href="<?= base_url ?>user/login" class="flex-c-m trans-04 p-lr-25">
								Iniciar Sesión
							</a>

						<?php else : ?>

							<a href="<?= base_url ?>user/login" class="flex-c-m trans-04 p-lr-25">
								<?php echo ucfirst($_SESSION['identity']->nombre . " " . $_SESSION['identity']->apellido) ?>

							</a>
						<?php
						endif;
						?>

						<?php if (isset($_SESSION['identity']) && $_SESSION['identity']->rol == "admin") : ?>
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								Administrar
							</a>

						<?php endif; ?>


						<?php
						if (isset($_SESSION['identity'])) :
						?>
							<a href="<?= base_url ?>user/logout" class="flex-c-m trans-04 p-lr-25">
								Cerrar Sesión
							</a>

						<?php endif; ?>

					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= base_url ?>">Inicio</a>
				</li>

				<li>
					<a href="<?= base_url ?>">Alojamiento</a>

				</li>

				<li>
					<a href="#" class="label1 rs1" data-label1="promo">Ofertas</a>
				</li>

				<li>
					<a href="#">Acerca de nosotros</a>
				</li>

				<li>
					<a href="#">Contactenos</a>
				</li>
			</ul>
		</div>



		<!-- Modal Search -->
		<!-- <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="search" placeholder="Buscar...">
			</form>
		</div>
	</div> -->
	</header>

	<!-- <div class="bg0 m-t-23 p-b-140"> -->