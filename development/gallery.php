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
		$(".full-img").colorbox({rel:'group3', transition:"fade", width:"75%"});
		$(".caption").colorbox({rel:'caption', transition:"fade", height: "100%"})
	})
</script>

	<section class="gallery">
		<a href="images/truck.jpg" title="This is Isobel's truck on the side of a steep hill" class="full-img"><img src="images/truck.jpg" alt=""></a>
		<a href="images/truck2.jpg" title="Here's the other side of the road.  Also steep." class="full-img"></a>
		<a href="images/truck3.jpg" title="The truck looks cute looking out into the trees and hills" class="full-img"></a>
		<h3>
			Truck Pictures
		</h3>
	</section>
	<section class="gallery">
		<a href="images/hiking1.jpg" title="Flowers along NF 6808" class="caption group2"><img src="images/hiking1.jpg" alt=""></a>
		<a href="images/hiking2.jpg" title="Mount Adams hiding behind the hills" class="caption group2"></a>
		<a href="images/hiking3.jpg" title="Wildflowers on Grassy Knoll" class="caption group2"></a>

		<h3>
			Hiking Pictures
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