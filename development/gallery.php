<?php 
$page_title = "Gallery";
$page_heading = "Gallery";
require_once "includes/header.inc.php";
 ?>
 <link rel="stylesheet" href="js/colorbox-master/example1/colorbox.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="js/colorbox-master/jquery.colorbox.js"></script>

<script>
	$(document).ready(function() {
		$(".full-img").colorbox({rel:'group1'});
	})
</script>

	<section class="gallery">
		<a href="images/truck.jpg" class="full-img">Photo 1</a>
		<a href="http://lorempixel.com/230/150/abstract" class="full-img">Photo 2</a>
		<a href="http://lorempixel.com/230/150/abstract" class="full-img">Photo 3</a>
		<h3>
			Album 1
		</h3>
	</section>
	<section class="gallery">
		<img src="http://lorempixel.com/230/150/abstract" alt="Placeholder image" class="full-img">
		<h3>
			Album 2
		</h3>
	</section>
	<section class="gallery">
		<img src="http://lorempixel.com/230/150/abstract" alt="Placeholder image" class="full-img">
		<h3>
			Album 3
		</h3>
	</section>
	<section class="gallery">
		<img src="http://lorempixel.com/230/150/abstract" alt="Placeholder image" class="full-img">
		<h3>
			Album 4
		</h3>
	</section>
 <?php require_once "includes/footer.inc.php"; ?>