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
    $profession=$_GET['profession'];
    $email=$_GET['email'];
    
    ?>

<section class="form-container" style="min-height: calc(100vh - 19rem);">

   <form class="register" action="" method="post" >
      <h3>update profile</h3>
      <div class="flex">
         <div class="col">
            <p>your name </p>
            <input type="text" name="name" value="<?php echo $name ?>" maxlength="50"  class="box">
            <p>your profession </p>
            <select name="profession" class="box">
               <option value="<?php echo $profession ;?>" selected><?php echo $profession ;?></option>
               <option value="developer">developer</option>
               <option value="designer">designer</option>
               <option value="musician">musician</option>
               <option value="biologist">biologist</option>
               <option value="teacher">teacher</option>
               <option value="engineer">engineer</option>
               <option value="lawyer">lawyer</option>
               <option value="accountant">accountant</option>
               <option value="doctor">doctor</option>
               <option value="journalist">journalist</option>
               <option value="photographer">photographer</option>
            </select>
            <p>your email </p>
            <input type="email" name="email" value="<?php echo $email ; ?>" maxlength="20"  class="box">
         </div>
         
      </div>
     
      <input type="submit" name="submit" value="update now" class="btn">
   </form>
<?php 
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $profession = $_POST['profession'];
   $email = $_POST['email'];

   $super_update = $conn->prepare("UPDATE `tutors` SET name=?, profession=?, email=? WHERE id=?");
   if ($super_update->execute([$name, $profession, $email, $id])) {
       header("Location:educators.php");
       exit;
   }
}
// $super_update=$conn->prepare("update `tutors` set name=? where id=?");
// if($super_update->execute([$name,$id])){
//    header("location:empty.php");

// }

?>



    <script src="../js/admin_script.js"></script>
    <script src="../js/super_admin.js">
    </script>
</body>
</html>