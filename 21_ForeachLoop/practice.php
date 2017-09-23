<?php
	
	// Constants
	define("TITLE", "Foreach Loop");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 21;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<?php
				$wrestlers = array("Ric Flair", "Hulk Hogan", "The Rock", "Stone Cold");
				foreach ($wrestlers as $wrestler) {
					echo "I tell you who was good, $wrestler was awesome. <br>";
				};
				?>
			<br>
			<br>
				<?php
				foreach ($wrestlers as $wrestler){
					echo "Wrestler: $wrestler, Hall of Famer. <br>";
				};
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
