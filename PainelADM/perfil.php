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

		<!-- Title -->
		<title>Bootstrap 5 Admin Dashboard Template - User Profile</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">

		<!-- *************
			************ Vendor Css Files *************
		************ -->

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

			<!-- Header -->
			<?php
			include '../config/menu_lateral.php';
			?>
			<!-- fim -->

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
							<li class="breadcrumb-item">Perfil</li>
						</ol>
						<!-- Breadcrumb end -->

					</div>
					<!-- Page header end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-8 col-sm-12 col-12">
							<div class="card h-200">
								<div class="card-header">
									<div class="card-title">Share your thoughts</div>
								</div>
								<div class="card-body">
									<div class="share-thoughts-container">
										<textarea class="form-control" rows="3">Hello, </textarea>
										<div class="share-thoughts-footer">
											<div class="share-icons">
												<a href="#">
													<i class="icon-map2"></i>
												</a>
												<a href="#">
													<i class="icon-link"></i>
												</a>
												<a href="#">
													<i class="icon-camera2"></i>
												</a>
												<a href="#">
													<i class="icon-users"></i>
												</a>
											</div>
											<button class="btn btn-primary">Share</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-sm-6 col-6">
							<div class="social-tile h-200">
								<div class="social-icon bg-info">
									<i class="icon-shopping-bag1"></i>
								</div>
								<div>New Projects</div>
								<h2 class="text-grey">18</h2>
							</div>
						</div>
						<div class="col-xl-2 col-sm-6 col-6">
							<div class="social-tile h-200">
								<div class="social-icon bg-danger">
									<i class="icon-twitter1"></i>
								</div>
								<div>Tweets</div>
								<h2 class="text-grey">175</h2>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-sm-12 col-12">
							<div class="card">
								<div class="daily-goal-container">
									<div class="goal-info">
										<h4>Today's Goal</h4>
										<h6>70/100</h6>
									</div>
									<div class="goal-graph">
										<div id="todaysTarget"></div>
										<div class="circle-one"></div>
										<div class="circle-two"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-sm-12 col-12">
							<div class="card">
								<div class="payments-card">
									<h6>Balance</h6>
									<h4>$5699.89</h4>
									<div class="custom-btn-group mt-2">
										<button class="btn btn-success ml-0"><i class="icon-credit-card"></i>Add Funds</button>
										<button class="btn btn-danger"><i class="icon-credit-card"></i>Withdraw</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-sm-12 col-12">
							<div class="card">
								<div class="daily-goal-container">
									<div class="goal-info">
										<h4>Sales Today</h4>
										<h6>2570</h6>
									</div>
									<div class="goal-graph">
										<div id="newCustomers"></div>
										<div class="circle-one"></div>
										<div class="circle-two"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Todo's</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="todo-container">
											<ul class="todo-body">
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot blue"></span>
														<p>Team Meeting</p>
														<p class="dt">Thursday at 3:30 PM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot orange"></span>
														<p>Make new page</p>
														<p class="dt">Wednesday at 10:30 AM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot red"></span>
														<p>Product launch</p>
														<p class="dt">Sunday at Baur Lac, Zurich</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot green"></span>
														<p>Team Meeting</p>
														<p class="dt">Thursday at 3:30 PM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot yellow"></span>
														<p>Make new page</p>
														<p class="dt">Wednesday at 10:30 AM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot green"></span>
														<p>Product launch</p>
														<p class="dt">Sunday at Baur Lac, Zurich</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot blue"></span>
														<p>Team Meeting</p>
														<p class="dt">Thursday at 3:30 PM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot red"></span>
														<p>Make new page</p>
														<p class="dt">Wednesday at 10:30 AM</p>
													</div>
												</li>
												<li class="todo-list">
													<div class="todo-info">
														<span class="dot yellow"></span>
														<p>Product launch</p>
														<p class="dt">Sunday at Baur Lac, Zurich</p>
													</div>
												</li>
												<li class="todo-list done">
													<div class="todo-info">
														<span class="dot green"></span>
														<p>Code Review</p>
														<p class="dt">Friday at 2:00PM</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<!-- Card start -->
							<div class="card">
								<div class="card-header">
									<div class="card-title">Customers</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="top-countries-container">
											<div class="country">
												<div class="country-details">
													<img src="flags/4x3/us.svg" alt="Google Dashboard" />
													<div class="country-name">
														<div class="name">US</div>
														<div class="progress">
															<div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85"
																aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="total-amount">
													<div class="amount">$78</div>
													<div class="amount-title">Millions</div>
												</div>
											</div>
											<div class="country">
												<div class="country-details">
													<img src="flags/4x3/ca.svg" alt="Google Dashboard" />
													<div class="country-name">
														<div class="name">Canada</div>
														<div class="progress">
															<div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
																aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="total-amount">
													<div class="amount">$69</div>
													<div class="amount-title">Millions</div>
												</div>
											</div>
											<div class="country">
												<div class="country-details">
													<img src="flags/4x3/in.svg" alt="Google Dashboard" />
													<div class="country-name">
														<div class="name">India</div>
														<div class="progress">
															<div class="progress-bar bg-warning" role="progressbar" style="width: 67%"
																aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="total-amount">
													<div class="amount">$57</div>
													<div class="amount-title">Millions</div>
												</div>
											</div>
											<div class="country">
												<div class="country-details">
													<img src="flags/4x3/de.svg" alt="Google Dashboard" />
													<div class="country-name">
														<div class="name">Germany</div>
														<div class="progress">
															<div class="progress-bar bg-success" role="progressbar" style="width: 59%"
																aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="total-amount">
													<div class="amount">$51</div>
													<div class="amount-title">Millions</div>
												</div>
											</div>
											<div class="country">
												<div class="country-details">
													<img src="flags/4x3/br.svg" alt="Google Dashboard" />
													<div class="country-name">
														<div class="name">Brazil</div>
														<div class="progress">
															<div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="55"
																aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="total-amount">
													<div class="amount">$48</div>
													<div class="amount-title">Millions</div>
												</div>
											</div>
											<div class="country">
												<div class="country-details">
													<img src="flags/4x3/tr.svg" alt="Google Dashboard" />
													<div class="country-name">
														<div class="name">Turkey</div>
														<div class="progress">
															<div class="progress-bar bg-danger" role="progressbar" style="width: 55%"
																aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="total-amount">
													<div class="amount">$36</div>
													<div class="amount-title">Millions</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Card end -->
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tasks</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div id="radialTasks"></div>
										<ul class="task-list-container">
											<li class="task-list-item">
												<div class="task-icon bg-info">
													<i class="icon-clipboard"></i>
												</div>
												<div class="task-info">
													<h6 class="task-title">New</h6>
													<p class="amount-spend text-info">12</p>
												</div>
											</li>
											<li class="task-list-item">
												<div class="task-icon bg-success">
													<i class="icon-clipboard"></i>
												</div>
												<div class="task-info">
													<h6 class="task-title">Done</h6>
													<p class="amount-spend text-success">15</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Activity</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="timeline-activity">
											<div class="activity-log">
												<p class="log-name">Corey Haggard<small class="log-time">- 9 mins ago</small></p>
												<div class="log-details">Tycoon dashboard has been created<span
														class="text-success ml-1">#New</span></div>
											</div>
											<div class="activity-log">
												<p class="log-name">Gleb Kuznetsov<small class="log-time">- 4 hrs ago</small></p>
												<div class="log-details">
													Farewell day photos uploaded.
													<div class="stacked-images mt-1">
														<img class="sm" src="img/user.png" alt="Google Admin Dashboards">
														<img class="sm" src="img/user2.png" alt="Google Admin Dashboards">
														<img class="sm" src="img/user3.png" alt="Google Admin Dashboards">
														<img class="sm" src="img/user4.png" alt="Google Admin Dashboards">
														<span class="plus sm">+5</span>
													</div>
												</div>
											</div>
											<div class="activity-log">
												<p class="log-name">Yuki Hayashi<small class="log-time">- 7 hrs ago</small></p>
												<div class="log-details">Developed 30 multipurpose Bootstrap 4 Admin Templates</div>
											</div>
											<div class="activity-log">
												<p class="log-name">Nathan James<small class="log-time">- 9 hrs ago</small></p>
												<div class="log-details">Best Design Award</div>
											</div>
											<div class="activity-log">
												<p class="log-name">Elon Musk<small class="log-time">- 4 hrs ago</small></p>
												<div class="log-details">
													Farewell day photos uploaded.
													<div class="stacked-images mt-1">
														<img class="sm" src="img/user5.png" alt="Google Admin Dashboards">
														<img class="sm" src="img/user22.png" alt="Google Admin Dashboards">
														<span class="plus sm">+7</span>
													</div>
												</div>
											</div>
											<div class="activity-log">
												<p class="log-name">Nkio Toyoda<small class="log-time">- 3 hrs ago</small></p>
												<div class="log-details">Developed 30 multipurpose Bootstrap 4 Admin Templates</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Income</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="income-stats-container">
											<div class="income-stats">
												<div class="income-graph">
													<div id="overallSales"></div>
												</div>
												<div class="income-info">
													<h3>75<sup>k</sup></h3>
													<p>Overall Income</p>
												</div>
											</div>
											<div class="income-stats">
												<div class="income-graph">
													<div id="overallExpenses"></div>
												</div>
												<div class="income-info">
													<h3>40<sup>k</sup></h3>
													<p>Overall Expenses</p>
												</div>
											</div>
											<div class="income-stats">
												<div class="income-graph">
													<div id="overallIncome"></div>
												</div>
												<div class="income-info">
													<h3>35<sup>k</sup></h3>
													<p>Overall Savings</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Chat</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="chats">
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="img/user5.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">Explore the history of the classic Lorem Ipsum passage and generate.
												</div>
												<div class="chats-hour">08:55 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="img/user12.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">Your own text using any number of characters, words, sentences or
													paragraphs.</div>
												<div class="chats-hour">08:56 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="img/user10.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">Commonly used as placeholder text in the graphic and print industries.
												</div>
												<div class="chats-hour">08:57 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="img/user22.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">Lorem Ipsum's origins extend far back to a scrambled Latin passage from
													Cicero in the middle ages.</div>
												<div class="chats-hour">08:59 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="img/user17.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">In publishing and graphic design, lorem ipsum is a filler text or
													greeking commonly used to demonstrate the textual elements.</div>
												<div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="img/user9.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">A graphic document or visual presentation. Replacing meaningful content
													with placeholder text allows designers to design the form of the content before the content
													itself has been produced.</div>
												<div class="chats-hour">09:00 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-left">
												<div class="chats-avatar">
													<img src="img/user12.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">James</div>
												</div>
												<div class="chats-text">Lorem Ipsum is also known as: Greeked text, blind text, placeholder
													text, dummy content, filler text, lipsum, and mock-content.</div>
												<div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
											</li>
											<li class="chats-right">
												<div class="chats-avatar">
													<img src="img/user3.png" alt="Admin Templates and Dashboards">
													<div class="chats-name">You</div>
												</div>
												<div class="chats-text">Lorem ipsum has become the industry standard for design mockups and
													prototypes. By adding a little bit of Latin to a mockup.</div>
												<div class="chats-hour">09:01 <span class="icon-done_all"></span></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Photos</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="photo-gallery">
											<div class="row gutters">
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user2.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user3.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user4.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user5.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user6.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user7.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user8.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user9.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user10.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user11.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user12.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user12.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user13.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-md-4 col-sm-6 col-12">
													<img src="img/user14.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user15.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user16.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user17.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user18.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user19.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user20.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user21.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user22.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user23.png" class="img-fluid" alt="Google Dashboard">
												</div>
												<div class="col-lg-3 col-sm-4 col-12">
													<img src="img/user24.png" class="img-fluid" alt="Google Dashboard">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bookmarks</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="bookmarks">
											<li>
												<a href="#">Bootstrap admin template</a>
											</li>
											<li>
												<a href="#">Images resources</a>
											</li>
											<li>
												<a href="#">Best admin templates 2023</a>
											</li>
											<li>
												<a href="#">Javascript libraries</a>
											</li>
											<li>
												<a href="#">Angular widgets</a>
											</li>
											<li>
												<a href="#">UX library</a>
											</li>
											<li>
												<a href="#">Bootstrap admin template</a>
											</li>
											<li>
												<a href="#">Images resources</a>
											</li>
											<li>
												<a href="#">Best admin templates 2023</a>
											</li>
											<li>
												<a href="#">Javascript libraries</a>
											</li>
											<li>
												<a href="#">Angular widgets</a>
											</li>
											<li>
												<a href="#">UX library</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Projects</div>
								</div>
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table projects-table">
											<thead>
												<tr>
													<th>Client</th>
													<th>Location</th>
													<th>Budjet</th>
													<th>Progress</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="project-details">
															<img src="img/user6.png" class="avatar" alt="Admin Templates and Dashboards">
															<div class="project-info">
																<p>Valda Purdy</p>
																<p>Ecommerce Store</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>California, LA</p>
																<p>USA</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>$65,820</p>
																<p>$31,000 Paid</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>30% completed</p>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30"
																		aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<div class="status approved">
																	<i class="icon-check_circle"></i> Completed
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="project-details">
															<img src="img/user22.png" class="avatar" alt="Admin Templates and Dashboards">
															<div class="project-info">
																<p>Désirée Nosbusch</p>
																<p>Television presenter</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>Luxembourg</p>
																<p>Europe</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>$86,409</p>
																<p>$72,000 Paid</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>45% completed</p>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45"
																		aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<div class="status pending">
																	<i class="icon-info1"></i> Ongoing
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="project-details">
															<img src="img/user5.png" class="avatar" alt="Admin Templates and Dashboards">
															<div class="project-info">
																<p>Ichiro Suzuki</p>
																<p>Baseball outfielder</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>Nagoya</p>
																<p>Japan</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>$92,498</p>
																<p>$56,000 Paid</p>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<p>75% completed</p>
																<div class="progress">
																	<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
																		aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="project-details">
															<div class="project-info">
																<div class="status rejected">
																	<i class="icon-circle-with-cross"></i> Cancelled
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
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
								© Bootstrap Gallery 2023
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

		<!-- Polyfill JS -->
		<script src="vendor/polyfill/polyfill.min.js"></script>
		<script src="vendor/polyfill/class-list.min.js"></script>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/custom/home/radialTasks.js"></script>

		<!-- Circliful js -->
		<script src="vendor/circliful/circliful.min.js"></script>
		<script src="vendor/circliful/circliful.custom.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>

</html>