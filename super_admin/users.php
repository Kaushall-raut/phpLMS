<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/super_admin.css">
</head>
<body>
    <?php include "../components/super_admin_header.php";
    include "../components/connect.php"; ?>
    <section class="table">
     <table>

    <thead>
        <tr>
            <th>
                Name
            </th>
           
            <th colspan=3>
                Email id 
            </th>
          
        </tr>
    </thead>
    <tbody>

    <?php 
    
    $educators=$conn->prepare("select * from `users`");
    $educators->execute();
   
    // print "$results";
  while ( $results = $educators->fetch(PDO::FETCH_ASSOC)) {

  ?>

   
        <tr>
            <td>        
<?php echo "$results[name]";?>
            </td>
            <td>
            <?php echo "$results[email]";?> 
            </td>
          
            <td>
                <a href="super_user_update.php?id=<?php echo $results['id']; ?>&name=<?php echo $results['name'];?>&email=<?php echo $results['email']; ?>">update</a>
            </td>
            <td>
                <a href="user_delete.php?id=<?php echo $results['id']; ?>" >delete</a>
            </td>
        </tr>
    </tbody>
    <?php } ?>
    </table>
    </section>

    <script src="../js/admin_script.js"></script>
    <script src="../js/super_admin.js">
    </script>
</body>
</html>