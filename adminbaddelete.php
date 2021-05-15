<?php
$db = mysqli_connect("localhost", "root", "", "sports");
session_start();
 $query="delete from badminton where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewbad1.php?mes=Data deleted.','_self');</script>";

?>