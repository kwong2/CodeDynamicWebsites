<?php
	
	// Constants
	define ("TITLE", "If, Else, Elsif. Yeah it keeps goin on.");
	
	// Custom Variables
	$name = "Kevin Wong";
	$lesson_num = 13;

	$a = "the allies";
	$b = "the germans";
	$c = "base";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ;?> </title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE ;?> </small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php
					if ($c == "the germans") {
						echo "<p> Guys look out, the Germans have come out with a new sham wow. </p>";
					} elseif ($c == "the allies") {
						echo "Man them Allies are using their Spitfires to make jaguars now.";
					} else {
						echo "Yeah it appears as the c actually is $c";
					}
				?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $name ?> </small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
