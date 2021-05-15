<?php
include "connection.php";
session_start();
 $query="delete from tabletennissingle where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewtabletennis.php?mes=Data deleted.','_self');</script>";

?>