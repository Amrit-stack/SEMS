<?php
include "connection.php";
error_reporting(0);
$_GET['crn'];
 $_GET['name'];
 $_GET['fl'];
 $_GET['st']; 
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Pay allowance</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <center><h1><b><u>Update Student</u></b></h1></center>
<div class="container">
	<img src="user.png">
  
  <center><form action="" method="GET">
<div>
      
      <input type="text" name="CRN"value="<?php echo $_GET['crn'];  ?>">
    </div>
    <div>
      
      <input type="text" name="fullname" value="<?php echo $_GET['name']; ?>">
    </div>

    <div>

  <input type="text" name="faculty" value="<?php echo $_GET['fl']; ?>">
  
    </div>
    <div>
    <select type="text" name="status" value="<?php echo $_GET['st']; ?>">
      <option>Paid</option>
      <option>Unpaid</option>
    </select>
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
	$CRN=$_GET['CRN'];
	$fullname=$_GET['fullname'];
	$faculty=$_GET['faculty'];
	$status=$_GET['status'];
	$query="UPDATE couponist SET fullname='$fullname',faculty='$faculty',status='$status' WHERE CRN='$CRN'";
	$result= mysqli_query($db,$query);
	if ($result) 
  {
		echo "Updated successfully.<a href='showreg.php'>Check Updated list here</a>";
	}
	else
		echo "Not updated";
}
else
echo "Please press update button to update status";
 ?>