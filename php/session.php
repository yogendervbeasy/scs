<?php
session_start();
if(!$_SESSION['ClientID'])
{
	header("location:login");
}else
$_SESSION['login_timestamp'] = time();
if((time() - $_SESSION['login_timestamp']) > 120) // 120 = 2 * 60  
           {  
                header("location:php/logout");  
           }  
?>