<?php 
include "connection.php";
session_start();
if(!isset($_SESSION['username']))
{
  header('location:student_login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration for game</title>
  <meta name="description" content="A collection of CSS3 buttons by Chad Mazzola">
  <link rel="stylesheet" href="stylesheets/buttons.css" type="text/css" media="screen">
</head>
<style>
  body
  {
    background-image: url("newback.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
<body>

    <div class="button-collection">
      

      <ul class="column">
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='singleform.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Dart</button></a>";
        ?>
        <?php endwhile;?>

        </li>
        <!-- For Highjump-->
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='highjump.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Highjump</button></a>";
        ?>
        <?php endwhile;?>

        </li>

        <!-- For Longjump-->
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='longjump.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Longjump</button></a>";
        ?>
        <?php endwhile;?>

        </li>

        <!-- For Marathon-->
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='marathon.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Marathon</button></a>";
        ?>
        <?php endwhile;?>

        </li>

        <!-- For Egaming-->
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='egaming.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Egaming</button></a>";
        ?>
        <?php endwhile;?>

        </li>

        <!-- For Chess-->
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='chess.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Chess</button></a>";
        ?>
        <?php endwhile;?>

        </li>

        <!-- For Sackrace-->
        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='sackrace.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Sackrace</button></a>";
        ?>
        <?php endwhile;?>
        </li> 

        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='badmintonsingle.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Single Badminton</button></a>";
        ?>
        <?php endwhile;?>

        </li> 

        <li>
          <?php 
                     $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                      $result= mysqli_query($db,$query);
                      ?>
                      <?php
                       while($row = mysqli_fetch_array($result)):
                        ?>

        <?php  
        echo "<a href='tabletennissingle.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Single Tabletennis</button></a>";
        ?>
        <?php endwhile;?>

        </li> 
      <li>
                <?php 
                           $query="SELECT *FROM student WHERE username ='{$_SESSION['username']}' LIMIT 1";
                            $result= mysqli_query($db,$query);
                            ?>
                            <?php
                             while($row = mysqli_fetch_array($result)):
                              ?>

              <?php  
              echo "<a href='carromsingle.php?fl=$row[faculty]&uname=$row[username]&bt=$row[batch]&name=$row[fullname]&crn=$row[crn]'><button class='punch'>Single Carrom</button></a>";
              ?>
              <?php endwhile;?>

              </li> 


      </ul>
    </div>
    <a href="studentpage.php">Back</a>
</body>
</html>
