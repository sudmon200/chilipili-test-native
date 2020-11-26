<?php
include "includes/header.php";
?>

<!-- Contact Us Page Starts here  -->
<div class="container" style="height:50px;">
</div>
<div class="container contact-top m-def">
	<h3 class="font1">
		Contact Us
	</h3>
</div>

<div class="contact-main">
	<!-- Left side of the main contact Page  -->
	<div class="contact-main-left">
		<div class="left1">
			<div id="map" style="width:100%;height:400px;"></div>
		</div>

		<div class="left2">
			<div class="left-content">
				<h4 class="font1">Address</h4>
				<p class="font3">Chili Pili,</p>
				<p class="font3">31st Main, Sector-1, HSR Layout</p>
				<p class="font3">Banglore-560102</p>
			</div>
			<div class="right-content">
				<h4 class="font1">Contact Info</h4>
				<div>
					<img src="media/final-asset/contact.png" alt="contact">
					<p class="font3">
						+91 876 217 3621
					</p>
				</div>
				<div>
					<img src="media/final-asset/mail.png" alt="mail">
					<p class="font3">admin@chilipili.in</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Right Side of the Main Contact Page  -->
	<div class="contact-main-right">
		<h3 class="font1 form-content">
			Contact form
		</h3>
		<form action="POST" class="form-box">
			<div class="form-content font2">
				<label for="Name">Full Name</label>
				<input type="text" name="name" id="name" placeholder="Your Name">
			</div>
			<div class="form-content font2">
				<label for="Name">Email</label>
				<input type="email" name="email" id="email" placeholder="your@email.com">
			</div>
			<div class="form-content font2">
				<label for="Name">Contact Number</label>
				<input type="number" name="number" id="number" placeholder="+91 8888999955">
			</div>
			<div class="form-content font2">
				<label for="Name">Intested In</label>
				<select name="intested" id="interested">
					<option value="">I'm Intested In</option>
					<option value="school">School/Preschool Admissions</option>
					<option value="language-corporate">Language Training Corporate/Institutes</option>
					<option value="language">Language Training Individual</option>
					<option value="teacher">Teacher Training</option>
					<option value="franchise">Franchise Query</option>
					<option value="investment">Investment</option>
					<option value="other">Others</option>
				</select>
			</div>
			<div class="form-content font2">
				<label for="Name">Query</label>
				<textarea name="query" id="query" cols="30" rows="5"></textarea>
			</div>

			<div class="form-btn">
				<input type="button" value="Submit">
			</div>
		</form>

		<div class="fill">
			<img src="media/final-asset/branch-1.svg" alt="branch">
		</div>
	</div>

</div>


<?php
include "includes/footer.php";

?>