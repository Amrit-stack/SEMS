<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:Admin_login.php');

}


?>







<!DOCTYPE html>
<html>
<head>
  
  <title>Add subcoordinator</title>
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

    
   <a href="adminsubcoordinator.php" class="navbar-brand text-warning font-weight-bold text-center">Back</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


</div>
</nav>

<form class="text-center border border-light p-5" action="" method="post">

    <p class="h4 mb-4">FILL INFORMATON</p>

   
      
      <input type="text" name="fullname" class="form-control mb-4" placeholder="fullname" required>
        <select type="text" name="faculty" class="form-control mb-4" placeholder="Faculty" required>
          <option value="" disabled>Faculty</option>
                                         <option value="civil" name="civil" selected>Civil</option>
                                          <option name="computer" value="computer">Computer</option>
                                             <option value="electronics" name="electronics">Electronics</option>
                                                 <option value="electrical"  fullname="electrical">Electrical</option>
                                                     <option value="civil and rural"  name="civil and rural">Civil and rural</option>
                                                          <option value="architecture"  name="architecure" value="architecture">Architecture</option>
    
          </select>

          <select type="text" name="batch" class="form-control mb-4" placeholder="Faculty" required>
          <option value="" disabled>Select Batch</option>
          <option value="016" >016</option>         
          <option value="017" >017</option>
          <option value="018">018</option>
          <option value="019">019</option>
                      
    
          </select>
          <input type="number" name="CRN" class="form-control mb-4" placeholder="CRN" required>
          <input type="email" name="email" class="form-control mb-4" placeholder="Email" required>
         <input type="number" name="mobilenumber" class="form-control mb-4" placeholder="Mobilenumber" maxlength="10" minlength="10" required>


  <select type="text" name="game" class="form-control mb-4"required>
  <option value="" disabled selected="">Game</option>
  <option value="football" fullname="football">Football</option>
  <option value="volleyball" fullname="volleyball">Volleyball</option>
  <option value="basketball" fullname="basketball">Basketball</option>
  <option value="kabbadi" fullname="kabbadi">Kabbadi</option>
  <option value="badminton" fullname="badminton">Badminton</option>
  <option value="tabletennis" fullname="tabletennis">Tabletennis</option>
  <option value="carrom" fullname="carrom">Carrom</option>
  <option value="marathon" fullname="marathon">Marathon</option>
  <option value="chess" fullname="chess">Chess</option>
<option value="longjump" fullname="longjump">Longjump</option>
<option value="highjump" fullname="highjump">Highjump</option>
<option value="sackrace" fullname="sackrace">Sackrace</option>
<option value="egaming" fullname="egaming">Egaming</option>
<option value="dart" fullname="dart">Dart</option>
<option value="sbadminton" fullname="sbadminton">Single Badminton</option>
  <option value="stabletennis" fullname="stabletennis">Single Tabletennis</option>
  <option value="scarrom" fullname="scarrom">Single Carrom</option>



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
  $fullname=$_POST['fullname'];
  $faculty=$_POST['faculty'];
  $batch=$_POST['batch'];
  $CRN=$_POST['CRN'];
  $email=$_POST['email'];
  $mobilenumber=$_POST['mobilenumber'];
  $game=$_POST['game'];

$user_check_query="SELECT *FROM subcoordinator where CRN='$CRN' limit 1 ";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_num_rows($result);
if($user>0)
  echo"userfullname already exists";
else if(empty($CRN))
  echo"CRN is required";
else if(empty($fullname))
  echo"fullname is required";
else if(empty($faculty))
  echo"Faculty is required";
else if(empty($mobilenumber))
  echo"Mobilenumber is required";
else if (strlen($mobilenumber)!=10)
 {
  echo "Mobile number should be of 10 digits";
}

else{
$query="INSERT INTO subcoordinator(fullname,faculty,batch,CRN,email,mobilenumber,game)values('$fullname','$faculty','$batch','$CRN','$email','$mobilenumber','$game')";
  $result=mysqli_query($db,$query);
  echo "registration successful";
}
}


?>

