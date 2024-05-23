<?php 
    include '../config/controle-sessao.php';
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

	<style>
		.form-group {
			margin-bottom: 1rem;
		}

		.form-group label {
			margin-top: 60px;
			display: block;
			font-weight: bold;
			margin-bottom: 0.5rem;
			font-size: 20px;
		}

		.form-group input[type="text"],
		.form-group textarea,
		.form-group input[type="file"] {
			width: 600px;
			padding: 0.5rem;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.form-group button[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 0.5rem 1rem;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-transform: uppercase;
		}

		.form-group button[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>

</head>

<body>

	<!-- Loading starts -->
	<!-- <div id="loading-wrapper">
		<div class="spinner-border" role="status">
			<span class="sr-only">Carregando...</span>
		</div>
	</div> -->
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
					<!-- <a href="account-settings.html" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="Configurações">
						<i class="icon-settings1"></i>
					</a>
					<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title=""
						data-original-title="X">
						<i class="icon-twitter1"></i>
					</a> -->
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
				<?php include 'includes/menu_lateral.php'; ?>
				<!-- sidebar menu end -->

			</div>
			<!-- Sidebar content end -->

		</nav>
		<!-- Sidebar wrapper end -->

		<!-- Page content start  -->
		<div class="page-content">

		<!-- Header -->
		<?php 
		include 'includes/header.php';
		?>
		<!-- fim -->

			<!-- Main container start -->
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">

				</div>

				<div class="titulo">
					<h1 class="text-start" style="margin-left: 34px;">Cadastre seus E-Books</h1>
					<div class="container">
						<form action="../config/ebooks-add.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" id="nome" name="nome" required>
							</div>
							<div class="form-group">
								<label for="descricao">Descrição:</label>
								<textarea id="descricao" name="descricao" required></textarea>
							</div>
							<div class="form-group">
								<label for="imagem">Imagem:</label>
								<input type="file" id="imagem" name="imagem" accept="image/*" required>
							</div>
							<div class="form-group">
								<label for="imagem">Arquivo PDF:</label>
								<input type="file" id="pdfFile" name="pdfFile" accept=".pdf" required>
							</div>
							<div class="form-group">
								<button type="submit">Enviar</button>
							</div>
						</form>
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

	<!-- Slimscroll JS -->
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