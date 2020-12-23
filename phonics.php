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
		Phonics
	</h2>
</div>
<section class="phonics-bg">
	<div>
		<img src="media/final-asset/branch-1.svg" class="branch1" alt="branch" style="right: -11vw; top: -38px; height: 23%; width: 34%">
	</div>
	<div class="phonics-img m-side">
		<img src="media/Image1_P-min.png" alt="phonics-img-1" align="middle">
	</div>
	<div class="flakes" style="background-image:url('media/final-asset/leaf_background.png')">

		<div class="phonics-main m-side m-top">
			<h4 class="font1">About Chili Pili Phonics</h4>
			<p class="font3">Phonics is a sound based system to teach reading and writing. The principle is that sounds made by
				letters in a word combine in particular ways to generate the sound the word makes.</p>

			<p class="font3">Chili Pili Phonics is an innovative new phonics approach wherein one learns to read and write multiple languages at the same time. It emphasizes on building phonetic understanding through pure sounds sans any graphical representation (letters) of any language. This way, a strong foundation in phonetics is built, after which the sounds are mapped to the language being taught. The results of this methodology are far better than other phonics.</p>
		</div>

		<div class="video-box m-side m-def">
			<div class="video-boxover">
				<img src="media/Image2_P-min.jpg" alt="" data-toggle="modal" class="video-btn" data-src="https://vimeo.com/487199210/c79a6c7322" data-target="#myModal" onclick="playVideo()">
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
					<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
					</div>
					
				</div>

			</div>
		</div>
	</div> 
		<div>
			<img src="media/final-asset/bush-1.svg" class="branch2" alt="branch">
		</div>
	</div>
</section>
<div class="flakes" style="background-image:url('media/final-asset/leaf_background.png')">

	<div class="method m-top">
		<div class="section-head">
			<h3 class="font1 m-side">Our Methods</h3>
		</div>
		<div class="phonics-img m-side">
			<img src="media/Image3_P-min.png" alt="phonics-img-1" align="middle">
		</div>

	</div>

	<!-- Key Feature Icons  -->
	<div class="internal-features m-side m-def">
		<div class="section-head">
			<h3 class="font1">Our Program</h3>
		</div>
		<div class="first-icon-row">
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/FOR PRESCHOOL AND SCHOOL.svg" alt="preschool">
					</div>
					<div class="icon-name">
						<p>For Pre-schools and Schools</p>
					</div>
				</div>
			</div>
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/after school program.svg" alt="after-school">
					</div>
					<div class="icon-name">
						<p>After School Program</p>
					</div>
				</div>
			</div>
			<!-- Not Needed icon box  -->
			<div class="icon-box" style="display: none;">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/afoordable kits.svg" alt="">
					</div>
					<div class="icon-name">
						<p>Affordable Montessori Kits</p>
					</div>
				</div>
			</div>
		</div>

		<div class="second-icon-row self-align-center">
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/parent teacher training.svg" alt="teacher-training">
					</div>
					<div class="icon-name">
						<p>Teacher / Parent Training</p>
					</div>
				</div>
			</div>
			<div class="icon-box">
				<div class="icon-box-over">
					<div class="icon">
						<img src="media/Icons/social outreach.svg" alt="Social Outreach">
					</div>
					<div class="icon-name">
						<p>Social Outreach</p>
					</div>
				</div>
			</div>
			<!-- Not needed icon box -->
			<div class="icon-box" style="display:none;">
				<div class="icon-box-over">
					<div class="icon">
						<img src="" alt="">
					</div>
					<div class="icon-name">
						<p>Online Instructional Videos</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="testimonials">
		<div class="section-head">
			<h3 class="font1 testimonial-head">Testimonials</h3>
		</div>
		<div class="testimonial-slider">
			<div class="itema-1">
				<div class="row m-side">
					<div class="col-lg-6 col-md-6 col-sm-12" id="top-image">
						<div class="row">
							<div class="mx-auto">
								<img src="media/RAKESH_SHARMA.png" alt="" width="100" style="border-radius:80px">
							</div>
						</div>
					</div>
					<div class="col-md">
						<p class="testimonial-name text-center font2">Rakesh Sharma</p>
						<p class="testimonial-desc text-center font4">Mein Varanasi se aya tha aur mujhe ek sal katna tha. Mere ek saal ka experience bahut hi accha raha. Ek saal mein mera UKG ka beta jo ABC sikh raha ab newspaper bhi badne laga hai. Hamara jab Kannada ka door door tak ko sabandh nahi hai, lekin ek hi saal me mera beta Kannada padhne laga or yahan vahan jab hume dikkat hoti hai, hamme Kannada padhe ke batata hai. Yahan ke teachers bahut hi hardworking hai aur Phonics program yahan pe bahut hi badiya hai.</p>
					</div>
					<div class="col-md" id="bottom-image">
						<img src="media/RAKESH_SHARMA.png" alt="Parent">
					</div>
				</div>
			</div>
			<div class="itema-2">
				<div class="row m-side">
					<div class="col-lg-6 col-md-6 col-sm-12" id="top-image">
						<div class="row">
							<div class="mx-auto">
								<img src="media/deepak_nitya.png" alt="" width="100" style="border-radius:80px">
							</div>
						</div>
					</div>
					<div class="col-md">
						<p class="testimonial-name text-center font2">Deepak & Nitya</p>
						<p class="testimonial-desc text-center font4">It has been more than 2 years since my daughter joined here . We were looking for a place where she does not see the stress of learning and she learns naturally. She is very comfortable and very happy here. Everyday, she comes back home and tells us stories about the school which are really enjoyable.. The compassion the teachers show towards the children is really amazing. Whether it is learning Maths, logical reasoning, discipline or character development .. . I see that the basics are getting done right</p>
					</div>
					<div class="col-md" id="bottom-image">
						<img src="media/deepak_nitya.png" alt="Parent">
					</div>
				</div>
			</div>
			<div class="itema-3">
				<div class="row m-side">
					<div class="col-lg-6 col-md-6 col-sm-12" id="top-image">
						<div class="row">
							<div class="mx-auto">
								<img src="media/KRISHNA_VIDYA.png" alt="" width="100" style="border-radius:80px">
							</div>
						</div>
					</div>
					<div class="col-md">
						<p class="testimonial-name text-center font2">Krishna & Vidya</p>
						<p class="testimonial-desc text-center font4">ಚಿಲಿಪಿಲಿ ಮಕ್ಕಳ ಕೂಟದಲ್ಲಿ ನಮ್ಮ ಮಗಳ ಆತ್ಮಸ್ಥಯ೯ ಕುಂದದೆ ಚೆನ್ನಾಗಿದೆ , ಹಾಗು ಶಾಲೆ ಎಂದರೆ ಯಾವುದೇ ತರಹದ ಭಯವಾಗಲಿ ಅಥವ ಹೆದರಿಕೆಯಾಗಲಿ ಇಲ್ಲವೇ ಇಲ್ಲ. ಅಲ್ಲಿ ಕಲಿಕೆಯೂ ಕೂಡ ಉತ್ತಮ ಮಟ್ಟದಲ್ಲಿ ಇರುವುದರಿಂದ ನಮಗೆ ಶಾಲೆ ಬಹಳ ಇಷ್ಟ.</p>
					</div>
					<div class="col-md" id="bottom-image">
						<img src="media/KRISHNA_VIDYA.png" alt="Parent">
					</div>
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

include 'includes/footer.php';

?>