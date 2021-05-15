<?php
include "connection.php";
session_start();
 $query="delete from dart where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewdart.php?mes=Data deleted.','_self');</script>";

?>