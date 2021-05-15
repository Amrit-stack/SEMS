<?php
include "connection.php";
session_start();
if(!isset($_SESSION['username'])){
	header('location:coordinator_login.php');

}

?>

<!DOCTYPE html>
<html>
<title>
  <?php 
echo "Welcome ".$_SESSION['username']."!";
 ?> 
</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="spstyle.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
<?php 
echo "Welcome ".$_SESSION['username']."!";
 ?> 
<div class="navbar">
  
  <a href="shownotices.php">Notices</a>
  <a href="coordinatorviewfixtures.php">Fixtures</a>
  <a href="viewsummary.php">Summary</a>


  <div class="dropdown">
    <button class="dropbtn">View 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="corviewplayers.php">Players</a>
      <a href="winnerlist.php">Winner</a>
      <a href="corsubcoordinator.php">Subcoordinator</a>
     
    </div>
  </div>

  <a href="myprofile.php">My profile</a>
  
  <a href="logout4.php">LogOut</a>

</div>

</body>
</html>
