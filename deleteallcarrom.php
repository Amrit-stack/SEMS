<?php
include "connection.php";
session_start();
 $query="DELETE FROM carrom WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('carromteam.php?mes=Data deleted.','_self');</script>";

?>