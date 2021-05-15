<?php
include "connection.php";
session_start();
 $query="DELETE FROM notices where SN={$_GET["SN"]}";
 $db->query($query);
 echo "<script>window.open('adminviewnotices.php?mes=Data deleted.','_self');</script>";

?>





