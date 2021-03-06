<?php
	
	// Constants
	define("TITLE", "If Statements in PHP not in Ruby brah.");
	
	// Custom Variables
	$lesson_number = 10;
	$name = "Kevin Wong";

	$a = 15;
	$b = 25;

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
			
			<h1>Tutorial <?php echo $lesson_number; ?> : <small><?php echo TITLE; ?> </small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php if (a < b){
					echo "Hey so uh $a is less than $b.";
				}
				?> 
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('y'); ?> - <?php echo $name; ?> </small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
