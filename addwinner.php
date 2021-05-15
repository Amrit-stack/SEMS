<?php
include "connection.php";
error_reporting(0);
$_GET['crn'];
 $_GET['name'];
 $_GET['fl'];
 $_GET['bt'];
  $_GET['ps'];

 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Add winner</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <center><h1><b><u>Make Winner</u></b></h1></center>
<div class="container">
	<img src="user.png">
  
  <center><form action="" method="GET">
    <div>  
      <input type="text" name="crn"value="<?php echo $_GET['crn'];  ?> " readonly>
    </div>

    <div> 
      <input type="text" name="playername" value="<?php echo $_GET['name']; ?>"readonly>
    </div>

    <div>
      <input type="text" name="faculty" value="<?php echo $_GET['fl']; ?>"readonly>
    </div>

    <div>
    <input type="number" name="batch" value="<?php echo $_GET['bt']; ?>"readonly>
    </div>

    <div>
    <select type="number" name="position" value="<?php echo $_GET['ps']; ?>">
      <option>1</option>
      <option>2</option>
      <option>3</option>      
    </select>
    </div>

    <div> 
      <input type="text" name="game" value="badminton" readonly>
    </div>

   <input type="submit" name="submit" value="submit">
    
    
    
  </form></center>
  
</div>
</body>
</html>
</body>
</html>

<?php 
if ($_GET['submit']) 
{
	$crn=$_GET['crn'];
	$playername=$_GET['playername'];
	$faculty=$_GET['faculty'];
	$batch=$_GET['batch'];
  $position=$_GET['position'];
  $game=$_GET['game'];

	$query="UPDATE badmintonsingle SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 

	$result= mysqli_query($db,$query);
  $result1= mysqli_query($db,$query1);
  
  echo "Updated successfully.<a href='viewbad1.php'>Check Updated list here</a>";
}
else
echo "Please press update button to update status";
 ?>