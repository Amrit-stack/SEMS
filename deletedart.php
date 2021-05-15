<?php
include "connection.php";
session_start();
 $query="delete from dart where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewdart1det.php?mes=Data deleted.','_self');</script>";

?>