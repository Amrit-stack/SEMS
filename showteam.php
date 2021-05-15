<?php
include "connection.php";
session_start();
if(!isset($_SESSION['username'])){
  header('location:student_login.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration for teamgame</title>
  <meta name="description" content="A collection of CSS3 buttons by Chad Mazzola">
  <link rel="stylesheet" href="stylesheets/buttons.css" type="text/css" media="screen">
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

    <div class="button-collection">
      

      <ul class="column">
        <li>
          <?php 
                      $query="SELECT *FROM football WHERE username = '{$_SESSION['username']} and teamname='laliguras' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
                    echo ;
        
                    
                    ?>
                   <?php endwhile;?>
        </li>


        
</ul>
</div>
  <a href="studentpage.php" class="btn btn-primary">Back</a> 
</body>
<style type="text/css">
  body
  {
    background-image:url("newback.jpg");
    background-repeat: no-repeat;
    background-size: 100%;

  }

</style>

</html>