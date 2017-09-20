<?php
	
	// Constants
	define("TITLE", "Lesson 8 MultiDimensional Arrays. Kinda like the ones in Rick & Morty");
	
	// Custom Variables
	$lesson = 8;
	$name = "Kevin";

	
	// Moustache Multi-Dimensional Array
	$moustaches = array (
												array (
												"name" => "Handlebar",
												"creep_factor" => "8 out of 10",
												"growth_days" => 60,
												),
												array (
													"name" => "Normal",
													"creep_factor" => "2 out of 10",
													"growth_days" => 30,
												),
												array (
													"name" => "Jeff Fischer",
													"creep_factor" => "How long he was able to stay on as HC for the Rams",
													"growth_days" => "Way too long",
												),
											);

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
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson; ?> : <small><?php echo TITLE ?> </small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <?php echo $moustaches[0]["name"];?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[0]["creep_factor"]; ?></strong> and takes <strong> <?php echo $moustaches[0]["growth_days"]; ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $moustaches[1]["name"];?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[1]["creep_factor"]; ?></strong> and takes <strong> <?php echo $moustaches[1]["growth_days"]; ?> days</strong> to grow on average.</strong></p>
				
				<h2>The <?php echo $moustaches[2]["name"];?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[2]["creep_factor"]; ?></strong> and takes <strong> <?php echo $moustaches[2]["growth_days"]; ?> days</strong> to grow on average.</strong></p>
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php date('Y'); ?> <!-- YEAR --> - <?php echo $name;?><!-- YOUR "NAME" --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
