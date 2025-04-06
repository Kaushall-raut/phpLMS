<?php
$emailId=$_GET['id'];
// echo $emailId;
include "../components/connect.php";
$Delete=$conn->prepare("delete from `contact` where id=:emailId");
$Delete->bindParam(":emailId",$emailId);

if($Delete->execute()){
    header("location:super_admin_email.php");
}

?>