<?php

include '../config/controle-sessao.php';

include '../config/conexao.php';

$sql_cursos = "SELECT tb_curso.id ,tb_curso.nome, tb_curso.descricao, tb_curso.id_img, tb_img.img 
FROM tb_curso 
INNER JOIN tb_img 
ON tb_curso.id_img = tb_img.id";
$stmt_cursos = $conn->query($sql_cursos);
$dados_cursos = $stmt_cursos->fetchAll(PDO::FETCH_ASSOC);


$sql_ebooks = "SELECT tb_ebooks.id, tb_ebooks.nome, tb_ebooks.descricao, tb_ebooks.imagem FROM tb_ebooks";
$stmt_ebooks = $conn->query($sql_ebooks);
$dados_ebooks = $stmt_ebooks->fetchAll(PDO::FETCH_ASSOC);


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
					<a href="configuracao.php" data-toggle="tooltip" data-placement="top" title="" data-original-title="Configurações">
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
						<li class="breadcrumb-item">Painel Administrativo</li>
					</ol>
					<!-- Breadcrumb end -->

				</div>

				<!-- Card Curso -->
				<center>
					<div class="titulo">
						<h1 class="text-start">Cursos cadastrados</h1>
						<div class="row" style="margin-top: 50px;">
							<?php
							foreach ($dados_cursos as $row) {
								?>
								<div class="col-md-6">
									<div class="card" style="width: 38rem;">
										<?php
										echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" style="width:100%; max-height:300px; object-fit:cover; margin-bottom:15px;">';
										?>
										<div class="card-body">
											<h5 class="card-title">
												<?= $row['nome'] ?>
											</h5>
											<p class="card-text">
												<?= $row['descricao'] ?>
											</p>
											<button class="btn btn-primary" data-toggle="modal"
												data-target="#meuModal<?= $row['id']; ?>">Visualizar</button>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>



					<!-- Modal do Curso-->
					<?php
					foreach ($dados_cursos as $row) {
						?>
						<div class="modal fade" id="meuModal<?= $row['id']; ?>" tabindex="-1" role="dialog"
							aria-labelledby="meuModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="meuModalLabel">Área de Ações</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-6">
												<?php
												echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($row['img']) . '"style="width:100%; height:100%;">';
												?>
											</div>
											<div class="col-md-6">
												<h2>
													<?= $row['nome'] ?>
												</h2>
												<p>
													<?= $row['descricao'] ?>
												</p>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<a href="../config/curso-edit.php?id=<?php echo $row['id'] ?>"
											class="btn btn-primary btn-sm">Editar</a>
										<button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
										<a href="../config/curso-del.php?id=<?php echo $row['id'] ?>"
											class="btn btn-danger btn-sm">Excluir</a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

					<!-- Card Ebook -->
					<div class="titulo">
						<h1 class="text-start">Ebooks cadastrados</h1>
						<div class="row" style="margin-top: 50px;">
							<?php
							foreach ($dados_ebooks as $row) {
								?>
								<div class="col-md-6">
									<div class="card" style="width: 38rem;">
										<?php
										echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '"style="width:100%; height:100%;">';
										?>
										<div class="card-body">
											<h5 class="card-title">
												<?= $row['nome'] ?>
											</h5>
											<p class="card-text">
												<?= $row['descricao'] ?>
											</p>
											<button class="btn btn-primary" data-toggle="modal"
												data-target="#meuModalEbook<?= $row['id']; ?>">Visualizar</button>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>

					<!-- Modal do Ebook-->
					<?php
					foreach ($dados_ebooks as $row) {
						?>
						<div class="modal fade" id="meuModalEbook<?= $row['id']; ?>" tabindex="-1" role="dialog"
							aria-labelledby="meuModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="meuModalLabel">Área de Ações</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-6">
												<?php
												echo '<img class="card-img-top" alt="Card Imagem" src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" style="width:100%; height:100%;">';
												?>
											</div>
											<div class="col-md-6">
												<h2>
													<?= $row['nome'] ?>
												</h2>
												<p>
													<?= $row['descricao'] ?>
												</p>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<a href="../config/ebooks-edit.php?id=<?php echo $row['id'] ?>"
											class="btn btn-primary btn-sm">Editar</a>
										<button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
										<a href="../config/ebooks-del.php?id=<?php echo $row['id'] ?>"
											class="btn btn-danger btn-sm">Excluir</a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</center>
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