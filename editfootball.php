<?php
include "connection.php";
error_reporting(0);
$_GET['crn'];
 $_GET['name'];
 $_GET['fl'];
 $_GET['batch']; 
  $_GET['cap']; 
  $_GET['ch']; 
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Edit Player</title>
  <link rel="stylesheet" href="style2.css">
</head>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
  <center><h1><b><u>Update Player</u></b></h1></center>
<div class="container">
	<img src="user.png">
  
  <center><form action="" method="GET">
<div>
      
      <input type="text" name="crn"value="<?php echo $_GET['crn']; ?>">
    </div>
    <div>
      
      <input type="text" name="playername" value="<?php echo $_GET['name']; ?>">
    </div>

    <div>

  <input type="text" name="faculty" value="<?php echo $_GET['fl']; ?>">
  
    </div>
    <div>
    <input type="text" name="batch" value="<?php echo $_GET['batch']; ?>">
    </div>
   <div>

  <input type="text" name="captain" value="<?php echo $_GET['cap']; ?>">
  
    </div>

    <div>

  <input type="text" name="coach" value="<?php echo $_GET['ch']; ?>">
  
    </div>

   <input type="submit" name="submit" class="btn btn-danger" value="submit">
    
    
    
  </form></center>
  
</div>
</body>
</html>
</body>
</html>

<?php 
if ($_GET['submit']) 
{
	$CRN=$_GET['crn'];
	$playername=$_GET['playername'];
	$faculty=$_GET['faculty'];
	$batch=$_GET['batch'];
  $captain=$_GET['captain'];
  $coach=$_GET['coach'];

	$query="UPDATE football SET playername='$playername',faculty='$faculty',batch='$batch',captain='$captain',coach='$coach' WHERE crn='$CRN'";
	$result= mysqli_query($db,$query);
	if ($result) 
  {
		echo "Updated successfully.<a href='footballteam.php'>Check Updated list here</a>";
	}
	else
		echo "Not updated";
}
else
echo "Please press update button to update status";
 ?>