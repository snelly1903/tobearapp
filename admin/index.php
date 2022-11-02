<?php

session_start();

if (!isset($_SESSION['administrador'])) {
	echo '
            <script>
                alert("Se debe iniciar sesion para acceder");
                window.location = "index.php";
            </script>
        ';
	session_destroy();
	die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Title -->
	<title>ToBeerApp</title>

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins/font-awesome.css">
	<link rel="stylesheet" href="css/plugins/magnific-popup.css">
	<link rel="stylesheet" href="css/plugins/simplebar.css">
	<link rel="stylesheet" href="css/plugins/owl.carousel.min.css">
	<link rel="stylesheet" href="css/plugins/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/plugins/jquery.animatedheadline.css">


	<!-- CSS Base -->
	<link rel="stylesheet" class="back-color" href="css/style-dark.css">
	<link rel="stylesheet" href="css/style-demo.css">

	<!-- Settings Style -->
	<link rel="stylesheet" class="posit-nav" href="css/settings/left-nav.css" />
	<link rel="stylesheet" class="theme-color" href="css/settings/orange.css" />
	<link rel="icon" type="image/png" href="img/favicon.png">

</head>

<body>
	<!-- Main Site -->
	<div id="home">
		<div id="about">
			<div id="resume">
				<div id="portfolio">
					<div id="contact">

						<div class="header-mobile">
							<a class="header-toggle"><i class="fas fa-bars"></i></a>
							<h2>ToBeerApp</h2>
						</div>

						<!-- Left Block -->
						<nav class="header-main" data-simplebar>

							<!-- Logo -->
							<div class="logo">
								<img src="img/favicon.png" alt="" width="90px" height="110px">
							</div>

							<ul>
								<li data-tooltip="Inicio" data-position="top">
									<a href="#home" class="icon-h fas fa-home"></a>
								</li>
								<li data-tooltip="Mesas" data-position="top">
									<a href="#about" class="icon-a fas fa-glass-cheers"></a>
								</li>
								<li data-tooltip="clientes" data-position="top">
									<a href="#resume" class="icon-r fas fa-users"></a>
								</li>
								<li data-tooltip="Inventario" data-position="top">
									<a href="#portfolio" class="icon-p  fas fa-boxes"></a>
								</li>
								<li data-tooltip="Cerrar sesión" data-position="bottom">
									<a href="../php/cerrar_sesion.php" class="icon-c fas fa-power-off"></a>
								</li>
							</ul>

							<!-- Sound wave -->
							<a class="music-bg">
								<div class="lines">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>
								<p> Sound </p>
							</a>
						</nav>

						<!-- Home Section -->
						<div class="pt-home" style="background-image: url('img/clientes.jpg')">
							<section>

								<!-- Banner -->
								<div class="banner">
									<h1 class="main-title"><span class="color-span">To</span>BeerApp</h1>
									<p class="cd-headline rotate-1">
										<span>Soy una app para</span>
										<span class="cd-words-wrapper">
											<b class="is-visible">pedir tus bebidas</b>
											<b>apartar tu mesa</b>
											<b>tener tu cuaenta</b>
											<b>pasarla bien</b>
										</span>
									</p>
								</div>

								<!-- Social -->
								<div class="social">
									<ul>
										<li><a href="https://es-la.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</section>
						</div>

						<!-- Mesas Section -->
						<div class="page pt-about" data-simplebar>
							<?php

							$conec = mysqli_connect("localhost", "root", "", "tobeerapp");

							?>
							<!-- Section Title -->
							<div class="header-page mt-70 mob-mt">
								<h2>Mesas</h2>
								<span></span>
							</div>

							<div class="todo-mesa">
								<div class="table-responsive">
									<table id="tablaMesa" class="table-mesa table-striped table-bordered table-condensed"">
										<thead>
											<tr>
												<th scope=" col">Codigo</th>
												<th scope="col">Disponibilidad</th>
												<th scope="col">Cliente</th>
												<th scope="col">Opciones</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = "SELECT * FROM mesa";
											$result = mysqli_query($conec, $query);

											while ($mostrar = mysqli_fetch_array($result)) {
											?>
												<tr>
													<td><?php echo $mostrar['id_mesa'] ?></td>
													<td><?php echo $mostrar['disponibilidad'] ?> </td>
													<td><?php echo $mostrar['id_cliente'] ?> </td>
													<td>
														<button class="btn btn-danger btnEliminar"><a href=".php?id=<?php echo $mostrar['id_mesa'] ?>" class="eliminar_mesa"><i class="fas fa-trash-alt"></i></a></button>
													</td>
												</tr>
											<?php
											}
											mysqli_free_result($result);
											?>
										</tbody>
									</table>
								</div>
							</div>
							</section>
						</div>

						<!-- Resume Section -->
						<div class="page pt-resume" data-simplebar>
							<section class="container">
								<!-- Section Title -->
								<div class="header-page mt-70 mob-mt">
									<h2>Clientes</h2>
									<span></span>
								</div>
								<div class="todo-cli">
									<div class="table-responsive">
										<table id="tablaCliente" class="table-cli table-striped table-bordered table-condensed">
											<thead>
												<tr>
													<th scope="col">Cedula</th>
													<th scope="col">Nombre</th>
													<th scope="col">Apellido</th>
													<th scope="col">Correo</th>
													<th scope="col">Contraseña</th>
													<th scope="col">Telefono</th>
													<th scope="col">Eliminar</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query = "SELECT * FROM cliente";
												$result = mysqli_query($conec, $query);

												while ($mostrar = mysqli_fetch_array($result)) {
												?>
													<tr>
														<td><?php echo $mostrar['id_cliente'] ?></td>
														<td><?php echo $mostrar['nombre_cliente'] ?> </td>
														<td><?php echo $mostrar['apellido_cliente'] ?> </td>
														<td><?php echo $mostrar['correo_cliente'] ?> </td>
														<td><?php echo $mostrar['contraseña_cliente'] ?> </td>
														<td><?php echo $mostrar['tel_cliente'] ?> </td>
														<td>
															<button class="btn btn-danger btnEliminar"><a href="php/cliente/eliminarCLI.php?id=<?php echo $mostrar['id_cliente'] ?>" class="eliminar_cli"><i class="fas fa-trash-alt"></i></a></button>
														</td>
													</tr>
												<?php
												}
												mysqli_free_result($result);
												?>
											</tbody>
										</table>
									</div>
								</div>
								<script src="js/cliente/confirmacion.js"></script>
							</section>
						</div>

						<!-- Inventario Section -->
						<div class="page pt-portfolio" data-simplebar>
							<section class="container">

								<!-- Section Title -->
								<div class="header-page mt-70 mob-mt">
									<h2>Inventario</h2>
									<span></span>
								</div>
								<!-- Inventario  -->
								<div class="row portfolio-items mt-100 mb-100">

									<!-- Nuevo Producto -->
									<div class="item col-lg-4 col-sm-6 inventario">
										<div calss="todo-invt">
											<!-- Button -->
											<button id="btnuevo" type="button" class="btn btn-success"><a href="../inventario/Insetar_inter.html">Nuevo Producto <i class="fas fa-plus-square"></i></a></button>
										</div>
									</div>
									<!-- Inventario Consulta -->
									<div class="item col-lg-4 col-sm-6 inventario">

										<?php

										$conexion = mysqli_connect("localhost", "root", "", "tobeerapp");
										$invent = "SELECT * FROM inventario";
										?>
										<div class="item col-lg-4 col-sm-6 inventario" style="position: absolute; left: 0px; top: 50px;">
											<div calss="todo-invt">
												<div class="table-responsive">
													<table id="tablaInventario" class="table table-striped table-bordered table-condensed">
														<thead>
															<tr>
																<th scope="col">Id</th>
																<th scope="col">Nombre</th>
																<th scope="col">Descripcion</th>
																<th scope="col">Marca</th>
																<th scope="col">Cantidad</th>
																<th scope="col">Precio</th>
																<th scope="col">Precio unid</th>
																<th scope="col">Opciones</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$result = mysqli_query($conec, $invent);
															while ($mostrar = mysqli_fetch_assoc($result)) {

															?>
																<tr>
																	<td><?php echo $mostrar['id_invent'] ?></td>
																	<td><?php echo $mostrar['nombre_produc'] ?> </td>
																	<td><?php echo $mostrar['descrip_produc'] ?> </td>
																	<td><?php echo $mostrar['marca_produc'] ?> </td>
																	<td><?php echo $mostrar['canti_produc'] ?> </td>
																	<td><?php echo $mostrar['precio_produc'] ?> </td>
																	<td><?php echo $mostrar['preciox1'] ?>
																	<td>
																		<button class="btn btn-primary btnEditar"><a href="../inventario/actualizar_pro.php?id=<?php echo $mostrar['id_invent'] ?>" class="modi"><i class="fas fa-pencil-alt"></i></a></button>
																		<button class="btn btn-danger btnEliminar"><a href="php/invent/eliminarPRP.php?id=<?php echo $mostrar['id_invent'] ?>" class="eliminar"><i class="fas fa-trash-alt"></i></a></button>
																	</td>
																</tr>
															<?php
															}
															mysqli_free_result($result);
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>

								</div>

							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- All Script -->
	<script src="js/confirmacionInv.js" type="text/javascript"></script>
	<script src="js/confirmacionCli.js" type="text/javascript"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/simplebar.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animatedheadline.min.js"></script>
	<script src="js/jquery.easypiechart.js"></script>
	<script src="js/jquery.validation.js"></script>
	<script src="js/tilt.js"></script>
	<script src="js/main.js"></script>
	<script src="js/main-demo.js" type="text/javascript"></script>

</body>

</html>