<?php
include "connection.php";
session_start();
 $query="DELETE FROM student where crn={$_GET['crn']}";
 $db->query($query);
 echo "<script>window.open('adminviewstudents.php?mes=Data deleted.','_self');</script>";

?>