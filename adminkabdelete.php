<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
 $query="delete from kabbadi where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewkab1det.php?mes=Data deleted.','_self');</script>";

?>