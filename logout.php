<?php
include 'connection.php';

session_start();
unset($_SESSION["acc_no"]);
unset($_SESSION["username"]);
header("location:index.html");
?>