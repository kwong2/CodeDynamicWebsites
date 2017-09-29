<?php
  define ("TITLE", "Menu | China Hollywood");

  include ('includes/header.php');

  // to prevent php injection
  function strip_bad_chars ( $input ) {
    
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input );
    return $output; 
  };


  if (isset($_GET['item'])) {
    
    $menuItem = strip_bad_chars($_GET['item']);

    $dish = $menuItems[$menuItem];

  };
?>

  <hr>

  <div id ="dish">
  
    <h1><?php echo $dish["title"];?> 
    <span class = "price"><?php echo $dish["price"]; ?> </h1>
    <p><?php echo $dish["blurb"]; ?> </p>
    <br>


  </div>