<?php
	
	// Constants
	define("TITLE", "The PHP Associative Array is a hash");
	
	// Custom Variables
	$name = "Kevin";
	$lesson_num = 7;
	
	// Moustache Associative Array
	$moustaches = array(
		blake => "Handlebar",
		cage => "Fu Manchu",
		jim => "Regular,boring",
		days => 30,
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?> <!-- PAGE TITLE --></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?> <!-- LESSON NUMBER -->: <small><?php echo TITLE ?><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $moustaches[blake]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[cage]; ?> <!-- CREEP FACTOR --></strong> and takes <strong> <?php echo $moustaches[days]; ?><!-- GROWTH DAYS --> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y')?>- <?php echo $name ?> <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
