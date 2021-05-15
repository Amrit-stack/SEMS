<?php
include "connection.php";
session_start();
 $query="delete from marathon where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewmarathon.php?mes=Data deleted.','_self');</script>";

?>