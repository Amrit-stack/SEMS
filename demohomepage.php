<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="homestyle.css">
<body>
<div id="videoDiv2"> 
<video id="video2" preload="" autoplay="" muted="" playsinline="" loop="">
<source src="Football kick Animation.mp4" type="video/mp4">
<source src="video/t13.mp4" type="video/mp4">
</video> 
    <div id="videoMessage2" class="styling">
        <div>
    <ul>
    <li><a href="student_login.php">Student Login</a></li>
    <li><a href="Admin_login.php">Admin Login</a></li>
    <li><a href="receptionist.php">Receptionist Login</a></li>
    </ul>
    
  </div>
  <div class="animation">
    <h1>TIME TO EXPIRE</h1>
    <p id="demo"></p>

      <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Nov 27, 2021 15:37:25").getTime();

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
  <div>
    <video autoplay loop muted>
      <source src="Football kick Animation.mp4" type="video/mp4">
    </video>
  </div>
<div></div>
 
    </div>
</div>
<style type="text/css">
	#videoDiv2 {width:100%; max-width:1200px; margin:auto; display:block; position: relative;} /* This has been changed */
#video2{width:100%; height:auto } /* This has been changed */
#videoMessage2 { position: absolute; top: 0; left: 0;
display: flex;
flex-direction: column; 
justify-content: center;
align-items: center; 
width: 100%;
height: 100%;}

</style>
</body>
</html>