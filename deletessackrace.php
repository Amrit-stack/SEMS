<?php
include "connection.php";
session_start();
 $query="delete from sackrace where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewsackrace.php?mes=Data deleted.','_self');</script>";

?>