<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:coordinator_login.php');
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
      if (status.value=="football" ||status.value=="volleyball" ||status.value=="basketball"||status.value=="kabbadi"||status.value=="tabletennis"||status.value=="carrom"||status.value=="badminton") 
      {
        document.getElementById("CRN").style.visibility="hidden";
        document.getElementById("playername").style.visibility="hidden";
      }
      else
      {
        document.getElementById("CRN").style.visibility="visible";
        document.getElementById("playername").style.visibility="visible";

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

	}
</style>
<body>
	
<nav class="navbar navbar-expand-sm bg-dark">
	<div class="container">

		
		<a href="myprofile.php" class="navbar-brand text-warning font-weight-bold text-center">Back</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
			<span class="navbar-toggler-icon"></span>
		</button>


</div>
</nav>

<form class="text-center border border-light p-5" action="" method="post">

    <p class="h4 mb-4">FILL INFORMATON</p>

    <!-- Name -->
    
<!--<input type="text" name="CRN" class="form-control mb-4" placeholder="CRN">-->
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


</select>

      <input id="CRN" type="text" name="CRN" class="form-control mb-4" placeholder="Please enter your CRN" >
      <select type="text" name="batch" class="form-control mb-4">
        <option value="" disabled selected>Batch</option>
<option  value="015">015</option>
<option  value="016">016</option>
<option  value="017">017</option>
<option  value="018">018</option>
      </select>
      <input type="text" id="playername" name="playername" class="form-control mb-4" placeholder="Name">
        <select type="text" name="faculty" class="form-control mb-4" placeholder="Faculty" required>
        	<option value="" disabled selected>Faculty</option>

                                         <option value="civil" name="civil">Civil</option>
                                          <option value="computer" value="computer">Computer</option>
                                             <option value="electronics"  name="electronics">Electronics</option>
                                                 <option value="electrical"  name="electrical">Electrical</option>
                                                     <option value="civil and rural"  name="civil and rural">Civil and rural</option>
                                                          <option value="architecture"  name="architecure" value="architecture">Architecture</option>
    
        	</select>
         
         <select type="text" name="position" class="form-control mb-4" placeholder="Select the position" required>
          <option value="" disabled selected="">Position</option>
<option value="1" name="1">1</option>
<option value="2" name="2">2</option>
<option value="3" name="3">3</option>

</select>
         <button class="btn btn-info btn-block" type="submit" name="pat_submit" value="ADD">ADD</button>


</form>
<style type="">
     body {
    background-image: url("background.jpg");
    margin: 0;
    padding: 0;
    background-repeat: no-repeat;
    background-size: cover;

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
	$CRN=$_POST['CRN'];
  $Name=$_POST['playername'];
  $Faculty=$_POST['faculty'];
  $Batch=$_POST['batch'];
  $Position=$_POST['position'];
  $Game=$_POST['game'];

$user_check_query="SELECT *FROM winner where CRN='$CRN' limit 1";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_num_rows($result);
if(empty($Faculty))
	echo"Faculty is required";
else if(empty($Game))
	echo"Game is required";
else{
$query="INSERT INTO winner(CRN,playername,faculty,batch,position,game)values('$CRN','$Name','$Faculty','$Batch','$Position','$Game')";
	$result=mysqli_query($db,$query);
	echo "Addition successful";
}
}
?>

