<?php
include "connection.php";
session_start();
 $query="delete from chess where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('sviewchess.php?mes=Data deleted.','_self');</script>";

?>