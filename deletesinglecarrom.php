<?php
include "connection.php";
session_start();
 $query="delete from carromsingle where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewsinglecarrom.php?mes=Data deleted.','_self');</script>";

?>