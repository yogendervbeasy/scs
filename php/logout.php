<?php
session_start();
require 'connection.php';
$_SESSION['ClientID']="";
session_destroy();
header('location:../login');
?>