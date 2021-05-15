<?php
include "connection.php";
session_start();
if(!isset($_SESSION['username'])){
	header('location:student_login.php');

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
  <div class="dropdown">
    <button class="dropbtn">Play Game 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="single.php">Single game</a>
      <a href="teamgame.php">Team game</a>
    </div>
  </div>
  <a href="shownotices.php">Notices</a>
  <a href="viewfixtures.php">View Fixtures</a>
  <a href="viewsummary.php">Summary</a>


  <div class="dropdown">
    <button class="dropbtn">View 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="viewwinnerlist.php">View Winners</a>
      <a href="viewcoordinator.php">View Coordinators</a>
      <a href="viewsubcoordinator.php">View SubCoordinators</a>
      <a href="viewvolunteer.php">View Volunteers</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Single Registration
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sviewdart.php">Dart</a>
      <a href="sviewhighjump.php">Highjump</a>
      <a href="sviewlongjump.php">Longjump</a>
      <a href="sviewmarathon.php">Marathon</a>
      <a href="sviewegame.php">Egaming</a>
      <a href="sviewchess.php">Chess</a>
      <a href="sviewsackrace.php">Sackrace</a>
      <a href="sviewbadminton.php">Single Badminton</a>
      <a href="sviewtabletennis.php">Single Tabletennis</a>
      <a href="sviewcarrom.php">Single Carrom</a>
    </div>

  </div>

  <div class="dropdown">
    <button class="dropbtn">Team Registration
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="footballteam.php">Football</a>
      <a href="volleyballteam.php">Volleyball</a>
      <a href="basketballteam.php">Basketball</a>
      <a href="kabbaditeam.php">Kabaddi</a>
      <a href="badmintonteam.php">Badminton</a>
      <a href="tabletennisteam.php">Tabletennis</a>
      <a href="carromteam.php">Carrom</a>
    </div>

  </div>
  <a href="logout1.php">LogOut</a>

</div>

<div class="bucket">
	<?php 
                     $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                       	?>
                    <?php
				
	                    echo "<a href='register.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]'>Register for coupon</a>";
	                  ?>
	                 <?php endwhile;?>

</div>
</body>
</html>
