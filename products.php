<?php
include 'includes/header.php';

// $prod_id = $_GET['prod_id'];

// $sql = "SELECT * FROM products WHERE prod_id='$prod_id'";

// $result = $connection->query($sql);

?>

<div class="search m-def">
	<input type="text" name="search" id="search" placeholder="Search">
	<button>Search</button>
</div>

<section class="product-bg">
	<div class="pagination" style="background-image:url(media/final-asset/rectangle_cut.svg);">
		<p class="font1 text-center">Store ->> Age 3-4 ->> Phonics</p>
	</div>
	<!-- Image zoom feature  -->

	<div class="prod-main m-def m-side">
		<div class="prod-imgs">
			<img id="zoom_01" src='media/small/image1.png' data-zoom-image="media/large/image2.jpg" class="mb-4" />
			<div id="gallery_09" style="width:500px; float:left;text-decoration:none;">
				<a href="#" class="elevatezoom-gallery" data-update="" data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png" data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png" width="100">
				</a>
				<a href="#" class="elevatezoom-gallery" data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image2.png" data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image2.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image2.png" width="100"></a>
				<a href="tester" class="elevatezoom-gallery active" data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image3.png" data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image3.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image3.png" width="100"> </a>
				<a href="tester" class="elevatezoom-gallery" data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image4.png" data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image4.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image4.png" width="100"></a>

			</div>

		</div>
		<div class="prod-content">
			<h5 class="font2">Product Description</h5>
			<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo, id ea tenetur ut voluptas, quis sint neque qui nobis possimus voluptate quos! Vero incidunt necessitatibus hic officiis delectus autem non, sapiente debitis aliquid.</p>

			<span class="price"></span>

			<p class="font3">Ideal for age Groups 3-5.</p>

			<div class="include">
				<p class="font3">Contents Include:</p>
				<div class="row">
					<div class="col-md col-sm col-lg">
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
					</div>
					<div class="col-md col-sm col-lg">
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p>Lorem, ipsum dolor.</p>
						</div>
					</div>
				</div>
			</div>
			<button>Buy Now</button>

		</div>
	</div>

	<div class="prod-description m-def m-side">
		<h5 class="font2">Detailed Product Description</h5>

		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ratione dolore odit molestias sequi error
			corrupti similique et enim voluptatibus omnis sint molestiae dignissimos corporis quod modi velit, saepe
			nisi quo quae dicta. Iure pariatur reprehenderit sit aliquid. Praesentium, ipsam? Facilis dignissimos ullam
			nostrum cumque quaerat?</p>

	</div>

</section>
<!-- <div class="container">
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<img id="zoom_01" src='media/small/image1.png' data-zoom-image="media/large/image2.jpg" class="mb-4"/>
			<div id="gallery_09" style="width= 500px; float:left;text-decoration:none;">
				<a href="#" class="elevatezoom-gallery" data-update=""
					data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png"
					data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png"
						width="100">
				</a>
				<a href="#" class="elevatezoom-gallery"
					data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image2.png"
					data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image2.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image2.png"
						width="100"></a>
				<a href="tester" class="elevatezoom-gallery active"
					data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image3.png"
					data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image3.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image3.png"
						width="100"> </a>
				<a href="tester" class="elevatezoom-gallery"
					data-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image4.png"
					data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image4.jpg">
					<img src="https://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image4.png"
						width="100"></a>

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<p>This is the world</p>
		</div>
	</div>
</div> -->
<div class="benefits m-side">
	<h5 class="font2">Benefits:</h5>

	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt
			laudantium consequuntur cupiditate!</p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt
			laudantium consequuntur cupiditate!</p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt
			laudantium consequuntur cupiditate!</p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt
			laudantium consequuntur cupiditate!</p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt
			laudantium consequuntur cupiditate!</p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus a voluptatibus sunt
			laudantium consequuntur cupiditate!</p>
	</div>

</div>

<div class="similar-prod m-def m-side">

</div>

<div class="reccomended m-side">

</div>

<?php
include 'includes/footer.php';
?>