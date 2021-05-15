<?php
include "connection.php";
session_start();
 $query="DELETE FROM badminton WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('badmintonteam.php?mes=Data deleted.','_self');</script>";

?>