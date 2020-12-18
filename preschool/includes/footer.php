
<section class="opening">
    <img src="../media/Preschool-Asset/Group 8280.png" alt="Pre-Tree-1" class="pre-life-tree2">

    <h3 class="font1">OPENING HOURS:</h3>

    <div class="opening-sec1">
        <p class="font3">Day Care:</p>
        <p class="font3">8:30a.m. to 7:00 p.m.</p>
    </div>
    <p class="font3">Monday to Friday</p>

    <hr>

    <div class="opening-sec1">
        <p class="font3">Office:</p>
        <p class="font3"> 8:30 a.m. to 5:00 p.m.</p>
    </div>
    <p class="font3">Monday to Friday</p>

    <hr>

    <div class="opening-sec1">
        <p class="font3">Alternate Saturday (1st and 3rd)</p>
        <p class="font3">8:30 a.m to 12:30 p.m.</p>
    </div>

    <button>
        <a href="../contact-us.php" class="font2">Contact Us</a>
    </button>
</section>

<footer>
	<div class="footer">

		<!-- Footer section for Logo  -->
		<div class="footer-logo">
			<img src="../media/logo.png" alt="Logo">
		</div>
		<!-- Footer section for Menu -->
		<div class="footer-menu">
			<h3 class="font1 m-auto">Menus</h3>
	
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../about.php">About</a></li>
				<li><a href="#our-services">Our Services</a></li>
				<li><a href="../blog.php">Blog</a></li>
			</ul>
		</div>
		<!-- Footer section for  Second list in Menu -->
		<div class="footer-menu-2">
			<ul>
				<li><a href="../contact-us.php">Contact Us</a></li>
				<li><a href="../store.php">Shop</a></li>
			</ul>
		</div>
		<!-- Footer section for Contact Page -->
		<div class="footer-contact">
			<h3 class="font1 m-auto">Contact Us</h3>
			<p class="font3">admin@chilipili.in</p>
			<p class="font3">+91 - 8762173621</p>
			<p class="font3">Chili Pili, 31st Main, Sector-1,</p>
			<p class="font3">HSR Layout, Banglore - 560102</p>
		</div>
		<!-- Footer section for Social icons -->
		<div class="footer-social">
			<h3 class="font1 m-auto">Social</h3>
			<div>
				<img src="../media/final-asset/Insta-icon.svg" alt="Instagram">
				<img src="../media/final-asset/fb-icon.svg" alt="Facebook">
				<img src="../media/final-asset/twitter-icon.svg" alt="Twitter">
			</div>
	
		</div>
	</div>

	<div>
		<hr>
		<p class="text-center font3">Copyright &copy; 2020-21 Chili Pili by Shri Vigneshwara Vidyadeepam Educational Ventures PVT LTD</p>
	</div>

</footer>








<!-- Bootstrap JS -->
<!-- JavaScript Bundle with Popper.js -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

<!-- Custom JS -->

<script>
    function initMap() {
        const chilipili = {lat: 34.397, lng:150.644};
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 34.397,
                lng: 150.644
            },
            scrollwheel: false,
            zoom: 2
        });

        var marker = new google.maps.Marker({
            position: chilipili,
            map:map
        });
    } // close function here
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv6Y1yutarDFYWNI_GidFdSf9TY0cwb_I&callback=initMap">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.1.1/es6-promise.min.js"></script>
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>

// Multilevel Dropdown Menu 
$(window).on("load", function() {
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        console.log(el)
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        console.log(parent);
        $(this).parent("li").toggleClass('show');

        if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
        }
        $('.navbar-nav li.show').not($(this).parents("li")).removeClass("show");
        return false;
    });
});
</script>
</body>

</html>