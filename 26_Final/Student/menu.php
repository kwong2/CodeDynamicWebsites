<?php 
  define("TITLE", "Menu | China Hollywood");
  include('includes/header.php');
?>

<div id = "menu-items">
  <h3>MENU</h3>

  <p>Our menu, does it pack a kung pao kick or what!</p>

<!-- making menu dynamic -->
  <?php 	
    foreach ($menuItems as $dish => $item) { ?>
      <li><a href="dish.php?item=<?php echo $dish; ?>">
      <?php echo $item["title"]; ?> </a> 
      <?php echo $item["price"]; ?> 
      <br> <br>
      </li>
    <?php } ?>


</div>

<hr>
<?php
  include('includes/footer.php');
?>