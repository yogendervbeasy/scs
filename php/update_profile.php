
<?php

require ('connection.php');
session_start();
$ClientID = $_SESSION['ClientID'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];

$update_profile = "UPDATE `Clients` SET Name='$name', Mobile='$mobile', gps_lat='$latitude', gps_lng='$longitude' WHERE ClientID ='$ClientID'";

mysqli_query($conn,$update_profile);
echo "<script>window.location.href='../profile';</script>";
?>