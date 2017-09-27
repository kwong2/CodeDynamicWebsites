<!-- variables -->
<?php 
  date_default_timezone_set("America/New_York"); 
  $currentHour = date ("G");
  $currentTime = date("g:i A");
  $day_week = date("w");
  $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); 
  $currentDay = $days[$day_week];
  function openCheck($day, $hour){
    if (($day !== "Sunday") && ($hour >= 11 && $hour <= 20)){
     echo "<strong>We are open!</strong>";
   } else {
     echo "<strong>We are closed.</strong> ";
   };
  }

?>

      <div class="content">
        <div id="footer" class="cf">
          <div class="column three">
            <strong>Phone</strong>
            954-966-9600
          </div>

          <div class="column three">
            <strong>Location</strong>
            3605 Hollywood Blvd. <br>
            Hollywood, FL 33024
          </div>

          <div class="column three">
            <strong>Hours</strong>
            <?php echo "It's $currentTime on $currentDay, <br>";
                echo openCheck($currentDay, $currentHour);
            ?><br>
            <em>Monday - Saturday</em><br>
            11:00 AM to 10:00 PM<br>
            <br>
            <em>Closed on Sundays</em><br>
            

          </div>
          
        </div>
        <small>&copy;<?php echo date('Y') ; ?> - <?php echo $companyName; ?> </small>
      </div>


    </div>

    
    
  </body>
</html>