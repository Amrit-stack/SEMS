<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
 $query="delete from carrom where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewcarr1det.php?mes=Data deleted.','_self');</script>";

?>