<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
 $query="delete from tabletennis where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewtable.php?mes=Data deleted.','_self');</script>";

?>