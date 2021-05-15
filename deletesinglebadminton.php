<?php
include "connection.php";
session_start();
 $query="delete from badmintonsingle where crn={$_GET["crn"]}";
 $db->query($query);
 echo "<script>window.open('viewsinglebadminton.php?mes=Data deleted.','_self');</script>";

?>