<?php 
include "../components/connect.php";

    $user=$_GET['id'];

    $delete=$conn->prepare("delete from `users` where id=:user");
    $delete->bindParam(":user",$user);

    if($delete->execute()){
        header("location:users.php");

    }

?>