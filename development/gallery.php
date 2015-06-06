<?php 
$page_title = "Gallery";
$page_heading = "Gallery";
require_once "includes/header.inc.php";
 ?>
 <link rel="stylesheet" href="css/colorbox.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="js/colorbox-master/jquery.colorbox.js"></script>

<script>
	$(document).ready(function() {
		$(".full-img").colorbox({rel:'full-img', transition:"fade", width:"75%"});
		$(".caption").colorbox({rel:'caption', transition:"fade", height: "100%"});
		$(".resize").colorbox({rel:'resize', width: "70%", maxHeight:"100%", opacity: ".8"});
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
		<a href="images/hiking1.jpg" title="Mount Hood from Hardy Ridge" class="caption"><img src="images/hiking1.jpg" alt=""></a>
		<a href="images/hiking2.jpg" title="Mount Adams hiding behind the hills" class="caption"></a>
		<a href="images/hiking3.jpg" title="Wildflowers on Grassy Knoll" class="caption"></a>

		<h3>
			Hiking Pictures
		</h3>
	</section>
	<section class="gallery">
		<a href="images/flower1.jpg" title="Wild Mustard" class="caption"><img src="images/flower1.jpg" alt=""></a>
		<a href="images/flower2.jpg" title="Mount Adams hiding behind the hills" class="caption"></a>
		<a href="images/flower3.jpg" title="Wildflowers on Grassy Knoll" class="caption"></a>
		<h3>
			Flowers
		</h3>
	</section>
	<section class="gallery">
		<a href="images/morehiking1.jpg" title="View from Archer Mountain" class="resize"><img src="images/morehiking1.jpg" alt=""></a>
		<a href="images/morehiking2.jpg" title="The truck on a cliff" class="resize"></a>
		<a href="images/morehiking3.jpg" title="A flower atop a hill along NF 6808" class="resize"></a>
		<h3>
			More Hiking
		</h3>
	</section>
 <?php require_once "includes/footer.inc.php"; ?>