<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
if(!isset($_SESSION['username']))
{
  header('location:coordinator_login.php');
   
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Fixture</title>
  <script type="text/javascript">
    function changeStatus()
    {
      var status=document.getElementById("game");
      if (status.value=="football" ||status.value=="volleyball" ||status.value=="basketball"||status.value=="kabbadi"||status.value=="tabletennis"||status.value=="carrom"||status.value=="badminton"||status.value=="chess") 
      {
        document.getElementById("fixture").style.visibility="visible";
        
      }
      else
      {
        document.getElementById("fixture").style.visibility="hidden";
        
      }
    }

  </script>
</head>

<link rel="viewport" content="width-device-width, initial scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
  .bgimg{
    body, html {
  height: 100%;
}
.bgimg {
  /* The image used */
  background-image: url("pic.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  }
</style>
<body>
  <div class="bgimg">
  </div>  
<nav class="navbar navbar-expand-sm bg-dark">
  <div class="container">

    
    <a href="corviewfixtures.php" class="navbar-brand text-warning font-weight-bold text-center">Back</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


</div>
</nav>

<form class="text-center border border-light p-5" action="" method="post">

    <p class="h4 mb-4">FILL INFORMATON</p>

    <!-- Name -->
    
<!--<input type="text" name="fixture" class="form-control mb-4" placeholder="fixture">-->
     <!--Faculty-->
      <input type="text" name="game" class="form-control mb-4" hidden="true">
      <input id="fixture" type="text" name="fixture" class="form-control mb-4" placeholder="fac1bat1 VS fac2bat2" required >
      <select type="text" name="venue" class="form-control mb-4"required>
        <option value="" disabled selected>venue</option>
        <option  >Block A</option>
        <option  >Block B</option>
        <option  >Block C</option>
        <option  >Block D</option>
      </select>
      <input class="form-control mb-4" type="time" name="time"required>
      <input class="form-control mb-4" type="date" name="date"required>
      
      <select type="text" name="gamelevel" class="form-control mb-4"required>
        <option value="Gamelevel" disabled="" selected>Gamelevel</option>
        <option  >Entry Level</option>
        <option  >Quarter Final</option>
        <option  >Semi Final</option>
        <option  >Final</option>
      </select>
         <button class="btn btn-info btn-block" type="submit" name="pat_submit" value="ADD">ADD</button>


</form>
<style type="">
     body {
    background-image: url("background.jpg");
    margin: 0;
    padding: 0;
}

form {

    width: 600px;
    margin: 0 auto;
}
</style>



  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php

include "connection.php";


?>

<?php
if (isset($_POST['pat_submit'])) 
{
  $Game=$_POST['game'];
  $Fixture=$_POST['fixture'];
  $Venue=$_POST['venue'];
  $Time=$_POST['time'];
  $Date=$_POST['date'];
  $Gamelevel=$_POST['gamelevel'];
$user_check_query="SELECT *FROM fixture";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_num_rows($result);
if ($_SESSION['username']=='football_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('football','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='volleyball_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('volleyball','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='basketball_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('basketball','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='kabbadi_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('kabbadi','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='badminton_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('badminton','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='tabletennis_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('tabletennis','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='carrom_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('carrom','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='dart_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('dart','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='highjump_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('highjump','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='longjump_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('longjump','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='marathon_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('marathon','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='sackrace_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('sackrace','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='egame_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('egame','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='chess_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('chess','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='sbadminton_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('sbadminton','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='tabletennis_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('stabletennis','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
elseif ($_SESSION['username']=='scarrom_coordinator')
 {
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('scarrom','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
else
echo "Record not found!";
}
?>

