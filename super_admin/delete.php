<?php

include "../components/connect.php";

$tutor=$_GET['id'];
// echo "$tutor";

$delete_user=$conn->prepare("delete from `tutors` where id= :tutor");
$delete_user->bindParam(':tutor', $tutor);

$delete_content=$conn->prepare("delete from `content` where tutor_id= :tutor");
$delete_content->bindParam(':tutor', $tutor);

$delete_playlist=$conn->prepare("delete from `playlist` where tutor_id= :tutor");
$delete_playlist->bindParam(':tutor', $tutor);

if($delete_user->execute()){
    $delete_content->execute();
    $delete_playlist->execute();

    header("location:super_admin_dashboard.php");
}

?>