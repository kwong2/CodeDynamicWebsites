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
     echo "<h3>We are open!</h3>";
   } else {
     echo "<h3>We are closed.</h3> ";
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

            <br>
            <br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.6802760556857!2d-80.18189168497392!3d26.011288883524077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9abe704fb2b1d%3A0x7eb6b7799be7a4c1!2s3605+Hollywood+Blvd%2C+Hollywood%2C+FL+33021!5e0!3m2!1sen!2sus!4v1506965094427" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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