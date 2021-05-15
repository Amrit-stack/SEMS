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
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='teamA.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Football</button></a>";
                    ?>
                   <?php endwhile;?>
        </li>



        <li>
          <?php 
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='volleyball.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Volleyball</button></a>";
                    ?>
                   <?php endwhile;?>
        </li>

        <li>
        <?php 
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='basketball.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Basketball</button></a>";
                    ?>
                   <?php endwhile;?>
        </li>
  
        <li>
        <?php 
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='kabbadi.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Kabaddi</button></a>";
                    ?>
                   <?php endwhile;?>
        </li>

        <li>
          <?php 
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='badminton.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Badminton</button></a>";
                    ?>
                   <?php endwhile;?>
        </li>
        <li>
        <?php 
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='tabletennis.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Tabletennis</button></a>";
                    ?>
                   <?php endwhile;?>
        </li>
        <li>
             <?php 
                      $query="SELECT *FROM student WHERE username = '{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>
                    <?php
        
                      echo "<a href='carrom.php?crn=$row[crn]&name=$row[fullname]&fl=$row[faculty]&bt=$row[batch]&un=$row[username]'><button class= 'punch'>Carrom</button></a>";
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