<?php
include "connection.php";
session_start();
 $query="DELETE FROM winner where SN={$_GET["SN"]}";
 $db->query($query);
 echo "<script>window.open('corviewwinners.php?mes=Data deleted.','_self');</script>";

?>





