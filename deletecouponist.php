<?php
include "connection.php";
session_start();
 $query="DELETE FROM couponist";
 $db->query($query);
 echo "<script>window.open('showreg.php?mes=Data deleted.','_self');</script>";

?>