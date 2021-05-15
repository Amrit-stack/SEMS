<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
if(!isset($_SESSION['username']))
{
  header('location:coordinator_login.php');
   
}
?>
<?php
include "connection.php";
error_reporting(0);
$_GET['crn'];
$_GET['name'];
$_GET['fl'];
$_GET['bt'];
$_GET['game'];

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
    <input type="text" name="game" value="<?php echo $_GET['game']; ?>"readonly>
    </div>

    <div> 
      <select type="number" name="position">
        <option disabled>Select Position</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
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
  $crn=$_GET['crn'];
  $playername=$_GET['playername'];
  $faculty=$_GET['faculty'];
  $batch=$_GET['batch'];
  $position=$_GET['position'];
  $game=$_GET['game'];
  
  if ($_SESSION['username']=='football_coordinator') 
  { 
  $query="UPDATE football SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
  elseif ($_SESSION['username']=='volleyball_coordinator') 
  { 
  $query="UPDATE volleyball SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='basketball_coordinator') 
  { 
  $query="UPDATE basketball SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='kabbadi_coordinator') 
  { 
  $query="UPDATE kabbadi SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='badminton_coordinator') 
  { 
  $query="UPDATE football SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO badminton(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='tabletennis_coordinator') 
  { 
  $query="UPDATE tabletennis SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='carrom_coordinator') 
  { 
  $query="UPDATE carrom SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='dart_coordinator') 
  { 
  $query="UPDATE dart SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='highjump_coordinator') 
  { 
  $query="UPDATE highjump SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='longjump_coordinator') 
  { 
  $query="UPDATE longjump SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='marathon_coordinator') 
  { 
  $query="UPDATE marathon SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='egame_coordinator') 
  { 
  $query="UPDATE egame SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='chess_coordinator') 
  { 
  $query="UPDATE chess SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='sbadminton_coordinator') 
  { 
  $query="UPDATE badmintonsingle SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='stabletennis_coordinator') 
  { 
  $query="UPDATE tabletennissingle SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='scarrom_coordinator') 
  { 
  $query="UPDATE carromsingle SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
elseif ($_SESSION['username']=='sackrace_coordinator') 
  { 

  $query="UPDATE sackrace SET playername='$playername',faculty='$faculty',batch='$batch',position='$position' WHERE crn='$crn'";

  $query1="INSERT INTO winner(crn,playername,faculty,batch,position,game) VALUES ('$crn','$playername','$faculty','$batch','$position','$game')"; 
  }
  else
  {
    echo "No results!";
  }


  $result= mysqli_query($db,$query);
  $result1= mysqli_query($db,$query1);
  
  echo "Updated successfully.<a href='corviewplayers.php'>Check Updated list here</a>";
}
else
echo "Please press update button to update status";
 ?>