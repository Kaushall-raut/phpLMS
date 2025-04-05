<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <?php 
    include "../components/connect.php";
    include "../components/super_admin_header.php";

    $id=$_GET['id'];
    $name=$_GET['name'];
    // $profession=$_GET['profession'];
    $email=$_GET['email'];
  
    // echo $email;
    ?>

<section class="form-container" style="min-height: calc(100vh - 19rem);">

<form action="" method="post" >
      <h3>update user profile</h3>
      <div class="flex">
         <div class="col">
            <p>your name</p>
            <input type="text" name="name" value="<?php echo $name; ?>" maxlength="100" class="box">
            <p>your email</p>
            <input type="email" name="email" VALUE="<?php echo $email; ?>" maxlength="100" class="box">
         </div>
         
      </div>
      <input type="submit" name="submit" value="update profile" class="btn">
   </form>
<?php 
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
//    $profession = $_POST['profession'];
   $email = $_POST['email'];

   $super_update = $conn->prepare("UPDATE `users` SET name=?, email=? WHERE id=?");
   if ($super_update->execute([$name, $email, $id])) {
       header("Location:users.php");
       exit;
   }
}
// $super_update=$conn->prepare("update `tutors` set name=? where id=?");
// if($super_update->execute([$name,$id])){
//    header("location:empty.php");

// }

?>



    <script src="../js/admin_script.js"></script>
    <script>
               let store=location.pathname;
        let path=store.substr(22);
  console.log(path);
    
  
  if(path==path){
        document.querySelector(".search-form").remove();           
    }
    </script>
</body>
</html>