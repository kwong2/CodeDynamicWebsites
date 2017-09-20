<?php

	// Constants
	define("TITLE", "My Hands Are DIRTY and need to be washed.");

	// Variables
	$age_group = array("child", "teenager", "adult");
	$name = "Kevin";

	
	// Arrays
	$handlebar = array (
		"name" => "HandleBar",
		"color" => "Black"
	);

	$fu_manchu = array (
		"name" => "Fu Manchu",
		"color" => "Brown"
	);

	$salvador = array (
		"name" => "Salvador Dali",
		"color" => "weird"
	);

	$gentlemen = array (
		array (
			"first_name" => "Chris",
			"country" => "Canada"
		),
		array ( 
			"first_name" => "Kevin",
			"country" => "USA"
		),
		array (
			"first_name" => "Wong", 
			"country" => "China"
		)
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- TITLE --></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><!-- TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $gentlemen[0]["first_name"]; ?>  </h3>
				<p>from the country of <?php echo $gentlemen[0]["country"]; ?> is known for sporting his very own <?php $handlebar["name"]; ?> which is <?php $handlebar["color"]; ?> in color.</p>
				
				<h3><?php echo $gentlemen[1]["first_name"]; ?> </h3>
				<p>Now this man is from <?php echo $gentlemen[1]["country"]; ?>. He has a <?php echo $fu_manchu["name"]; ?> and man it is weird on him. Just to let you know it is <?php $fu_manchu["color"]; ?> in color. Yeesh.</p>
				
				<h3><?php echo $gentlemen[2]["first_name"]; ?> </h3>
				<p>Let's talk about Wong. He thought about using the Beyonce but it was taken long ago. <?php echo $gentlemen[2]["first_name"]; ?> has an interesting choice of mustache. He has a <?php echo $salvador["name"]; ?> moustache. It is so <?php echo $salvador["color"]; ?>  in color. It is probably best you avoid him entirely.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
