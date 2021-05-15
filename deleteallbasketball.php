<?php
include "connection.php";
session_start();
 $query="DELETE FROM basketball WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('basketballteam.php?mes=Data deleted.','_self');</script>";

?>