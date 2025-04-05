<?php

include "../components/connect.php";

$tutor=$_GET['id'];
// echo "$tutor";

$delete=$conn->prepare("delete from `tutors` where id= :tutor");
$delete->bindParam(':tutor', $tutor);
if($delete->execute()){

    header("location:super_admin_dashboard.php");
}

?>