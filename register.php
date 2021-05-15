<?php
include "connection.php";
error_reporting(0);
$_GET['crn'];
 $_GET['name']; 
  $_GET['fl']; 
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Please register for coupon</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <center><h1><b>Register for token</b></h1></center>
<div class="container">
	<img src="user.png">
  
  <center>
    <form action="connect.php" method="GET">
<div>
      
      <input type="text" name="crn" value="<?php echo $_GET['crn'];  ?>" readonly>
    </div>
    <div>
      
      <input type="text" name="fullname" value="<?php echo $_GET['name'];  ?>"readonly>
    </div>

    <div>  
      <input type="text" name="faculty" value="<?php echo $_GET['fl'];  ?>"readonly>
    </div>

    <div >  
      <input type="date" name="DOR" value="<?php echo date('Y-m-d');?>"readonly>
    </div>
    
        
    <button type="submit" name="submit"><b>Register</b></button>
    
    
    
  </form></center>
</div>
</body>
</html>
</body>
</html>