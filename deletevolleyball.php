<?php
include "connection.php";
session_start();
 $query="DELETE FROM volleyball where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewvoll1det.php?mes=Data deleted.','_self');</script>";

?>





