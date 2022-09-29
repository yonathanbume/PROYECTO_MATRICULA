<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" href="edustage/img/favicon.png" type="image/png" />
	<title>Sistema Matricula</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="edustage/css/bootstrap.css" />
	<link rel="stylesheet" href="edustage/css/flaticon.css" />
	<link rel="stylesheet" href="edustage/css/themify-icons.css" />
	<link rel="stylesheet" href="edustage/vendors/owl-carousel/owl.carousel.min.css" />
	<link rel="stylesheet" href="edustage/vendors/nice-select/css/nice-select.css" />
	<!-- main css -->
	<link rel="stylesheet" href="edustage/css/style.css" />
</head>

<body>
	<?php session_start(); ?>
	<!-- Modal -->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Inicar session</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="login.php" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label for="txtEmailLogin">Email</label>
							<input type="email" class="form-control" id="txtEmailLogin" name="txtEmailLogin" aria-describedby="emailHelp" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="txtPaswwordLogin">Password</label>
							<input type="password" class="form-control" id="txtPaswwordLogin" name="txtPaswwordLogin" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="txtTipo">Tipo</label><br>
							<select class="form-control" name="txtTipo" id="txtTipo">
								<option value="1">Alumno</option>
								<option value="2">Docente</option>
								<option value="3">Admin</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Registro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="registro.php" method="POST">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="txtEmail">Email</label>
									<input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="txtPaswword">Password</label>
									<input type="password" class="form-control" id="txtPaswword" name="txtPaswword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="txtNombres">Nombres</label>
									<input type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="Nombres">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="Apellidos">Apellidos</label>
									<input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="txtDireccion">Direccion</label>
									<input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Direccion">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="txtCelular">Celular</label>
									<input type="text" class="form-control" id="txtCelular" name="txtCelular" placeholder="Celular">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="SelectCategoria">Categoria</label><br>
									<select class="form-control" name="SelectCategoria" id="SelectCategoria">
										<option value="Admin">Administrador</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here" />
						<button type="submit" class="btn"></button>
						<span class="ti-close" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<h2>Sistema Matricula</h2>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<?php if (isset($_SESSION['id']) && ($_SESSION['categoria']=='Súper Usuario' or $_SESSION['categoria']=='Admin')) { ?>
							<li class="nav-item">
								<a class="nav-link" href="EscuelaAcad/EscuelaAcademica.php">Formacion Tecnica</a> <!--Escuela:-->
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Alumnos/Alumnos.php">Alumnos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Docente/Docente.php">Docente</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Cursos/Cursos.php">Cursos</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="Reporte/alumnos.php">Alumnos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Reporte/cursos.php">Cursos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Reporte/docentes.php">Docentes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Reporte/escuelas.php">Escuelas</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Reporte/matriculas.php">Matriculas</a>
									</li>
								</ul>
							</li>
							<?php } ?>

							<?php if (isset($_SESSION['id']) && ($_SESSION['categoria']=='Alumno' or $_SESSION['categoria']=='Docente')) { ?>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matricula</a>
								<ul class="dropdown-menu">
									<?php if ($_SESSION['categoria']=='Alumno') { ?>
									<li class="nav-item">
										<a class="nav-link" href="Matricula/matricula.php">Insertar matricula</a>
									</li>
									<?php } ?>
									<?php if ($_SESSION['categoria']=='Docente') { ?>
									<li class="nav-item">
										<a class="nav-link" href="Notas/notas.php">Ingresar notas</a>
									</li>
									<?php } ?>
								</ul>
							</li>
							<?php } ?>

							<?php if (isset($_SESSION['id'])) { ?>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Cerrar sesion</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><?php echo $_SESSION['nombre'] ?></a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner_content text-center">
							<h1 class="text-uppercase">
								
							</h1>
							<h2 class="text-uppercase mt-4 mb-5">
								PROYECTO SISTEMA DE MATRICULA
							</h2>
							<div>
								<?php if (isset($_SESSION['id']) && $_SESSION['categoria']=='Súper Usuario') { ?>
									<a href="#" data-toggle="modal" data-target="#modalRegistro" class="primary-btn2 mb-3 mb-sm-0">Registro</a>
								<?php } ?>
								<?php if (!isset($_SESSION['id'])){ ?>
									<a href="#" data-toggle="modal" data-target="#modalLogin" class="primary-btn ml-sm-3 ml-0">Iniciar Sesion</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank"
							action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
								required="" type="email" />
							<button class="click-btn btn btn-default">
								<span>subscribe</span>
							</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
									type="text" />
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="ti-facebook"></i></a>
					<a href="#"><i class="ti-twitter"></i></a>
					<a href="#"><i class="ti-dribbble"></i></a>
					<a href="#"><i class="ti-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="edustage/js/jquery-3.2.1.min.js"></script>
	<script src="edustage/js/popper.js"></script>
	<script src="edustage/js/bootstrap.min.js"></script>
	<script src="edustage/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="edustage/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="edustage/js/owl-carousel-thumb.min.js"></script>
	<script src="edustage/js/jquery.ajaxchimp.min.js"></script>
	<script src="edustage/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="edustage/js/gmaps.min.js"></script>
	<script src="edustage/js/theme.js"></script>
</body>

</html>