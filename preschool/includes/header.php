<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chili Pili</title>

	<!-- Bootstrap CSS only -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="../css/imagehover.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/style.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Custom CSS file -->
	<link rel="stylesheet" href="../css/utils.css"></link>
	<link rel="stylesheet" href="../css/responsive.css"></link>
	<style>
		li{
			font-size:20px;
		}
		.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    	color: var(--color1) !important;
		}
		.active {
		color: var(--color1) ;
		border-bottom:2px solid var(--color1);
		border-width:20%;
		text-align:center;
		}
	</style>
</head>

<body>
	<?php include 'helper.php'; ?>
	<nav class="navbar navbar-expand-md navbar-light" id="navbar-main"style="background-color:transparent">
		<a class="navbar-brand" href="index.php">
			<img src="../media/logo.png" class="logo" alt="Chili Pili">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ml-4 mr-4" id="index.php">
					<a class="nav-link" href="../index.php">Home</a>
				</li>
				<li class="nav-item ml-4 mr-4" id="about-us.php">
					<a class="nav-link" href="../about-us.php">About Us</a>
				</li>
				<li class="nav-item ml-4 mr-4 dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Our Services
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="../montessori.php">Montessori at Home</a>
						<a class="dropdown-item" href="../language-training.php">New Language Training</a>
						<a class="dropdown-item" href="../phonics.php">Phonics</a>
						<a class="dropdown-item" href="../alternate-school.php">Alternate School</a>
						<a class="dropdown-item" href="../teacher-training.php">Teacher Training</a>
					</div>
				</li>
				<li class="nav-item ml-4 mr-4" id="blog.php">
					<a class="nav-link" href="../blog.php">Blog</a>
				</li>
				<li class="nav-item ml-4 mr-4" id="contact-us.php">
					<a class="nav-link" href="../contact-us.php">Contact Us</a>
				</li>
				<li class="nav-item ml-4 mr-4" id="store.php">
					<a class="nav-link" href="../store.php">Shop</a>
				</li>

			</ul>
		</div>
	</nav>

