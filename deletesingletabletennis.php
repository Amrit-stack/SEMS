<?php
include "connection.php";
session_start();
 $query="delete from tabletennissingle where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewsingletabletennis.php?mes=Data deleted.','_self');</script>";

?>





