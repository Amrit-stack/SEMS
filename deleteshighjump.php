<?php
include "connection.php";
session_start();
 $query="delete from highjump where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewhighjump.php?mes=Data deleted.','_self');</script>";

?>