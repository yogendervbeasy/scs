<?php
require('connection.php');
session_start();
$ClientID = $_GET['ClientID'];
$message = $_POST['message'];
$mon = $_POST['mon'];
$tue = $_POST['tue'];
$wed = $_POST['wed'];
$thu = $_POST['thu'];
$fri = $_POST['fri'];
$sat = $_POST['sat'];
$sun = $_POST['sun'];

	$sql = "update `set_alarm` set message='$message', monday='$mon', tuesday='$tue', wednesday='$wed', thursday='$thu', friday='$fri', saturday='$sat', sunday='$sun' where ClientID = '$ClientID'";
			mysqli_query($conn, $sql);
		

    	header('location: ../admin/alarm_estimation');
?>