<!DOCTYPE html>
<html>
<head>
  <title>SPORTS EVENT MANAGEMENT SYSTEM</title>
</head>
<link rel="stylesheet" type="text/css" href="homestyle.css">
<body>

  <div>
    <ul>
    <li><a href="student_login.php">Student Login</a></li>
    <li><a href="coordinator_login.php">Coordinator Login</a></li>
    <li><a href="Admin_login.php">Admin Login</a></li>
    <li><a href="receptionist.php">Accountant Login</a></li>
    </ul>
    
  </div>
  <div class="animation">
    <h2 style="font-family: Lucida Console;">TIME TO EXPIRE</h2>
    <p id="demo"></p>

      <script>
      // Set the date we're counting down to
      var countDownDate = new Date("March 20, 2021 15:37:25").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
      </script>
  </div>
  

  <div class="footer">
    <p></p>
    <p>©Nepal Engineering college</p>
  </div>
</body>
</html>