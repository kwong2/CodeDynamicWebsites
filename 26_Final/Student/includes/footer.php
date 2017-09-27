<!-- variables -->
<?php 
  date_default_timezone_set("America/New_York"); 
  $currentTime = date("h:i A");
  $day_week = date("w");
  $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday") 
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
            <?php echo "Today is $days[$day_week] and It's now $currentTime ,";?><br>
            <em>Monday - Saturday</em><br>
            11:30 AM to 10:00 PM<br>
            <br>
            <em>Closed on Sundays</em><br>
            

          </div>
          
        </div>
        <small>&copy;<?php echo date('Y') ; ?> - <?php echo $companyName; ?> </small>
      </div>


    </div>

    
    
  </body>
</html>