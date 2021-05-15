<?php

include "navbar2.php";


?>


<!DOCTYPE html> 

<html>
<head>
  <title>Accountant Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device width,initial width,initial scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  section{
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
      <h1 style="text-align: center;font-size: 25px;font-family: Lucida Console">Accountant Login form</h1><br>
      <form name="login" action="" method="POST">
        <br><br>
        <div class="login">
        <input class="form-control" type="text" name="username" placeholder="username" required=""><br>
        <input class="form-control" type="password" name="password" placeholder="password" id="password" required><br>
        
        <input class="btn btn-primary" type="submit" name="login_receptionist" value="Submit" style="height: 40px;" width="20px;"></div>
        <input type="checkbox" onclick="myFunction()">Show Password
        <script type="text/javascript">
          function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                      x.type = "text";
                        } 
                        else {
                               x.type = "password";
                               }
                         }
        </script>
        
      
      <!--<p style="color: white; padding-left: 20px; height: 10px;">
        <a style="color: white" style="line-height: 20px" href=""></a>-->
        
      </p>
    </form>

    </div>
    

  </div>
  
    
  

</section>
</body>
</html>




<?php
$db=mysqli_connect('localhost','root','','sports');
session_start();
if (isset($_POST['login_receptionist'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$user_check_query="SELECT *FROM receptionist where username='$username' and password='$password'";
$results=mysqli_query($db, $user_check_query);
$user = mysqli_fetch_array($results);
if ($user['username']==$username && $user['password']==$password)
 {

 echo "Login successful";
 $_SESSION['username']=$username;
header('location:showreg.php');
}
else
echo "username and password doesnot match";
}
?>
