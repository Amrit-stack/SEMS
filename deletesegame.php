<?php
include "connection.php";
session_start();
 $query="delete from egame where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewegame.php?mes=Data deleted.','_self');</script>";

?>