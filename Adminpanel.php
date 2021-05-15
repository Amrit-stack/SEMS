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

</head>
<title>Welcome to Admin Panel</title>
<body>
<style>
	body
	{
		background-image:url("newback.jpg");
		background-repeat: no-repeat;
        background-size: 100% 100%;

	}

</style>	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			

<hr>
			<div class="list-group">
				<h3 class="list-group-item active">Games</h3>
				
				<a href="tournament.php" class="list-group-item ">Game Details</a>
				<a href="adminviewfixtures.php" class="list-group-item ">View fixtures</a>
				
			</div>

			<hr>
			<div class="list-group">
				<h6 class="list-group-item active">See</h6>
				<a href="admincoordinator.php" class="list-group-item ">Coordinator list</a>
				<a href="adminsubcoordinator.php" class="list-group-item ">Sub coordinator list</a>
				<a href="adminvolunteer.php" class="list-group-item ">Volunteer list</a>
				
			</div>
			<hr>
			<div class="list-group">
				<h6 class="list-group-item active">Winner</h6>
				<a href="winnerlist.php" class="list-group-item ">Winner list</a>
			</div>
			<hr>
			

			<hr>
			<div class="list-group">
				<a href="adminviewstudents.php" class="list-group-item active">Students</a>
				
			</div>

			<hr>
			<div class="list-group">
				<a href="adminviewnotices.php" class="list-group-item active">Notices</a>
				
			</div>
<hr>
			<div class="list-group">
				<a href="adminviewsummary.php" class="list-group-item active">Summary</a>	
			</div>

			<hr>
			<div class="list-group">
				
				<a href="logout.php" class="list-group-item active">LogOut</a></div>

		</div>
		<div class="col-md-8"></div>
		<div class="col-md-1"></div>
	</div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
