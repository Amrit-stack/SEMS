<?php
include "connection.php";
session_start();
 $query="DELETE FROM volunteer where CRN={$_GET["CRN"]}";
 $db->query($query);
 echo "<script>window.open('adminvolunteer.php?mes=Data deleted.','_self');</script>";

?>





