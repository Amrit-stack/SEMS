<?php
include "connection.php";
session_start();
 $query="delete from chess where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('viewchess1det.php?mes=Data deleted.','_self');</script>";

?>