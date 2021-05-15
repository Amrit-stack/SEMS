








--<!DOCTYPE html>




<html>
<head>
	<title>Register for football</title>
</head>
<link rel="viewport" content="width-device-width, initial scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
	<div class="container">

		<a href="" class="navbar-brand text-warning font-weight-bold text-center">REGISTER FOR FOOTBALL</a>
		<a href="studentpage.php" class="navbar-brand text-warning font-weight-bold text-center">MY PROFILE</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
</nav>

<form class="text-center border border-light p-5" action="" method="post">

    <p class="h4 mb-4">FILL INFORMATON</p>

    <!-- Name -->

     <input type="text" name="CRN" class="form-control mb-4" placeholder="Enter CRN" required>
      <input type="text" name="playername" class="form-control mb-4" placeholder="Enter your name" required>

 <label>Faculty</label>
    <select type="text" class="browser-default custom-select mb-4" name="faculty">
        <option value="" disabled>Choose option</option>
        <option value="Civil" selected>Civil</option>
        <option value="Computer">Computer</option>
        <option value="Electronics">Electronics</option>
        <option value="Electrical">Electrical</option>
        <option value="Electrical">Civil and rural</option>
        <option value="Electrical">Architecture</option>
    </select>
    <label>Team</label>
    <select type="text" class="browser-default custom-select mb-4" name="team">
        <option value="" disabled>Choose option</option>
        <option value="Team A" selected>Team A</option>
        <option value="Team B">Team B</option>
        <option value="Team C">Team C</option>
        <option value="Team D">Team D</option>
        <option value="Team E">Team E</option>
        <option value="Team F">Team F</option>
    </select>

<button class="btn btn-info btn-block" type="submit" name="pat_submit" value="ADD">SUBMIT</button>

</form>
</body>
</html>
<?php
include"connection.php";
?>
<?php
if (isset($_POST['pat_submit'])) {

	$CRN=$_POST['CRN'];
	$playername=$_POST['playername'];
	$faculty=$_POST['faculty'];
	$team=$_POST['team'];

$user_check_query="SELECT *FROM football where CRN='$CRN'";
$result=mysqli_query($db,$user_check_query);
$user=mysqli_num_rows($result);
if ($user>0) 
	echo "CRN already exists";
else if(empty($playername))
	echo"playername is required";
else if(empty($faculty))
	echo"faculty is required";
else if(empty($team))
	echo"team is required";
else{
	$query="INSERT INTO football(CRN,faculty,playername,team)values('$CRN','$faculty','$playername','$team')";
	mysqli_query($db,$query);
	echo "registration successful";
}
}
?>
