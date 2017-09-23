<?php
	
	// Constants
	define("TITLE", "Intro to Functions");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 23;
	
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
				
				<h3>Using <code>sort()</code></h3>
				<?php
					$wrestlers = array ("Rock", "Cena", "Hogan", "Stratus", "Lita", "Banks");
					
					sort ($wrestlers);

					foreach($wrestlers as $wrestler){
						echo "$wrestler <br>";
					};
				?>
				
				<h3>Using <code>rsort()</code></h3>
				<?php
					$devices = array("LG", "Nexus", "Samsung", "Apple");
					rsort($devices);

					foreach ($devices as $device) {
						echo "$device <br>";
					};
					
				?>
				
				<h3>Using <code>strtolower()</code></h3>
				<?php
					echo strtolower("THIS STRING WAS UPPERCASE AND NOW IT IS LOWERCASE.");
					// your code here
					
				?>
				
				<h3>Using <code>sha1()</code></h3>
				<?php
					echo "Man you wanna see what happens when I put this exact string through sha1(). <br>";

					echo sha1("Man you wanna see what happens when I put this exact string through sha1().");
					// your code here
					
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
