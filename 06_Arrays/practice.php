<?php
	
	// Constants
	define("TITLE", "Arrays");
	
	// Custom Variables
	$my_name = "Kevin";
	$lesson_num = 6;
	$bananas = 10;
	
	// Moustache Array
	$moustaches = array("handlebar", "salvador dali", "fu manchu", "hitlerstache");
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?><!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <?php echo $lesson_num; ?> <!-- LESSON NUMBER -->: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $moustaches[0]; ?><!-- MOUSTACHE 1 --></li>
					<li><?php echo $moustaches[1]; ?><!-- MOUSTACHE 2 --></li>
					<li><?php echo $moustaches[2]; ?><!-- MOUSTACHE 3 --></li>
					<li><?php echo $moustaches[3]; ?></li>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
