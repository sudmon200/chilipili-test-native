<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chili Pili</title>

		<!-- Montserrat Font for whole website -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS only -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/imagehover.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Custom CSS file -->
	<link rel="stylesheet" href="css/utils.css">
	<link rel="stylesheet" href="css/style.css">
	</link>
	<link rel="stylesheet" href="css/responsive.css">
	</link>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery.elevatezoom.js"></script>
	<style>
	li {
		font-size: 20px;
	}

	.navbar-light .navbar-nav .nav-link:focus,
	.navbar-light .navbar-nav .nav-link:hover {
		color: var(--color1) !important;
	}

	.active {
		color: var(--color1);
		border-bottom: 2px solid var(--color1);
		border-width: 20%;
		text-align: center;
	}

	.footer::before {
		content: "";
		background-image: url('media/logo.png');
		position: absolute;
		background-size: cover;
		opacity: 0.70;
    }
	</style>
</head>

<body>
	<?php include 'helper.php'; ?>
	<nav class="navbar navbar-expand-md navbar-light" id="navbar-main" style="background-color:transparent">
		<a class="navbar-brand" href="index.php">
			<img src="media/logo.png" class="logo" alt="Chili Pili">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ml-4 mr-4" id="index.php">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item ml-4 mr-4 dropdown">
						<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Our Services
						</a>
						<ul class="dropdown-menu " role="menu" aria-labelledby="dropdownMenu">
							<li class="dropdown-submenu">
								<a class="dropdown-item" href="preschool/index.php">Preschool</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="#">Life at Chili Pili</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/life-day.php">A Day in Chili Pili</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/life-safety.php">Safety at Chili Pili</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/life-outdoor.php">Outdoor Play At Chili Pili</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/life-day.php">Infrastructure</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/life-celebrations.php">Celebrations</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="#">Parents Corner</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/parents-guildlines.php">Guidelines For Parents</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/parents-speak.php">Parents Speak</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/parents-after.php">What After Chili Pili</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/parents-involved.php">Be Involved</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="#">Curriculum</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a class="dropdown-item" href="media/pdf/Syllabus.pdf" onclick="openPdf(event, '../media/pdf/Syllabus.pdf', 'newpage.php')">Syllabus</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/curriculum-methods.php">Our Methods</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/curriculum-ensuring.php">Ensuring Development Of Every Child</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/curriculum-innovative.php">Our Own Innovative Phonics Approach</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="#">Gallery</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/gallery-classroom.php">Classrooom</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/gallery-play.php">Play</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/gallery-montessori.php">Montessori</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/gallery-festival.php">Festival</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/gallery-craft.php">Craft</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="#">About Us</a>
										<ul class="dropdown-menu">
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/about-teacher.php">Meet Our Teachers</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/about-story.php">Our Story</a></li>
											<li class="dropdown-item"><a class="dropdown-item" href="preschool/about-management.php">Management Team</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown-item"><a class="dropdown-item" href="montessori.php">Montessori at Home</a></li>
							<li class="dropdown-item"><a class="dropdown-item" href="language-training.php">New Language Training</a></li>
							<li class="dropdown-item"><a class="dropdown-item" href="phonics.php">Phonics</a></li>
							<li class="dropdown-item"><a class="dropdown-item" href="alternate-school.php">Alternate School</a></li>
							<li class="dropdown-item"><a class="dropdown-item" href="teacher-training.php">Teacher Training</a></li>
						</ul>
				</li>
				<li class="nav-item ml-4 mr-4" id="about-us.php">
					<a class="nav-link" href="about-us.php">About Us</a>
				</li>
				<li class="nav-item ml-4 mr-4" id="blog.php">
					<a class="nav-link" href="blog.php">Blog</a>
				</li>
				<li class="nav-item ml-4 mr-4" id="contact-us.php">
					<a class="nav-link" href="contact-us.php">Contact Us</a>
				</li>
				<li class="nav-item ml-4 mr-4" id="store.php">
					<a class="nav-link" href="store.php">Shop</a>
				</li>

			</ul>
		</div>
	</nav>