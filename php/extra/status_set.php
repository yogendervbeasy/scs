<?php
require("connection.php");
echo data="update `customfields_job` set Status='Set' where clientID=".$_GET['ClientID'];
if(mysqli_query($conn,$data))
{

	header("Location:../admin/alarm_estimation");
}
?>