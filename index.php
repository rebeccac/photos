<?php 
require 'common.php';
$conn = connect($config);

$landscape = randomImage('landscape', $conn);
include($root.'includes/dtd.php'); 
 ?>
 <title>Simon Cordingley Photography</title>
 <link rel="stylesheet" href="styles/background-mediaqueries.css">
 <style>
	@media (orientation: landscape) {	
		body {
			background: url(<?php echo $landscape['filename']; ?>) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		  background-color: #121214;
		}
	}
 </style>
 <?php 
include($root.'includes/head.php');
include($root.'includes/nav.php');
include($root.'includes/header.php');
?>

<div class="title-mobile-front">
	<h1 id="fittext-title">Simon Cordingley</h1>
</div>

<?php
include($root.'includes/footer-fixed.php'); 
?>

