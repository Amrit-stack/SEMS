<?php
include "connection.php";
error_reporting(0);
$_GET['fn'];
$_GET['fl'];
$_GET['bt'];
$_GET['crn'];
$_GET['un'];
$_GET['pw'];
$_GET['email'];
$_GET['mn'];
$_GET['st'];
?>
 <!DOCTYPE html>
<html>
<head>
  <title>Make Coordinator</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <center><h1><b>Make Coordinator</b></h1></center>
<div class="container">
  <img src="user.png">
  
  <center><form action="" method="GET">
    <div>  
      <input type="text" name="fullname"value="<?php echo $_GET['fn'];  ?> " readonly>
    </div>

    <div> 
      <input type="text" name="faculty" value="<?php echo $_GET['fl']; ?>"readonly>
    </div>

    <div>
      <input type="text" name="batch" value="<?php echo $_GET['bt']; ?>"readonly>
    </div>

    <div>
    <input type="number" name="crn" value="<?php echo $_GET['crn']; ?>"readonly>
    </div>

    <div>
    <input type="text" id="un" name="username" value="<?php echo $_GET['un']; ?>" hidden>
    </div>

    <div> 
      <input type="password" name="password" id="myInput" value="<?php echo $_GET['pw']; ?>">
      
    </div>
    <div><input type="checkbox" onclick="myFunction()">Show Password</div>

    <div> 
      <input type="email" name="email" value="<?php echo $_GET['email']; ?>"readonly>
    </div>

    <div> 
      <input type="number" name="mobilenumber" value="<?php echo $_GET['mn']; ?>"readonly>
    </div>

    <div>
      <select name="status">
        <option disabled="" selected="">Select status</option>
        <option value="verified">Verified</option>
        <option>Not verified</option>
      </select>
   <input type="submit" name="submit" value="submit">
    
    
    
  </form></center>
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>  
</div>
</body>
</html>

<?php 

if ($_GET['submit']) 
{
  $GLOBALS=0;
  $fullname=$_GET['fullname'];
  $faculty=$_GET['faculty'];
  $batch=$_GET['batch'];
  $crn=$_GET['crn'];
  $username=$_GET['username'];
  $password=$_GET['password'];
  $email=$_GET['email'];
  $mobilenumber=$_GET['mobilenumber'];
  $mobilenumber=$_GET['mobilenumber'];
  $status=$_GET['status'];

  $query="UPDATE student SET fullname='$fullname',faculty='$faculty',batch='$batch',username='$username',password='$password',email='$email',mobilenumber='$mobilenumber',status='$status' WHERE crn='$crn'";
  $result=mysqli_query($db,$query);

  if ($result) 
  {
    echo "Updated successfully.<a href='adminviewstudents.php'>Check Updated list here</a>";
  }
  else
  {
    echo "Not updated";
  }

}
else
echo "Please press update button to update status";

?>