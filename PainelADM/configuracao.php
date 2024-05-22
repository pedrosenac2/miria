<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Admin Dashboard Templates">
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="img/favicon.svg" />

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="fonts/style.css">
	<!-- Main css -->
	<link rel="stylesheet" href="css/main.css">


</head>

<body>

	<!-- Page wrapper start -->
	<div class="page-wrapper sidebar-mini">

		<!-- Sidebar wrapper start -->
		<nav id="sidebar" class="sidebar-wrapper">

			<!-- Sidebar brand start  -->
			<div class="sidebar-brand">
				<a href="index.html" class="logo">
					<img src="img/logo.svg" alt="Bootstrap Gallery">
				</a>
			</div>
			<!-- Sidebar brand end  -->

			<!-- User profile start -->
			<div class="sidebar-user-details">
				<div class="user-profile">
					<img src="../assets/img/mm.jpg" class="profile-thumb" alt="Admin Dashboards">
					<span class="status-label"></span>
				</div>
				<h6 class="profile-name">Miriã Maugé</h6>
				<div class="profile-actions">
					<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Configurações">
						<i class="icon-settings1"></i>
					</a>
					<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="X">
						<i class="icon-twitter1"></i>
					</a>
					<a href="../config/logout.php" class="red" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="Sair">
						<i class="icon-power1"></i>
					</a>
				</div>
			</div>
			<!-- User profile end -->

			<!-- Sidebar content start -->
			<div class="sidebar-content">

				<!-- Sidebar content start -->
				<?php include '../config/menu_lateral.php'; ?>
				<!-- Sidebar content end -->

			</div>
			<!-- Sidebar content end -->

		</nav>
		<!-- Sidebar wrapper end -->

		<!-- Page content start  -->
		<div class="page-content">

			<!-- Header -->
			<?php
			include '../config/header.php';
			?>
			<!-- fim -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">

					<!-- Breadcrumb start -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Configurações da conta</li>
					</ol>
					<!-- Breadcrumb end -->

				</div>
				<!-- Page header end -->

				<!-- Row start -->
				<div class="row gutters">
					<div class="col-lg-3 col-sm-12 col-12">
						<div class="card h-100">
							<div class="card-body">
								<div class="account-settings">
									<div class="user-profile">
										<div class="user-avatar">
											<img src="../assets/img/mm.jpg" alt="Admin Templates and Dashboards" />
										</div>
										<h5 class="user-name">Nome Usuario</h5>
										<h6 class="user-email">emailusuario@gmail.com</h6>
									</div>
									<div class="about">
										<h5>Sobre</h5>
										<p>Miriã Maugé é uma visionária que acredita no poder transformador do
											conhecimento e na capacidade intrínseca de cada indivíduo para alcançar seu
											máximo potencial. Com formação em psicologia e anos de experiência em
											coaching e consultoria, Miriã traz uma abordagem holística para o
											desenvolvimento humano, integrando mente, corpo e espírito.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-sm-12 col-12">
						<div class="card h-100">
							<div class="card-body">
								<div class="row gutters">
									<div class="col-sm-12">
										<h6 class="mb-2 text-primary">Detalhes Pessoais</h6>
									</div>
									<div class="col-sm-6 col-12">
										<div class="form-group">
											<label for="fullName">Nome Completo</label>
											<input type="text" class="form-control" id="fullName"
												placeholder="Enter full name">
										</div>
									</div>
									<div class="col-sm-6 col-12">
										<div class="form-group">
											<label for="eMail">Email</label>
											<input type="email" class="form-control" id="eMail"
												placeholder="Enter email ID">
										</div>
									</div>
									<div class="col-sm-6 col-12">
										<div class="form-group">
											<label for="phone">Telefone</label>
											<input type="text" class="form-control" id="phone"
												placeholder="Enter phone number">
										</div>
									</div>
									<div class="col-sm-12">
										<h6 class="mt-3 mb-2 text-primary">Endereço</h6>
									</div>
									<div class="col-sm-6 col-12">
										<div class="form-group">
											<label for="Street">Rua</label>
											<input type="name" class="form-control" id="Street"
												placeholder="Enter Street">
										</div>
									</div>
								</div>
								<div class="row gutters">
									<div class="col-sm-12">
										<div class="text-right">
											<button type="button" id="submit" name="submit"
												class="btn btn-secondary">Cancelar</button>
											<button type="button" id="submit" name="submit"
												class="btn btn-primary">Atualizar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row end -->

			</div>
			<!-- Main container end -->

			<!-- Container fluid start -->
			<div class="container-fluid">
				<!-- Row start -->
				<div class="row gutters">
					<div class="col-12">
						<!-- Footer start -->
						<div class="footer">
							© Miriã Maugé 2024
						</div>
						<!-- Footer end -->
					</div>
				</div>
				<!-- Row end -->
			</div>
			<!-- Container fluid end -->

		</div>
		<!-- Page content end -->

	</div>
	<!-- Page wrapper end -->

	<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/moment.js"></script>


	<!-- *************
			************ Vendor Js Files *************
		************* -->
	<!-- Slimscroll JS -->
	<script src="vendor/slimscroll/slimscroll.min.js"></script>
	<script src="vendor/slimscroll/custom-scrollbar.js"></script>


	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>

</html>