<?php
include "connection.php";
session_start();
 $query="delete from coordinator where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('viewvoll1det.php?mes=Data deleted.','_self');</script>";


?>