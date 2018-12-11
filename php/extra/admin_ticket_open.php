<?php
require("connection.php");
$data="update `tickets` set Status='Open' where Id=".$_GET['Id'];
if(mysqli_query($conn,$data))
{

	header("Location:../admin/view_tickets");
}
?>