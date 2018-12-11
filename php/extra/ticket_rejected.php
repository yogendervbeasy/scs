<?php
require("connection.php");
$data="update `tickets` set Status='Rejected' where Id=".$_GET['Id'];
if(mysqli_query($conn,$data))
{

	header("Location:../previous_tickets");
}
?>