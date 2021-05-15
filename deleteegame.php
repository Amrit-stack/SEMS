<?php
include "connection.php";
session_start();
 $query="delete from egame where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewegame1det.php?mes=Data deleted.','_self');</script>";

?>





