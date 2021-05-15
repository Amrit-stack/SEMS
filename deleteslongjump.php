<?php
include "connection.php";
session_start();
 $query="delete from longjump where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('sviewlongjump.php?mes=Data deleted.','_self');</script>";

?>