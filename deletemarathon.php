<?php
include "connection.php";
session_start();
 $query="delete from marathon where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewmar1det.php?mes=Data deleted.','_self');</script>";

?>