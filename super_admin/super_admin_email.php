<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
           
            <th>
                Email id 
            </th>
            <th>
                Contact no.
            </th>
            <th colspan=2>
                Message
            </th>
          
        </tr>
    </thead>
    <tbody>

    <?php 
    
    $educators=$conn->prepare("select * from `contact` ");
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
            <?php echo "$results[number]";?>
            </td>
        
                <td><?php echo $results['message'];?></td>
                <td><a href="emailDelete.php?id=<?php echo $results['id'] ?>">Delete</a></td>
                       
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