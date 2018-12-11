<?php 
require_once 'connection.php' ;
$delete_checkin= mysqli_query($conn,"delete from clientcheckinlog where clientID=".$_POST['ID']);
$delete_checkout= mysqli_query($conn,"delete from clientcheckoutlog where clientID=".$_POST['ID']);
$delete_alarm= mysqli_query($conn,"delete from AlarmSchedule where clientID=".$_POST['ID']);
$delete_contact= mysqli_query($conn,"delete from contactus where clientID=".$_POST['ID']);
$delete_custom= mysqli_query($conn,"delete from customfields where clientID=".$_POST['ID']);
$delete_proof= mysqli_query($conn,"delete from proofofservicedetails where clientID=".$_POST['ID']);
$delete_order= mysqli_query($conn,"delete from quantityrequest where clientID=".$_POST['ID']);
$delete_subcontractor= mysqli_query($conn,"delete from subcontractordetails where clientID=".$_POST['ID']);
$delete_= mysqli_query($conn,"delete from tickets where clientID=".$_POST['ID']);
$delete_checkin= mysqli_query($conn,"delete from message_cleaner_am where clientID=".$_POST['ID']);
$delete_client="delete from Clients where ClientID=".$_POST['ID'];
if(mysqli_query($conn,$delete_client))
{
    header("location:../admin/clients");
}

?>