<?php
	
	// Constants
	define ("TITLE", "LOGICAL OPERATORS SON!");
	
	// Custom Variables
	$lesson_num = 15;
	$name = "Kevin Wong"; 


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
			
			<h1>Tutorial <?php echo $lesson_num; ?> : <small><?php echo TITLE; ?> </small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>And <code>and</code></h3>
				<?php
					// your code here
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					// your code here
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					// your code here
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					// your code here
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					// your code here
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date ('Y') ;?> - <?php echo $name ?> </small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
