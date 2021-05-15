<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
if(!isset($_SESSION['username']))
{
  header('location:coordinator_login.php');
   
}
?>

<?php
if ($_SESSION['username']=='football_coordinator') 
{
 $query="delete from football where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";
}
elseif ($_SESSION['username']=='volleyball_coordinator')
{
 $query="delete from volleyball where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='basketball_coordinator')
{
 $query="delete from basketball where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='kabbadi_coordinator')
{
 $query="delete from kabbadi where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='badminton_coordinator')
{
 $query="delete from badminton where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='tabletennis_coordinator')
{
 $query="delete from tabletennis where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='carrom_coordinator')
{
 $query="delete from carrom where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='dart_coordinator')
{
 $query="delete from dart where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='highjump_coordinator')
{
 $query="delete from highjump where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='longjump_coordinator')
{
 $query="delete from longjump where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='marathon_coordinator')
{
 $query="delete from marathon where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='egame_coordinator')
{
 $query="delete from egame where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='chess_coordinator')
{
 $query="delete from chess where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='sbadminton_coordinator')
{
 $query="delete from badmintonsingle where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='stabletennis_coordinator')
{
 $query="delete from tabletennissingle where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
elseif ($_SESSION['username']=='scarrom_coordinator')
{
 $query="delete from carromsingle where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('corviewplayers.php?mes=Data deleted.','_self');</script>";	
}
else
echo"No data";

?>





