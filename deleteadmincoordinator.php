<?php
include "connection.php";
session_start();
 $query="DELETE FROM coordinator where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('admincoordinator.php?mes=Data deleted.','_self');</script>";

?>





