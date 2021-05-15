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
  <script type="text/javascript">
    function changeValue()
    {
      var status=document.getElementById("game");
      if (status.value=="football") 
      {
        document.getElementById("un").value="football_coordinator"; 
      }
      else if (status.value=="volleyball") 
      {
        document.getElementById("un").value="volleyball_coordinator"; 
      }
      else if (status.value=="basketball") 
      {
        document.getElementById("un").value="basketball_coordinator"; 
      }
      else if (status.value=="kabbadi") 
      {
        document.getElementById("un").value="kabbadi_coordinator"; 
      }else if (status.value=="badminton") 
      {
        document.getElementById("un").value="badminton_coordinator"; 
      }else if (status.value=="tabletennis") 
      {
        document.getElementById("un").value="tabletennis_coordinator"; 
      }else if (status.value=="carrom") 
      {
        document.getElementById("un").value="carrom_coordinator"; 
      }else if (status.value=="dart") 
      {
        document.getElementById("un").value="dart_coordinator"; 
      }else if (status.value=="highjump") 
      {
        document.getElementById("un").value="highjump_coordinator"; 
      }else if (status.value=="longjump") 
      {
        document.getElementById("un").value="longjump_coordinator"; 
      }else if (status.value=="marathon") 
      {
        document.getElementById("un").value="marathon_coordinator"; 
      }else if (status.value=="egame") 
      {
        document.getElementById("un").value="egame_coordinator"; 
      }else if (status.value=="chess") 
      {
        document.getElementById("un").value="chess_coordinator"; 
      }else if (status.value=="sackrace") 
      {
        document.getElementById("un").value="sackrace_coordinator"; 
      }else if (status.value=="sbadminton") 
      {
        document.getElementById("un").value="sbadminton_coordinator"; 
      }else if (status.value=="stabletennis") 
      {
        document.getElementById("un").value="stabletennis_coordinator"; 
      }
      else if (status.value=="scarrom") 
      {
        document.getElementById("un").value="scarrom_coordinator"; 
      }
      else
      {
        document.getElementById("fixture").style.visibility="hidden";
        
      }
    }

  </script>
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
      <input type="text" name="mobilenumber" value="<?php echo $_GET['mn']; ?>">
    </div>

    <div> 
      <input type="text" name="status" value="<?php echo $_GET['st']; ?>"readonly>
    </div>

    <div> 
  <select type="text" id="game" name="game" onchange="changeValue()" required>
  <option value="" disabled selected="">Select Game</option>
  <option value="football" name="football">Football</option>
  <option value="volleyball" name="volleyball">Volleyball</option>
  <option value="basketball" name="basketball">Basketball</option>
  <option value="kabbadi" name="kabbadi">Kabbadi</option>
  <option value="badminton" name="badminton">Badminton</option>
  <option value="tabletennis" name="tabletennis">Tabletennis</option>
  <option value="carrom" name="carrom">Carrom</option>
  <option value="marathon" name="marathon">Marathon</option>
  <option value="chess" name="chess">Chess</option>
<option value="longjump" name="longjump">Longjump</option>
<option value="highjump" name="highjump">Highjump</option>
<option value="sackrace" name="sackrace">Sackrace</option>
<option value="egame" name="egame">Egaming</option>
<option value="dart" name="dart">Dart</option>
<option value="sbadminton" name="sbadminton">Single Badminton</option>
<option value="stabletennis" name="stabletennis">Single Tabletennis</option>
<option value="scarrom" name="scarrom">Single Carrom</option>



          </select>
  
    </div>

   <input type="submit" name="submit" value="submit">
    <h3 style="color:white;">**Username will be saved automatically in the format game_coordinator</h3>
    
    
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
  $game=$_GET['game'];
  $status=$_GET['status'];

  if($status=="verified")
  {

  $query="UPDATE student SET fullname='$fullname',faculty='$faculty',batch='$batch',username='$username',password='$password',email='$email',mobilenumber='$mobilenumber' WHERE crn='$crn'";
  $result=mysqli_query($db,$query);
}

      if ($result) 
      {
        echo "Updated successfully to student list.<a href='adminviewstudents.php'>Check Updated list here</a>";
      }
      else
      {
        echo "Verify first to give authority to the coordinator!";
      }
$sql="SELECT crn,game FROM coordinator";
    $res=mysqli_query($db,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
        if ($row['crn']==$_GET['crn'])
         {
            $GLOBALS=$GLOBALS+1;
         }
         if ($row['game']==$_GET['game'])
         {
            $GLOBALS=$GLOBALS+2;
         }
    }
    if ($GLOBALS==0) 
    {
      $query1="INSERT INTO coordinator(fullname,faculty,batch,crn,username,password,email,mobilenumber,game) VALUES ('$fullname','$faculty','$batch','$crn','$username','$password','$email','$mobilenumber','$game')"; 
      $result1= mysqli_query($db,$query1);


      echo "Updated successfully to coordinator list.<a href='admincoordinator.php'>Check Updated list here</a>";
    }
    elseif($GLOBALS==1)
    {
      echo "crn already exists!";
    }
    else
    {
      echo"Game already exists!";
    }
}
else
echo "Please press update button to update status";

?>