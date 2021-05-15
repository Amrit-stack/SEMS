<?php
include "navbar3.php";
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Coordinator Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device width,initial width,initial scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	section
	{
		margin: -20px;
		height: 600px;
	}
</style>
</head>
<body>
<section>
	<div class="new_image">
		<br><br>
		<div class="box1">
			<h1 style="text-align: center;font-size: 35px;font-family: Lucida Console">Sport event management system</h1><br>
			<h1 style="text-align: center;font-size: 25px;font-family: Lucida Console">Coordinator</h1><br>
			<form name="login" action="" method="POST">
				<br><br>
				<div class="login">
				<input class="form-control" type="text" name="username" placeholder="username" required=""><br>
				<input class="form-control" type="password" name="password" placeholder="password" id="password" required><br>
				
				<input class="btn btn-primary" type="submit" name="submit" value="login" style="height: 40px;" width="20px;"></div>
				<input type="checkbox" onclick="myFunction()">Show Password
				<script type="text/javascript">
					function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                      x.type = "text";
                        } 
                        else  
                        		{
                               x.type = "password";
                               }
                         }


                         
				</script>
		</form>
		</div>
	</div>
</section>
</body>
</html>
<?php 
include "connection.php";
session_start();
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT *FROM coordinator where username='football_coordinator' and password='$password' or username='volleyball_coordinator' and password='$password'or username='basketball_coordinator' and password='$password'or username='kabbadi_coordinator' and password='$password'or username='badminton_coordinator' and password='$password'or username='tabletennis_coordinator' and password='$password'or username='carrom_coordinator' and password='$password'or username='dart_coordinator' and password='$password'or username='highjump_coordinator' and password='$password'or username='longjump_coordinator' and password='$password'or username='marathon_coordinator' and password='$password'or username='egame_coordinator' and password='$password'or username='chess_coordinator' and password='$password'or username='sackrace_coordinator' and password='$password'or username='sbadminton_coordinator' and password='$password'or username='stabletennis_coordinator' and password='$password' or username='scarrom_coordinator' and password='$password'";

	$result=mysqli_query($db,$query);
	$row=mysqli_num_rows($result);

	if($row==1)
	{
			if ($username == 'football_coordinator' or $username == 'volleyball_coordinator' or $username=='basketball_coordinator' or $username=='kabbadi_coordinator' or $username=='kabbadi_coordinator' or $username=='badminton_coordinator' or $username=='tabletennis_coordinator' or $username=='carrom_coordinator' or $username=='dart_coordinator' or $username=='highjump_coordinator' or $username=='longjump_coordinator' or $username=='egame_coordinator' or $username=='chess_coordinator' or $username=='sackrace_coordinator' or $username=='sbadminton_coordinator' or $username=='stabletennis_coordinator' or $username=='scarrom_coordinator'  ) 
			{
				 echo "login successful";
				 $_SESSION['username']=$username;
				header("Location:myprofile.php");
			}
			
			else
				echo "Username and password doesnot match!";
	}

	else
	{
		
		echo"You are not a registered coordinator.Please contact admin for more details.";
	}
	
}
?>
