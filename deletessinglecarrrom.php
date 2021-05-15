<?php
include "connection.php";
session_start();
 $query="delete from carromsingle where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewcarrom.php?mes=Data deleted.','_self');</script>";

?>