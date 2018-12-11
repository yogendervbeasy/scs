<?php 
require ('connection.php'); 

$_SESSION['Id']="";
$_SESSION['ClientID']="";
session_destroy();

session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];

/*	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	//if (count($errors) == 0) {
		//$password = md5($password);*/

		$query = "SELECT * FROM `Clients` WHERE (Code='$username' AND password='$password') LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_array($results);
			if($row['login_status'] == 2)	{
		    $_SESSION['ClientID']=$row['ClientID'];
		   // $_SESSION['login_timestamp'] = time();
			echo "<script>window.location.href='../index';</script>";
				//header('location: http://scs.vbeasy.com/webapp/admin/clients.php');		  
			}
			else if($row['login_status'] == 1) {
			    $_SESSION['Id']=$row['Id'];
			    
			echo "<script>window.location.href='../admin/index';</script>";
			}
			else{
			    echo"<script>alert('Wrong username/password');
					window.location.href='../login';</script>";
			}
		}
		else {
			echo"<script>alert('Wrong username/password');
					window.location.href='../login';</script>";
		}
?>