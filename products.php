<?php
include 'config.php';
include 'includes/header.php';

$prod_id = $_GET['id'];

echo $_GET['id'];

$sql = "SELECT * FROM products WHERE prod_id='$prod_id'";

$result = $connection->query($sql);

$row = mysqli_fetch_array($result);

$new_include = unserialize($row['prod_include']);
$new_benifits = unserialize($row['prod_benefit']);
$new_benifits2 = unserialize($row['prod_benefit2']);

// var_dump($new_benifits);
// echo $new_benifits['inc1'];
// echo $row['prod_group'];
?>

<div class="search m-def">
	<input type="text" name="search" id="search" placeholder="Search">
	<button>Search</button>
</div>

<section class="product-bg">
	<div class="pagination" style="background-image:url(media/final-asset/rectangle_cut.svg);">
		<p class="font1 text-center">Store ->> Age <?= $row['prod_group'] ?> ->> <?= $row['category'] ?></p>
	</div>
	<!-- Image zoom feature  -->

	<div class="prod-main m-def m-side">
		<div class="prod-imgs">
			<img id="zoom_01" src='media/uploads/product1.jpg' data-zoom-image="media/uploads/product1.jpg" class="mb-4" />
			<div id="gallery_09" style="width:500px; float:left;text-decoration:none;">
				<a href="#" class="elevatezoom-gallery" data-update="" data-image="media/uploads/product1.jpg" data-zoom-image="media/uploads/product1.jpg">
					<img src="media/uploads/product1.jpg" width="100">
				</a>
				<a href="#" class="elevatezoom-gallery" data-image="media/uploads/product2.jpg" data-zoom-image="media/uploads/product2.jpg">
					<img src="media/uploads/product2.jpg" width="100"></a>
				<a href="tester" class="elevatezoom-gallery active" data-image="media/uploads/product3.jpg" data-zoom-image="media/uploads/product3.jpg">
					<img src="media/uploads/product3.jpg" width="100"> </a>
				<a href="tester" class="elevatezoom-gallery" data-image="media/uploads/product4.jpg" data-zoom-image="media/uploads/product4.jpg">
					<img src="media/uploads/product4.jpg" width="100"></a>

			</div>

		</div>
		<div class="prod-content">
			<h5 class="font2">Product Description</h5>
			<p class="font3"><?= $row['prod_excerpt'] ?></p>

			<span class="price"></span>

			<p class="font3">Ideal for age Groups <?= $row['prod_group'] ?>.</p>

			<div class="include">
				<p class="font3">Contents Include:</p>
				<div class="row">
					<div class="col-md col-sm col-lg">
						<?php if ($new_include['inc1'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc1']; ?></p>
						</div>
						<?php endif; ?>
						<?php if ($new_include['inc2'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc2']; ?></p>
						</div>
						<?php endif; ?>
						<?php if ($new_include['inc3'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc3']; ?></p>
						</div>
						<?php endif; ?>
						<?php if ($new_include['inc4'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc4']; ?></p>
						</div>
						<?php endif; ?>
					</div>
					<div class="col-md col-sm col-lg">
						<?php if ($new_include['inc5'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc5']; ?></p>
						</div>
						<?php endif; ?>
						<?php if ($new_include['inc6'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc6']; ?></p>
						</div>
						<?php endif; ?>
						<?php if ($new_include['inc7'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc7']; ?></p>
						</div>
						<?php endif; ?>
						<?php if ($new_include['inc8'] != ""): ?>
						<div class="d-flex flex-row">
							<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
							<p><?= $new_include['inc8']; ?></p>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<button>Buy Now</button>

		</div>
	</div>

	<div class="prod-description m-def m-side">
		<h5 class="font2">Detailed Product Description</h5>

		<p><?= $row['prod_desc'] ?></p>

	</div>
	
</section>
<!-- <div class="container">
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<img id="zoom_01" src='media/small/image1.png' data-zoom-image="media/large/image2.jpg" class="mb-4"/>
			<div id="gallery_09" style="width= 500px; float:left;text-decoration:none;">
				<a href="#" class="elevatezoom-gallery" data-update=""
					data-image="media/uploads/product1.jpg"
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
		<p class="font3"><?= $new_benifits['benefit']; ?></p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3"><?= $new_benifits['benefit2']; ?></p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3"><?= $new_benifits['benefit3']; ?></p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3"><?= $new_benifits2['benefit4']; ?></p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3"><?= $new_benifits2['benefit5']; ?></p>
	</div>
	<div class="d-flex flex-row">
		<img src="media/final-asset/star-1.svg" alt="star-icon" class="star-icon">
		<p class="font3"><?= $new_benifits2['benefit6']; ?></p>
	</div>

</div>

<div class="similar-prod m-def m-side">

</div>

<div class="reccomended m-side">

</div>

<?php
include 'includes/footer.php';
?>