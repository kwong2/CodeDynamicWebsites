<?php 
  include('includes/header.php');
?>

<h3>MENU</h3>

<?php 	
  foreach($menuItems as $item){
   echo "<ul>$item[title] ---- $item[price]</ul>";
  }
?>

<?php
  include('includes/footer.php');
?>