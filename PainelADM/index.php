<?php

include '../config/conexao.php';

$sql_cursos = "SELECT tb_curso.nome, tb_curso.descricao, tb_curso.id_img, tb_img.img 
FROM tb_curso 
INNER JOIN tb_img 
ON tb_curso.id_img = tb_img.id;";
$stmt_cursos = $conn->query($sql_cursos);

$sql_ebooks = "SELECT * FROM tb_ebooks";
$stmt_ebooks = $conn->query($sql_ebooks);

?>


<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Admin Dashboard Templates">
	<meta name="author" content="Bootstrap Gallery" />
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="img/favicon.svg" />

	<!-- Title -->
	<title>Admin Dashboard</title>


	<!-- *************
			************ Common Css Files *************
		************ -->
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="fonts/style.css">
	<!-- Main css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- Chat css -->
	<link rel="stylesheet" href="css/chat.css">

	<!-- *************
			************ Vendor Css Files *************
		************ -->

</head>

<body>

	<!-- Loading starts -->
	<div id="loading-wrapper">
		<div class="spinner-border" role="status">
			<span class="sr-only">Carregando...</span>
		</div>
	</div>
	<!-- Loading ends -->

	<!-- Page wrapper start -->
	<div class="page-wrapper sidebar-mini">

		<!-- Sidebar wrapper start -->
		<nav id="sidebar" class="sidebar-wrapper">

			<!-- Sidebar brand start  -->
			<div class="sidebar-brand">
				<!-- <a href="index.html" class="logo">
						<img src="img/logo.png" alt="Logo" />
					</a> -->
				<a href="index.php" class="logo">
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
					<a href="account-settings.html" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="Configurações">
						<i class="icon-settings1"></i>
					</a>
					<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="X">
						<i class="icon-twitter1"></i>
					</a>
					<a href="login.html" class="red" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="Sair">
						<i class="icon-power1"></i>
					</a>
				</div>
			</div>
			<!-- User profile end -->

			<!-- Sidebar content start -->
			<div class="sidebar-content">

				<!-- sidebar menu start -->
				<div class="sidebar-menu">
					<ul>
						<li class="sidebar-dropdown active">
							<a href="index.php">
								<i class="icon-home2"></i>
								<span class="menu-text">Home</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="index.php" class="current-page">HOME</a>
									</li>
									<li>
										<a href="cadastroCurso.html">Cadastrar Curso</a>
									</li>
									<li>
										<a href="cadastroEbook.html">Cadastrar E-book</a>
									</li>
									<li>
										<a href="#">Cadastrar Usuarios</a>
									</li>
									<!-- <li>
											<a href="dashboard4.html">Dashboard 4</a>
										</li> -->
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-calendar1"></i>
								<span class="menu-text">Eventos</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="#">Calendario</a>
									</li>
							</div>
						</li>

						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-unlock"></i>
								<span class="menu-text">Authentication</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="../pages/login.php">Login</a>
									</li>
									<li>
										<a href="signup.html">Sair</a>
									</li>
									<li>
										<a href="forgot-pwd.html">Esqueci a senha</a>
									</li>
									<!-- <li>
											<a href="coming-soon.html">Coming Soon</a>
										</li> -->
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!-- sidebar menu end -->

			</div>
			<!-- Sidebar content end -->

		</nav>
		<!-- Sidebar wrapper end -->

		<!-- Page content start  -->
		<div class="page-content">

			<!-- Header start -->
			<header class="header">
				<div class="toggle-btns">
					<a id="toggle-sidebar" href="#">
						<i class="icon-menu"></i>
					</a>
					<a id="pin-sidebar" href="#">
						<i class="icon-menu"></i>
					</a>
				</div>
				<div class="header-items">
					<!-- Custom search start -->
					<div class="custom-search">
						<input type="text" class="search-query" placeholder="Search here ...">
						<i class="icon-search1"></i>
					</div>
					<!-- Custom search end -->

					<!-- Header actions start -->
					<ul class="header-actions">
						<li class="dropdown d-none d-sm-block">
							<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
								<i class="icon-calendar1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
								<div class="dropdown-menu-header">
									Eventos (10)
								</div>
								<ul class="header-notifications">
									<li>
										<a href="#">
											<div class="user-img away">
												<img src="img/user6.png" alt="Admin Template">
											</div>
											<div class="details">
												<div class="user-title">Evento 1</div>
												<div class="noti-details">Membership has been ended.</div>
												<div class="noti-date">Today, 07:30 pm</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="user-img busy">
												<img src="img/user13.png" alt="Premium Admin Dashboards">
											</div>
											<div class="details">
												<div class="user-title">Evento 2</div>
												<div class="noti-details">Approved new design.</div>
												<div class="noti-date">Today, 12:00 am</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="user-img online">
												<img src="img/user19.png" alt="Premium Admin Dashboards">
											</div>
											<div class="details">
												<div class="user-title">Evento 3</div>
												<div class="noti-details">Check out every table in detail.</div>
												<div class="noti-date">Today, 04:00 pm</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown d-none d-sm-block">
							<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
								<i class="icon-star2"></i>
								<span class="count-label blue"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
								<div class="dropdown-menu-header">
									Salvos (21)
								</div>
								<div class="customScroll5">
									<ul class="bookmarks p-3">
										<li>
											<a href="#">Bootstrap admin template</a>
										</li>
										<li>
											<a href="#">Images resources</a>
										</li>
										<li>
											<a href="#">Best admin templates 2023</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="dropdown d-none d-sm-block">
							<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
								<i class="icon-bell"></i>
								<span class="count-label"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
								<div class="dropdown-menu-header">
									Notificações (40)
								</div>
								<ul class="header-notifications">
									<li>
										<a href="#">
											<div class="user-img away">
												<img src="img/user10.png" alt="Bootstrap Admin Panel">
											</div>
											<div class="details">
												<div class="user-title">Pessoa 1</div>
												<div class="noti-details">Membership has been ended.</div>
												<div class="noti-date">Today, 07:30 pm</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="user-img busy">
												<img src="img/user10.png" alt="Admin Panel">
											</div>
											<div class="details">
												<div class="user-title">Pessoa 2</div>
												<div class="noti-details">Approved new design.</div>
												<div class="noti-date">Today, 12:00 am</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="user-img online">
												<img src="../assets/img/mm.jpg" alt="Admin Template">
											</div>
											<div class="details">
												<div class="user-title">Pessoa 3</div>
												<div class="noti-details">Check out every table in detail.</div>
												<div class="noti-date">Today, 04:00 pm</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown user-settings">
							<a href="#" id="userSettings" data-toggle="dropdown" aria-haspopup="true">
								<img src="../assets/img/mm.jpg" class="user-avatar" alt="Top Admin Dashboards">
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
								<div class="header-profile-actions">
									<div class="header-user-profile">
										<div class="header-user">
											<img src="../assets/img/mm.jpg" alt="Admin Template">
										</div>
										<h5>Miriã Maugé</h5>
										<p>ADM</p>
									</div>
									<a href="user-profile.html"><i class="icon-user1"></i>Perfil</a>
									<a href="account-settings.html"><i class="icon-settings1"></i>Configurações</a>
									<a href="login.html"><i class="icon-log-out1"></i>Sair</a>
								</div>
							</div>
						</li>
					</ul>
					<!-- Header actions end -->
				</div>
			</header>
			<!-- Header end -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">

					<!-- Breadcrumb start -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Bem Vinda, Miriã</li>
					</ol>
					<!-- Breadcrumb end -->

				</div>

				<!-- Card Curso -->
				<div class="titulo">
					<h1 class="text-start" style="margin-left: 34px;">Cursos cadastrados</h1>
					<div class="row" style="margin-top: 50px;">
						<?php
						if ($row = $stmt_cursos->fetch(PDO::FETCH_ASSOC)):
							do { ?>
								<div class="col-md-6">
									<div class="card" style="width: 38rem;">
										<?php echo ' <img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '">'; ?>
										<div class="card-body">
											<h5 class="card-title">
												<?= $row['nome'] ?>
											</h5>
											<p class="card-text">
												<?= $row['descricao'] ?>
											</p>
											<a href="#" class="btn btn-primary">Ver Mais</a>
										</div>
									</div>
								</div>
							<?php } while ($row = $stmt_cursos->fetch(PDO::FETCH_ASSOC));
						else: ?>
							<p>Não há cursos cadastrados.</p>
						<?php endif; ?>
					</div>
				</div>

				<!-- Card Curso -->
				<div class="titulo">
					<h1 class="text-start" style="margin-left: 34px;">E-books cadastrados</h1>
					<div class="row" style="margin-top: 50px;">
						<?php
						if ($row = $stmt_ebooks->fetch(PDO::FETCH_ASSOC)):
							do { ?>
								<div class="col-md-4">
									<div class="card" style="width: 18rem;">
										<?php echo ' <img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '">'; ?>
										<div class="card-body">
											<h5 class="card-title">
												<?= $row['nome'] ?>
											</h5>
											<p class="card-text">
												<?= $row['descricao'] ?>
											</p>
											<a href="#" class="btn btn-primary">Ver Mais</a>
										</div>
									</div>
								</div>
							<?php } while ($row = $stmt_ebooks->fetch(PDO::FETCH_ASSOC));
						else: ?>
							<p>Não há cursos cadastrados.</p>
						<?php endif; ?>
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
						© MiriãMaugé 2024
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

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/moment.js"></script>

	<script src="vendor/slimscroll/slimscroll.min.js"></script>
	<script src="vendor/slimscroll/custom-scrollbar.js"></script>

	<!-- Polyfill JS -->
	<script src="vendor/polyfill/polyfill.min.js"></script>
	<script src="vendor/polyfill/class-list.min.js"></script>

	<!-- Apex Charts -->
	<script src="vendor/apex/apexcharts.min.js"></script>
	<script src="vendor/apex/custom/home/lineRevenueGradientGraph.js"></script>
	<script src="vendor/apex/custom/home/radialTasks.js"></script>
	<script src="vendor/apex/custom/home/lineNewCustomersGradientGraph.js"></script>

	<!-- Peity Charts -->
	<script src="vendor/peity/peity.min.js"></script>
	<script src="vendor/peity/custom-peity.js"></script>

	<!-- Circleful Charts -->
	<script src="vendor/circliful/circliful.min.js"></script>
	<script src="vendor/circliful/circliful.custom.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	<!-- Bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
		integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
		crossorigin="anonymous"></script>

</body>

</html>