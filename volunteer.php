<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:Admin_login.php');

}


?>







<!DOCTYPE html>
<html>
<head>
  
  <title>Add volunteer</title>
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
  .bgi
  mg{
    body, html {
  height: 00%;
}
.bgimg {
  /* The image used */
  background-image: url("images/bg.jpg");

  /* Full height */
  height: 00%;

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

    
    <a href="adminvolunteer.php" class="navbar-brand text-warning font-weight-bold text-center">Back</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


</div>
</nav>

<form class="text-center border border-light p-5" action="" method="post">

    <p class="h4 mb-4">FILL INFORMATON</p>

   
      <input type="text" name="CRN" class="form-control mb-4" placeholder="CRN" required>
      <input type="text" name="Name" class="form-control mb-4" placeholder="Name" required>
        <select type="text" name="Faculty" class="form-control mb-4" placeholder="Faculty" required>
          <option value="" disabled>Faculty</option>
                                         <option value="civil" name="civil" selected>Civil</option>
                                          <option name="computer" value="computer">Computer</option>
                                             <option value="electronics"  name="electronics">Electronics</option>
                                                 <option value="electrical"  name="electrical">Electrical</option>
                                                     <option value="civil and rural"  name="civil and rural">Civil and rural</option>
                                                          <option value="architecture"  name="architecure" value="architecture">Architecture</option>
    
          </select>
         <input type="number" name="Mobilenumber" class="form-control mb-4" placeholder="Mobilenumber" required>


  <select type="text" name="Gametype" class="form-control mb-4"required>
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



  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4./jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3./js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXBrRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

<?php

include "connection.php";


?>

<?php
if (isset($_POST['pat_submit'])) 
{
  $CRN=$_POST['CRN'];
  $Name=$_POST['Name'];
  $Faculty=$_POST['Faculty'];
    $Mobilenumber=$_POST['Mobilenumber'];
    $Game=$_POST['Gametype'];

$user_check_query="SELECT *FROM volunteer where CRN='$CRN' limit 1 ";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_num_rows($result);
if($user>0)
  echo"username already exists";
else if(empty($CRN))
  echo"CRN is required";
else if(empty($Name))
  echo"Name is required";
else if(empty($Faculty))
  echo"Faculty is required";
else if(empty($Mobilenumber))
echo"Mobilenumber is required";
  else if(strlen($Mobilenumber)!=10)
echo "Mobile number should be of 10 digit";
  
else{
$query="INSERT INTO volunteer(CRN,Name,Faculty,Mobilenumber,Gametype)values('$CRN','$Name','$Faculty','$Mobilenumber','$Game')";
  $result=mysqli_query($db,$query);
  echo "registration successful";
}
}


?>

