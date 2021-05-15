<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:Admin_login.php');

}


?>







<!DOCTYPE html>
<html>
<head>
  <title>Add winner</title>
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

    
    <a href="adminviewfixtures.php" class="navbar-brand text-warning font-weight-bold text-center">Back</a>
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
  <select id="game" type="text" name="game" class="form-control mb-4" placeholder="Game" onchange="changeStatus()"required>
  <option value="" disabled selected="">Game</option>
  <option value="football" name="football">Football</option>
  <option value="volleyball" name="volleyball">Volleyball</option>
  <option value="basketball" name="basketball">Basketball</option>
  <option value="kabbadi" name="kabbadi">Kabbadi</option>
  <option value="badminton" name="badminton">Badminton</option>
  <option value="tabletennis" name="tabletennis">Tabletennis</option>
  <option value="carrom" name="carrom">Carrom</option>
  <option value="marathon" name="marathon">Marathon</option>
  <option value="chess" name="chess">Chess</option>
<option value="longjump" name="longjump">Longjump</option>
<option value="highjump" name="highjump">Highjump</option>
<option value="sackrace" name="sackrace">Sackrace</option>
<option value="egaming" name="egaming">Egaming</option>
<option value="dart" name="dart">Dart</option>



</select>

      <input id="fixture" type="text" name="fixture" class="form-control mb-4" placeholder="fac1bat1 VS fac2bat2" >
      <select type="text" name="venue" class="form-control mb-4">
        <option value="" disabled selected>venue</option>
        <option  >Block A</option>
        <option  >Block B</option>
        <option  >Block C</option>
        <option  >Block D</option>
      </select>
      <input class="form-control mb-4" type="time" name="time">
      <input class="form-control mb-4" type="date" name="date">
      
      <select type="text" name="gamelevel" class="form-control mb-4">
        <option value="Gamelevel" disabled selected>Gamelevel</option>
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
$query="INSERT INTO fixture(game,fixture,venue,time,date,gamelevel)values('$Game','$Fixture','$Venue','$Time','$Date','$Gamelevel')";
  $result=mysqli_query($db,$query);
  echo "Addition successful";
}
?>

