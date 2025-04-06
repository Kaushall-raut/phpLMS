<?php 
include "../components/connect.php";

    $user=$_GET['id'];

    $delete=$conn->prepare("delete from `users` where id=:user");
    $delete_like=$conn->prepare("delete from `likes` where user_id=:user");
    $delete_comment=$conn->prepare("delete from `comments` where user_id=:user");
    $delete->bindParam(":user",$user);

    if($delete->execute()){
        $delete_like->execute();
        $delete_comment->execute();
        header("location:users.php");

    }

?>