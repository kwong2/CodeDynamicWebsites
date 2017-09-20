<?php
	
	// Constants
	define ("TITLE", "I think it's Lesson 11, covering the ELSE in IF/ELSE statements.");
	
	// Custom Variables
	$name = "Kevin Wong";
	$lesson_number = 11;
	$a = 20;
	$b = 25;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_number; ?>: <small><?php echo TITLE ; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<!-- Want the else statement to work -->
				<?php	if ( $a == $b) {
								echo "Um something is wrong.";
							} else {
								echo "Yup, that's right, that's not true at all fool.";
							};
				?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y');?> - <?php echo $name;?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
