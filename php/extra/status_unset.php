<?php
require("connection.php");
$data="update `customfields_job` set Status='Unset' where clientID=".$_GET['ClientID'];
if(mysqli_query($conn,$data))
{

	header("Location:../admin/alarm_estimation");
}
?>