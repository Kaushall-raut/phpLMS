<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<header class="header">

<section class="flex">

   <a href="dashboard.php" class="logo">Super Admin</a>

   <form action="search_page.php" method="post" class="search-form">
      <input type="text" name="search"  placeholder="search here..." required maxlength="100">
      <button type="submit" class="fas fa-search " name="search_btn"></button>
   </form>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="search-btn" class="fas fa-search"></div>
      <div id="user-btn" class="fas fa-user"></div>
      <div id="toggle-btn" class="fas fa-sun"></div>
   </div>

   <!-- <div class="profile">
      <h3>please login or register</h3>
       <div class="flex-btn">
         <a href="login.php" class="option-btn">login</a>
         <a href="register.php" class="option-btn">register</a>
      </div> -->
 
   </div>

</section>

</header>


<div class="side-bar">

<div class="close-side-bar">
   <i class="fas fa-times"></i>
</div>

<div class="profile">
     
   </div>

<nav class="navbar">
   <a href="super_admin_dashboard.php"><i class="fas fa-home"></i><span>home</span></a>
   <a href="educators.php"><i class="fa-solid fa-bars-staggered"></i><span>Educators</span></a>
   <a href="users.php"><i class="fas fa-graduation-cap"></i><span>Users</span></a>
   <a href="comments.php"><i class="fas fa-comment"></i><span>comments</span></a>
   <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>
</nav>

</div>