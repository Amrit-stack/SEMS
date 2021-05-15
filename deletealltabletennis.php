<?php
include "connection.php";
session_start();
 $query="DELETE FROM tabletennis WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('tabletennisteam.php?mes=Data deleted.','_self');</script>";

?>