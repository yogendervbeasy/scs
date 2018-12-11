<?php
require('connection.php');
session_start();
$ClientID = $_SESSION['ClientID'];
$img = $_FILES['img']['name'];
$img_type = $_FILES['img']['type'];
$img_size = $_FILES['img']['size'];
$img_tmp = $_FILES['img']['tmp_name'];
$image_folder = "../files/assets/image/profile/";
move_uploaded_file($img_tmp , "$image_folder".$_FILES["img"]["name"]);

	$sql = "update `Clients` set profile_image = '$img' where ClientID = '$ClientID'";
			mysqli_query($conn, $sql);
		

    	header('location: ../profile');
?>