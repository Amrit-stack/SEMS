<?php
include "connection.php";
session_start();
 $query="DELETE FROM football WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('footballteam.php?mes=Data deleted.','_self');</script>";

?>