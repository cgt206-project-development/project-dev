<!-- Header include -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!--zzzchange here-->
	<script src="js/script.js"></script> <!--zzzchange here-->
</head>
<body>
	<header>
	<a href="index.php"><img src="images/logo.png" alt="LULAC Logo"></a>
		<div class="heading-wrapper">
			<h1>League of United Latin American Citizens</h1>
			<h2>Southwest Washington Council #47013</h2>
		</div>
	<?php require_once "includes/nav.inc.php"; ?>
	</header>

<div class="content">
<div class="social">
	<a href="https://www.facebook.com/southwestwashingtonlulac"><i class="fa fa-facebook-square"></i></a>
	<a href="https://twitter.com/lulacswwa"><i class="fa fa-twitter-square"></i></a>
</div>
<?php
if (isset($page_heading))	echo "<h2>{$page_heading}</h2>";
 ?>