<?php
include "connection.php";
session_start();
 $query="delete from longjump where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewlong1det.php?mes=Data deleted.','_self');</script>";

?>