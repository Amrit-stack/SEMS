<?php
include "connection.php";
session_start();
 $query="delete from subcoordinator where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('adminsubcoordinator.php?mes=Data deleted.','_self');</script>";

?>





