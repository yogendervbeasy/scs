<?php require ('connection.php'); ?>

<?php
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

		$query = "SELECT * FROM `Admin` WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_array($results);
		    $_SESSION['Id']=$row['Id'];
			echo "<script>window.location.href='../admin/clients.php';</script>";
				//header('location: http://scs.vbeasy.com/webapp/admin/index.php');		  
		
		}
		else {
			echo"<script>alert('Wrong username/password combination.... Please Try Again !!!');
					window.location.href='../login.php';</script>";
		}
?>