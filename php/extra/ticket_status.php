<?php
require("connection.php");
$Status=$_POST['Status'];
$data="update `tickets` set Status='$Status' where Id=".$_GET['Id'];
if(mysqli_query($conn,$data)){
header("Location:../admin/view_tickets");
}
?>