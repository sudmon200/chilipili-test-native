<?php

include 'includes/header.php';



if (isset($_POST['submit'])) {
    
	$name = sanitize($_POST['name']);
	$to = 'admin@chilipili.in';
    $from = sanitize($_POST['email']);
    $number = sanitize($_POST['number']);
    $callBack = sanitize($_POST['call']);
	$subject = sanitize($_POST['subject']);
	$query = sanitize($_POST['query']);
	
	$header = "From : " . $from . "/r/n";

	// $message = "Mail From" . $name . "Call Back Time" . $callBack . "Query of the mail" . $query . "Mail sent from Alternate School";

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<body>
	<p>Enquire & Join Query</p>
	<hr>
	<p>Hi, My Name Is </p>" . $name . "
	<p>and My Email Id is </p>" . $from . "
	<p>I needed to know following query</p>" . $query . "
	<p>My contact number is </p>" . $number . "
	<p> Please reach me at this number between </p>" . $callBack . "	
	<p>Regards</p>
	</body>
	</html>
	";


	mail($to,$subject,$message,$headers);
}
?>

<div class="container header-top m-def">
	<h2 class="font1">
		SaPS (Small And Personal School)
	</h2>
</div>

<section class="alternate-bg">
	<div>
		<img src="media/final-asset/branch-1.svg" class="branch1" alt="branch">
	</div>
	<div class="m-side internal-header">
		<div class="side1">
			<div class="section-head">
				<h4 class="font1 internal-head">Relevance of SaPS</h4>
			</div>
			<p class="internal-para font3">Imagine a school where there are no more than 10 students in a class as opposed to forty to sixty students crammed in a room. Where the teacher knows the learning requirement of every child at a personal level and guides them individually as opposed to a system where a teacher have to cater to over 250 students in a span of a day. if you think that the former method is more beneficial for your child's education, read on.</p>
		</div>
		<div class="side2">
			<img src="media/Image1b_AL-min.png" alt="Special-leaf">
		</div>
	</div>

	<div class="flakes" style="background-image:url('media/final-asset/leaf_background.png')">
		<div class="alternate-text m-side font3">
			<p>Chili Pili SaPS are designed as an elegant and effective system designed to eliminate the many shortcomings of education systems prevailant today. It is proved that a child absorbs learnings faster and more effective when they are given individual attention and learning is an involved process. This has given rise to many new schooling systems such as homeschooling which are becoming prevailant in the developed nations. though most of these systems cater to the learning needs of the child, they fail to effectively stimulate various other growth facets such as social skills, which only flourishes when they interact with peers their age.
				At Chili Pili, we follow our core value of a holistic development during the learning period so that they grow to be successful Throughout their life.The curriculum and teaching methodologies are designed to cater to every facet of a child's growth by paying special attention not only on academic excellence, but also to make them selfdriven, quick learners, and Complete individuals.</p>
		</div>

		<div>
			<img src="media/final-asset/bush-1.svg" class="branch2" alt="branch">
		</div>

	</div>
</section>

<div class="flakes" style="background-image:url('media/final-asset/leaf_background.png')">
	<div class="video-box m-side m-def">
		<div class="video-boxover">
			<img src="media/Image1_AL-min.jpg" alt="" data-toggle="modal" class="video-btn" data-src="https://vimeo.com/487199210/c79a6c7322" data-target="#myModal" onclick="playVideo()">
		</div>
	</div>
	<div class="video-box m-side m-def">
		<div class="video-boxover">
			<img src="media/Image2_AL-min.jpg" alt="" data-toggle="modal" class="video-btn" data-src="https://vimeo.com/487199210/c79a6c7322" data-target="#myModal" onclick="playVideo()">
		</div>
	</div>
	<div class="video-box m-side m-def">
		<div class="video-boxover">
			<img src="media/Image3_AL-min.jpg" alt="" data-toggle="modal" class="video-btn" data-src="https://vimeo.com/487199210/c79a6c7322" data-target="#myModal" onclick="playVideo()">
		</div>
	</div>

	<div class="internal-features m-side">
		<div class="section-head">
			<h3>Key Features</h3>
		</div>
		<div class="first-icon-row align-self-center">
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/PERSONALIZED TEACHING.svg" alt="personalized">
					</div>
					<div class="icon-name">
						<p>Personalized Teaching</p>
					</div>
				</div>
			</div>
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/CONCEPTUAL ICON.svg" alt="conceptual">
					</div>
					<div class="icon-name">
						<p>Conceptual Learning</p>
					</div>
				</div>
			</div>
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/APTITUDE.svg" alt="aptitude">
					</div>
					<div class="icon-name">
						<p>Aptitude Developement</p>
					</div>
				</div>
			</div>
		</div>
		<div class="second-icon-row">
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/MULTIFACITATE.svg" alt="multi-facetated">
					</div>
					<div class="icon-name">
						<p>Multi Facetated Curriculum</p>
					</div>
				</div>
			</div>
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/colabrative team work.svg" alt="collaborative">
					</div>
					<div class="icon-name">
						<p>Collaborative Learning Environment</p>
					</div>
				</div>
			</div>
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/life skills.svg" alt="life-skill">
					</div>
					<div class="icon-name">
						<p>Life Skill Developement</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">


			<div class="modal-body">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
				</div>


			</div>

		</div>
	</div>
</div>

<div class="contact-form m-def m-side">
	<h4 class="font1 text-center">Enquire and Join</h4>

	<form class="m-side">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="Name">Full Name</label>
				<input type="text" class="form-control" name="name" id="inputName" placeholder="Your Name">
			</div>
			<div class="form-group col-md-6">
				<label for="Email">Email</label>
				<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="Number">Phone Number</label>
				<input type="number" class="form-control" name="number" id="inputNumber" placeholder="Ex.8889994445">
			</div>
			<div class="form-group col-md-6">
				<label for="CallUs">Call us Anytime</label>
				<input type="text" class="form-control" name="call" id="inputCall" placeholder="9am - 4pm">
			</div>
		</div>
		<div class="form-group">
			<label for="Subject">Subject</label>
			<input type="text" class="form-control" name="subject"  id="inputSubject" placeholder="Subject for your query">
		</div>
		<div class="form-group">
			<label for="Query">Query</label>
			<textarea class="form-control" id="query" rows="3"></textarea>
		</div>
		<button type="submit" name = "submit" class="btn contact-btn">Submit</button>
	</form>
</div>


<?php

include 'includes/footer.php'

?>