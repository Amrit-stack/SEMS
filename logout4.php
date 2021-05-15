<?php
session_start();
session_destroy();
header('location:coordinator_login.php')
?>