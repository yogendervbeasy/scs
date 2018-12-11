<?php
require ('connection.php');
session_start();
$attachmentFilePath = "";
$current_date= date("Y-m-d");
$ClientID = $_SESSION['ClientID'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$priority=$_POST['priority'];
$date=$_POST['date'];
$subject=$_POST['subject'];
$data = $_FILES['data']['name'];
$file_ext=strtolower(end(explode('.',$_FILES['data']['name'])));

$select="select * from `tickets` order by Id DESC LIMIT 1";
$selected = mysqli_query($conn, $select);
while($row=mysqli_fetch_array($selected)){
$num = $row['Id'];
$Id = 1+$num;
}

$issendEMails = false;

$file = $Id.".".$file_ext;

$data_type = $_FILES['data']['type'];
$size = $_FILES['data']['size'];
$data_tmp = $_FILES['data']['tmp_name'];
$data_folder = "../files/assets/image/file/";
move_uploaded_file($data_tmp , "$data_folder".$file);

$attachmentFilePath = $data_folder.$file;


$query ="SELECT * FROM `tickets` WHERE ClientID = '$ClientID'";
$results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) >= 1) {
		$row = mysqli_fetch_array($results);
		if($row['Status'] == 'Open')	{
	    
		echo"<script>alert('You Already Raised A Ticket');
				//window.location.href='../generate_ticket';
				</script>";		  
		}
		else if($row['Status'] == 'Assigned')	{
	    
		echo"<script>alert('You Already Raised A Ticket');
			//	window.location.href='../generate_ticket';
			</script>";		  
		}
		else{
            $tickets = "insert into `tickets` (ClientID, Priority, file, Auth_Date, Date, Message, Status, name, email, mobile) values ('$ClientID', '$priority', '$file', '$date', '$current_date', '$subject', 'Open', '$name', '$email', '$mobile')";
            mysqli_query($conn, $tickets);
            echo"<script>alert('Raise Ticket Successfully');
			///	window.location.href='../generate_ticket';
			</script>";
			$issendEMails = true;
		}
    }
	else{
	    $tickets = "insert into `tickets` (ClientID, Priority, file, Auth_Date, Date, Message, Status, name, email, mobile) values ('$ClientID', '$priority', '$file', '$date', '$current_date', '$subject', 'Open', '$name', '$email', '$mobile')";
        mysqli_query($conn, $tickets);
        echo"<script>alert('Successfully Raised Your First Ticket');
			//window.location.href='../generate_ticket';
			</script>";
		$issendEMails = true;
	}
	
	$issendEMails = true;
	if($issendEMails){
	    
	    
	    /*
	    1. Critical :- AM/Representative/ Client
    	2. Minor :- AM
    	3. Major:- AM, Representative/ Director
	    */
	    
	    	$seleect_AMEmail = "SELECT s.*, r.Name as RpName, r.Email as RpEmail 
								FROM `subcontractordetails` s
								INNER JOIN Clients c ON c.ClientID =  s.ClientID  AND s.ClientID = $ClientID
								LEFT JOIN  `representatives` r ON r.Code = c.RepresentativeCode
								LIMIT 0,1"; // AccountManagersEmail !=''  AND
			$query_result = mysqli_query($conn, $seleect_AMEmail);
			
			$emailDetailsTo = [];
			while($rows_Data = mysqli_fetch_assoc($query_result)){
			    $AM_Details = [];
			    $rows_Data["AccountManagersEmail"] = $rows_Data["AccountManagersEmail"]==""?"scspl.nayan@gmail.com":$rows_Data["AccountManagersEmail"];
			    $rows_Data["AccountManagerName"] = $rows_Data["AccountManagerName"]==""?"VBEasy Team":$rows_Data["AccountManagerName"];
			    if($rows_Data["AccountManagersEmail"] != ""){
			        $AM_Details["Email"] = $rows_Data["AccountManagersEmail"];
			        $AM_Details["Name"] =$rows_Data["AccountManagerName"];    
			    }
			    if(count($AM_Details) > 0){
			        array_push(	$emailDetailsTo, $AM_Details);
			    }
			    
			    if($priority=="Critical"){
			        
			        // Client Email
			        $clientEmail= [];
			        $clientEmai["Email"] = $email;
			        $clientEmail["Name"] = $name;
			   
			        if($email != ""){
			            array_push(	$emailDetailsTo,  $clientEmail);
			        }
			        
			        // Representative 
			        $rpEmail= [];
			        $rpEmail["Email"] = $rows_Data["RpEmail"];
			        $rpEmail["Name"] = $rows_Data["RpName"];
			   
			        if($rpEmail["Email"] != ""){
			            array_push(	$emailDetailsTo,  $rpEmail);
			        }
			        
			    }else if($priority=="Major"){
			        
			           // Representative 
			        $rpEmail= [];
			        $rpEmail["Email"] = $rows_Data["RpEmail"];
			        $rpEmail["Name"] = $rows_Data["RpName"];
			   
			        if($rpEmail["Email"] != ""){
			            array_push(	$emailDetailsTo,  $rpEmail);
			        }
			        
			        // Director
			        $dirEmail= [];
			        $dirEmail["Email"] = $rows_Data["DirectorsEmail"];
			        $dirEmail["Name"] = "Director";
			   
			        if($dirEmail["Email"] != ""){
			            array_push(	$emailDetailsTo,  $dirEmail);
			        }
			        
			        
			    }else if($priority=="Minor"){
			        
			    }
		}
	
	    if(count($emailDetailsTo) > 0){
	        
	        $body = "Hi,<br/>";
	        $body .= "Below is ticket raised from our valualbe client.";
	        $body .= "<br/><br/><b>Name</b>:".$name;
	        $body .= "<br/><b>MobileNo</b>:". $mobile;
	        $body .= "<br/><b>Email : </b>:". $email;
	        $body .= "<br/><b>Ticket Priority : </b>:". $priority;
	        $body .= "<br/><b>Ticket Status : </b>:Open";
	        $body .= "<br/><br/><b><u>Message from Client</u></b><br/><p>".$subject."</p>";
	        
	        $emailSubject = "[ $priority ] - client $name raised the ticket";
	        
	        
	        require_once "../../restapi/phpmailer/vendor/autoload.php";
        	$mail = new PHPMailer;
        	//Enable SMTP debugging. 
        	$mail->SMTPDebug = 0	;                               
        	$mail->isSMTP = true;            
        	$mail->Host = "box6171.bluehost.com";
        	$mail->SMTPAuth = true;                          
        	$mail->Username = "developer@scs.vbeasy.com";                 
        	$mail->Password = "123!@#asd";                           
        	$mail->SMTPSecure = "tls";                           
        	$mail->Port = 26;  
        	if($attachmentFilePath != '')				
        		$mail->addAttachment($attachmentFilePath);
        	
        	$mail->From = "developer@scs.vbeasy.com";
        	$mail->FromName = "Nayan Babariya";
        	
        	foreach($emailDetailsTo as $kData){
        	    echo $kData['Email']."<br/>";
        	    echo $kData['name']."<br/>";;
        	    $mail->addAddress($kData['Email'], $kData['Name']);
        	}
        	
        		$mail->AddCC('scspl.nayan@gmail.com', 'Nayan Babariya');
        	$mail->AddCC('rajshakya@vbeasy.com', 'Raj VBEasy');
        	
        	//$mail->AddCC('scspl.nayan@gmail.com', 'Nayan Babariya');
        	
        	//$mail->addAddress($address['Email'], $address['User']);
        	//$mail->addAddress('scspl.nayan@gmail.com', "Nayan Patel");
        
        	
        	$mail->isHTML = true;
        	$mail->Subject = $emailSubject;
        	$mail->Body = $body;
        	$mail->AltBody = "This is the plain text version of the email content";
        
        	if(!$mail->send()) 
        	{
        		//echo "email not send sucessfully to ";
        		echo 'Mailer Error: ' . $mail->ErrorInfo;
        	//	return true;
        	} 
        	else 
        	{
        	    echo 'email send successfully';
        	}
	        
	        
	        
	    }
	    
	    
	    
	}
	
	
    
	
	
?>