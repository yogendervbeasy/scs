<?php
require("connection.php");
$current_date= date("Y-m-d");
$message=$_POST['message'];
$data = $_FILES['data']['name'];
$file_ext=strtolower(end(explode('.',$_FILES['data']['name'])));
$file = $_GET['Id'].".".$file_ext;
$data_type = $_FILES['data']['type'];
$size = $_FILES['data']['size'];
$data_tmp = $_FILES['data']['tmp_name'];
$data_folder = "../files/assets/image/admin_file/";
move_uploaded_file($data_tmp , "$data_folder".$file);

$data="update `tickets` set admin_message='$message', admin_file='$file', closing_date='$current_date', Status='Closed' where Id=".$_GET['Id'];

//$data="update `tickets` set Status='Closed' where Id=".$_GET['Id'];
if(mysqli_query($conn,$data))
{

	header("Location:../admin/view_tickets");
}
?>