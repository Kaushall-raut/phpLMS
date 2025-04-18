<?php

include '../components/connect.php';

$contact=$conn->prepare("select * from `contact`");
$contact->execute();

$total_contacts=$contact->rowCount();

$users=$conn->prepare("select * from `users`");
$users->execute();
$total_users=$users->rowCount();

$tutors=$conn->prepare("select * from `tutors`");
$tutors->execute();
$total_tutors=$tutors->rowCount();

// if(isset($_COOKIE['tutor_id'])){
//    $tutor_id = $_COOKIE['tutor_id'];
// }else{
//    $tutor_id = '';
//    header('location:login.php');
// }

// $select_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
// $select_contents->execute([$tutor_id]);
// $total_contents = $select_contents->rowCount();

// $select_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
// $select_playlists->execute([$tutor_id]);
// $total_playlists = $select_playlists->rowCount();

// $select_likes = $conn->prepare("SELECT * FROM `likes` WHERE tutor_id = ?");
// $select_likes->execute([$tutor_id]);
// $total_likes = $select_likes->rowCount();

// $select_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
// $select_comments->execute([$tutor_id]);
// $total_comments = $select_comments->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/super_admin_header.php'; ?>
   
<section class="dashboard">

   <h1 class="heading">dashboard</h1>

   <div class="box-container">

      <div class="box">
         <h3><?php echo $total_tutors;?></h3>
         <p>Total Educators</p>
       <a href="educators.php" class="btn">See all educators</a>
      </div>

      <div class="box">
         <h3><?php echo $total_users; ?></h3>
         <p>Total Users</p>
         <a href="users.php" class="btn">See all users</a>
      </div>

      <div class="box">
         <h3><?php echo $total_contacts; ?></h3>
         <p>Total Emails</p>
         <a href="super_admin_email.php" class="btn">check Emails</a>
      </div>



  

   </div>

</section>



<script src="../js/admin_script.js"></script>
<script src="../js/super_admin.js">
    </script>
</body>
</html>