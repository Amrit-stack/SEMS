<?php
include "connection.php";
session_start();
 $query="DELETE FROM fixture where SN={$_GET["SN"]}";
 $db->query($query);
 echo "<script>window.open('adminviewfixtures.php?mes=Data deleted.','_self');</script>";

?>





