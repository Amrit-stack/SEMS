<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:Admin_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title>Add games</title>
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

 </div>
<h2>Options</h2>
<div class="container-fluid>
	
	<div class="row">
		<div class="col-md-3">
<div class="list-group">
			<a href="Adminpanel.php" class="list-group-item active">Back</a>
				<br>
					<h2>Games</h2>
					<br>
					<div class="list-group">
				<a href="" class="list-group-item active">Football</a>
					<div class="list-group">
				
				<a href="viewfot1det.php" class="list-group-item ">Playerlist</a>
				

				


				<div class="list-group">
				<a href="" class="list-group-item active">Volleyball</a>
					<div class="list-group">
				
				<a href="viewvoll1det.php" class="list-group-item ">Playerlist</a></div>
				<div class="list-group">
				<a href="" class="list-group-item active">Basketball</a>
					<div class="list-group">
				
				<a href="viewbas1det.php" class="list-group-item ">Playerlist</a></div>
				
				

				<div class="list-group">
				<a href="" class="list-group-item active">Badminton</a>
					<div class="list-group">
				
				<a href="viewbad1.php" class="list-group-item ">Playerlist</a></div>
				
				

				<div class="list-group">
				<a href="" class="list-group-item active">Tabletennis</a>
					<div class="list-group">
				
				<a href="viewtable.php" class="list-group-item ">Playerlist</a></div>
				
				

				<div class="list-group">
				<a href="" class="list-group-item active">Kabbadi</a>
					<div class="list-group">
				
				<a href="viewkab1det.php" class="list-group-item ">Playerlist</a></div>
				
				<div class="list-group">
				<a href="" class="list-group-item active">carrom</a>
					<div class="list-group">
				
				<a href="viewcarr1det.php" class="list-group-item ">Playerlist</a></div>
				
				
				

				<div class="list-group">
				<a href="" class="list-group-item active">Marathon</a>
					<div class="list-group">
				
				<a href="viewmar1det.php" class="list-group-item ">Playerlist</a></div>
				
				

<div class="list-group">
				<a href="" class="list-group-item active">SackRace</a>
					<div class="list-group">
				
				<a href="viewsack1det.php" class="list-group-item ">Playerlist</a></div>
				
				

				
				<div class="list-group">
				<a href="" class="list-group-item active">longjump</a>
					<div class="list-group">
				
				<a href="viewlong1det.php" class="list-group-item ">Playerlist</a></div>
				
				


				<div class="list-group">
				<a href="" class="list-group-item active">highjump</a>
					<div class="list-group">
				
				<a href="viewhigh1det.php" class="list-group-item ">Playerlist</a></div>
				
				



				<div class="list-group">
				<a href="" class="list-group-item active">Egaming</a>
					<div class="list-group">
				
				<a href="viewegame1det.php" class="list-group-item ">Playerlist</a></div>
				
				

				<div class="list-group">
				<a href="" class="list-group-item active">chess</a>
					<div class="list-group">
				
				<a href="viewchess1det.php" class="list-group-item ">Playerlist</a></div>
				<div class="list-group">
				<a href="" class="list-group-item active">Dart</a>
					<div class="list-group">
				
				<a href="viewdart1det.php" class="list-group-item ">Playerlist</a></div>
				
				
				<div class="list-group">
				<a href="" class="list-group-item active">Single Badminton</a>
					<div class="list-group">
				
				<a href="viewsinglebadminton.php" class="list-group-item ">Playerlist</a></div>
				
				<div class="list-group">
				<a href="" class="list-group-item active">Single Carrom</a>
					<div class="list-group">
				
				<a href="viewsinglecarrom.php" class="list-group-item ">Playerlist</a></div>

				<div class="list-group">
				<a href="" class="list-group-item active">Single Tabletennis</a>
					<div class="list-group">
				
				<a href="viewsingletabletennis.php" class="list-group-item ">Playerlist</a></div>
				
				
				
				


				
					
				

			


		</div>




		<div class="col-md-8"></div>
		<div class="col-md-1"></div>
	</div>
</div>

<style>
html 
{
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
</style>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

