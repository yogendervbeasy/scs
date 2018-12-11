<?php
session_start();
require 'connection.php';
$_SESSION['Id']="";
session_destroy();
echo "<script>window.location.href='../login';</script>";
//header('location:../admin/clients.php');
?>