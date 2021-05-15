<?php
include "connection.php";
error_reporting(0);
$_GET['SN'];
 $_GET['fix'];
 $_GET['ven'];
 $_GET['ti'];
 $_GET['dat'];
 $_GET['gam']; 
  $_GET['gl'];
 $_GET['wt'];
 
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Update fixture</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <center><h1><b><u>Update Winner</u></b></h1></center>
<div class="container">
  <img src="user.png">
  
  <center><form action="" method="GET">
    <div>
      <input type="number" name="SN" value="<?php echo $_GET['SN'];  ?>" readonly>
    </div>

<div>
      
      <input type="text" name="fixture"value="<?php echo $_GET['fix'];  ?>" readonly>
    </div>
    <div>
      
      <input type="text" name="venue" value="<?php echo $_GET['ven']; ?>"readonly>
    </div>

    <div>

  <input type="text" name="time" value="<?php echo $_GET['ti']; ?>"readonly>
    </div>

    <div>
    <input type="date" name="date" value="<?php echo $_GET['dat']; ?>"readonly>
    </div>

    <div>
    <input type="text" name="game" value="<?php echo $_GET['gam']; ?>"readonly>
    </div>
 <div>
    <select type="text" name="gamelevel" value="<?php echo $_GET['gl']; ?>" readonly>
      <option>Entry</option>
      <option>Quarterfinal</option>
      <option>Semifinal</option>
      <option>Final</option>

    </select>
    </div>

    <div>
    <input type="text" name="winnerteam" value="<?php echo $_GET['wt']; ?>" placeholder="Please enter winner">
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
  $SN=$_GET['SN'];
  $fixture=$_GET['fixture'];
  $venue=$_GET['venue'];
  $time=$_GET['time'];
  $date=$_GET['date'];
  $game=$_GET['game'];
  $gamelevel=$_GET['gamelevel'];
   $winnerteam=$_GET['winnerteam'];
  $query="UPDATE fixture SET fixture='$fixture', venue='$venue',time='$time',date='$date',game='$game',gamelevel='$gamelevel',winnerteam='$winnerteam' WHERE SN='$SN'";
  $result= mysqli_query($db,$query);
  if ($result) 
  {
    echo "Updated successfully.<a href='adminviewfixtures.php'>Check Updated list here</a>";
  }
  else
    echo "Not updated";
}
else
echo "Please press update button to update status";
 ?>