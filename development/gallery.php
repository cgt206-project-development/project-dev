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
		$(".resize").colorbox({rel:'resize', width: "70%", maxHeight:"100%", opacity: ".8"});
	})
</script>

	<section class="gallery">
		<a href="images/2015-05-23 Radio KDNA/3.jpg" class="resize"><img src="images/2015-05-23 Radio KDNA/3.jpg" alt=""></a>
		<a href="images/2015-05-23 Radio KDNA/2.jpg" class="resize"></a>
		<a href="images/2015-05-23 Radio KDNA/1.jpg" class="resize"></a>
		<a href="images/2015-05-23 Radio KDNA/4.jpg" class="resize"></a>
		<h3>
			Radio KDNA
		</h3>
	</section>
	<section class="gallery">
		<a href="images/2015-05-01 Cinco de Mayo/1.jpg" class="resize"><img src="images/2015-05-01 Cinco de Mayo/1.jpg" alt=""></a>
		<a href="images/2015-05-01 Cinco de Mayo/2.jpg" class="resize"></a>
		<a href="images/2015-05-01 Cinco de Mayo/3.jpg" class="resize"></a>
		<a href="images/2015-05-01 Cinco de Mayo/4.jpg" class="resize"></a>

		<h3>
			Cinco de Mayo
		</h3>
	</section>
	<section class="gallery">
		<a href="images/2015-04-27 Voter Registration and Election/2.jpg" class="resize"><img src="images/2015-04-27 Voter Registration and Election/2.jpg" alt=""></a>

		<a href="images/2015-04-27 Voter Registration and Election/1.jpg" class="resize"></a>

		<a href="images/2015-04-27 Voter Registration and Election/3.jpg" class="resize"></a>

		<a href="images/2015-04-27 Voter Registration and Election/4.jpg" class="resize"></a>
		<h3>
			Voter Registration and Election
		</h3>
	</section>
	<section class="gallery">
		<a href="images/2015-04-15 YWCA/1.jpg" class="resize"><img src="images/2015-04-15 YWCA/1.jpg" alt=""></a>
		<a href="images/2015-04-15 YWCA/2.jpg" class="resize"></a>
		<a href="images/2015-04-15 YWCA/3.jpg" class="resize"></a>
		<h3>
			YWCA
		</h3>
	</section>
 <?php require_once "includes/footer.inc.php"; ?>