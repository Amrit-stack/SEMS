<?php
include "connection.php";
session_start();
 $query="DELETE FROM volleyball WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('volleyballteam.php?mes=Data deleted.','_self');</script>";

?>