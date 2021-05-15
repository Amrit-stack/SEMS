<?php
include "connection.php";
session_start();
 $query="DELETE FROM summary where id={$_GET["id"]}";
 $db->query($query);
 echo "<script>window.open('adminviewsummary.php?mes=Data deleted.','_self');</script>";

?>





