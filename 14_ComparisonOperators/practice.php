<?php
	
	// Constants
	define ("TITLE", "The Comparison Operators. Man there are some for the same thing.");
	
	// Custom Variables
	$lesson_num = 14;
	$name = "Kevin Wong";
	 


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
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo TITLE ; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					$a = 25;

					if ($a == 20) {
						echo "YEAH WE GOT IT!";
					} elseif ($a == 25) {
						echo "Sir, it appears that you've passed the test for the == comparison.";
					} else {
						echo "Dude I don't think you're cut out for this.";
					};
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					$b = "25";

					if ($a === 25) {
						echo "Yeah if this appears, it's not working because it should be matching the string of 25 not the integer.";
					} elseif ($a === "25") {
						echo "Sir, it appears that you've passed the test for the === comparison";
					} else {
						echo "I should write a test soon that passed the else condition";
					};
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					$c = "15";

					if ($c != "15") {
						echo "This is not the one you want to pass like this.";
					} else {
						echo "it appears that you have passed the test for the != comparison.";
					};
					

				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					$d = 22;
					
					if ($d !== "22") { 
						echo "Master Wong I believe that you have now passed an understanding of the !== comparison.";
					} else {
						echo "Master Wong, you need to revist your skills in the !== comparison";
					};
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					$dave = 4;
					$kevin = 5;
					
					if ($dave < $kevin){
						echo "You have now mastered the less than operator.";
					} else {
						echo "You did NOT master the less than operator";
					};
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if ($kevin > $dave){
						echo "Sir Wong, you've mastered the greater than comparison operator.";
					} else {
						echo "My dear boy, you need to review this.";
					};
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					$var = 23;
					$vars = 23;
					
					if ($var <= $vars) {
						echo "Mister Wong, you have shown competenece with this comparison operator.";
					} else {
						echo "REVIST";
					};

				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					$vares = 24;
					if ($var >= $vars) {
						echo "yeah you did it. You are a maginificent person Kevin.";
					} else {
						echo "Kevin, yeah about what I said earlier.";
					};
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date ('Y'); ?> - <?php echo $name ; ?> </small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
