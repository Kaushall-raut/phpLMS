<?php  include "../components/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
<style>
    body{

    }
    table,th,td{
        /* gap:1rem; */
        /* margin:1rem; */
        border:1px solid red;
        /* display:flex;
        justify-content:center;
        align-items:center; */
        /* height: 12rem; */
        /* width:100%; */
        font-size:2rem;
        color:white;
    }
    tbody{
        /* display:flex;
        justify-content:center;
        align-items:center; */
    }
    .table{
        height:80vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }
</style>
</head>
<body>
    <?php include "../components/super_admin_header.php"; ?>
    <section class="table">
     <table>

    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Profession
            </th>
            <th>
                Email id 
            </th>
          
        </tr>
    </thead>
    <tbody>

    <?php 
    
    $educators=$conn->prepare("select * from `tutors`");
    $educators->execute();
   
    // print "$results";
  while ( $results = $educators->fetch(PDO::FETCH_ASSOC)) {

  ?>

   
        <tr>
            <td>        
<?php echo "$results[name]";?>
            </td>
            <td>
            <?php echo "$results[profession]";?>
            </td>
            <td>
            <?php echo "$results[email]";?>
            </td>
            <td>
                <a href="super_educator_update.php?id=<?php echo $results['id']; ?>&name=<?php echo $results['name'];?>&profession=<?php echo $results['profession']; ?>&email=<?php echo $results['email']; ?>">update</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $results['id']; ?>" >delete</a>
            </td>
        </tr>
    </tbody>
    <?php } ?>
    </table>
    </section>

    <script src="../js/admin_script.js"></script>
    <script>
               let store=location.pathname;
        let path=store.substr(22);
  console.log(path);
    
  
  if(path=="educators.php"){
        document.querySelector(".search-form").remove();           
    }
    </script>
</body>
</html>