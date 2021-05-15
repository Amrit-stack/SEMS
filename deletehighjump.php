<?php
include "connection.php";
session_start();
 $query="delete from highjump where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewhigh1det.php?mes=Data deleted.','_self');</script>";

?>