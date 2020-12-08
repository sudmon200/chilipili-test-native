<!-- Bootstrap JS -->
<!-- JavaScript Bundle with Popper.js -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

<!-- Custom JS -->

<!-- Don't Touch this code  -->
<script>
$('#zoom_01').elevateZoom({
	tint: true,
	tintColour: 'grey',
	tintOpacity: 0.5,
	// zoomType: "inner",
	cursor: "crosshair",
	easing: true,
	gallery: "gallery_09",
	galleryActiveClass: "active",
	scrollZoom: true,
	zoomWindowFadeIn: 500,
	zoomWindowFadeOut: 750,
	zoomWindowWidth: 400,
	zoomWindowHeight: 280
});
</script>
<!-- <script>
var zoomImageGallery = document.getElementById("image-gallery");
var largeImage;
var smallImage;
zoomImageGallery.addEventListener('click', (e) => {
	var selectedImage = e.target;
	var imageURL = selectedImage.src
    document.getElementById("zoom_01").src = imageURL;
    this is out trial
    document.getElementById("zoom_01").setAttribute("data-zoom-image","media/large"+imageURL.substring(imageURL.lastIndexOf("/"), imageURL.lastIndexOf('.'))+".jpg");
    document.getElementById("zoom_01").setAttribute("data-zoom-image",imageURL.substring(0, imageURL.lastIndexOf("media"))+"media/large"+imageURL.substring(imageURL.lastIndexOf('/'),imageURL.lastIndexOf('.'))+".jpg");
    console.log(document.getElementById("zoom_01"));
	console.log(imageURL.substring(imageURL.indexOf("media"), imageURL.lastIndexOf('.'))+".jpg")
     smallImage = imageURL;
     largeImage = imageURL.substring(0, imageURL.lastIndexOf("media"))+"media/large"+imageURL.substring(imageURL.lastIndexOf('/'),imageURL.lastIndexOf('.'))+".jpg"
    console.log(smallImage);
    console.log(largeImage);
});
</script> -->






<script>
function initMap() {
	const chilipili = {
		lat: 34.397,
		lng: 150.644
	};
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
		map: map
	});
} // close function here
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv6Y1yutarDFYWNI_GidFdSf9TY0cwb_I&callback=initMap">
</script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>