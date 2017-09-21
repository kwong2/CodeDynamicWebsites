<?php
	
	// Constants
	define ("TITLE", "Lesson 12, The ELSEIF");
	
	// Custom Variables
	$name = "Kevin Wong";
	$lesson_number = 12;
	$spain = "Spanish";
	$england = "English";
	$france = "french";
	$germany = "german";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?> </title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number; ?> : <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php 
					if ($spain == "English"){
						echo "No habla ingles";
					} elseif ($spain == "Spanish") {
						echo "Si Si Senor";
					} else {
						echo "WRONG";
					};
				?>

			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?>  - <?php echo $name ; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
