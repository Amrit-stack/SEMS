<?php
include "connection.php";
session_start();
 $query="DELETE FROM kabbadi WHERE username='{$_SESSION['username']}'";
 $db->query($query);
 echo "<script>window.open('kabbaditeam.php?mes=Data deleted.','_self');</script>";

?>