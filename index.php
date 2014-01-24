<?php 
require 'common.php';
$conn = connect($config);

$landscape = randomImage('landscape', $conn);
include($root.'includes/dtd.php'); 
 ?>
 <title>Simon Cordingley Photography</title>
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
 	<?php include($root.'includes/head.php');
	?>
	<?php include($root.'includes/nav.php');
		  include($root.'includes/header.php');
	?>
	<?php include($root.'includes/footer-fixed.php'); ?>

