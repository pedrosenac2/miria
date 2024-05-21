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

			<!-- Quick links start -->
			<div class="sidebar-user-details">
				<div class="user-profile">
					<img src="img/user2.png" class="profile-thumb" alt="Admin Dashboards">
					<span class="status-label"></span>
				</div>
				<h6 class="profile-name">Yuki Hayashi</h6>
				<div class="profile-actions">
					<a href="account-settings.html" class="blue-bg" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="Settings">
						<i class="icon-settings1"></i>
					</a>
					<a href="login.html" class="red-bg" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="Logout">
						<i class="icon-power1"></i>
					</a>
				</div>
			</div>
			<!-- Quick links end -->

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
											<img src="img/user2.png" alt="Admin Templates and Dashboards" />
										</div>
										<h5 class="user-name">Nome Usuario</h5>
										<h6 class="user-email">emailusuario@gmail.com</h6>
									</div>
									<div class="about">
										<h5>Sobre</h5>
										<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and
											human experiences.
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
											<label for="Street">Street</label>
											<input type="name" class="form-control" id="Street"
												placeholder="Enter Street">
										</div>
									</div>
								</div>
								<div class="row gutters">
									<div class="col-sm-12">
										<div class="text-right">
											<button type="button" id="submit" name="submit"
												class="btn btn-secondary">Cancel</button>
											<button type="button" id="submit" name="submit"
												class="btn btn-primary">Update</button>
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