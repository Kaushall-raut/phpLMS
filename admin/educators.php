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

        /* display:flex;
        justify-content:center;
        align-items:center; */
    }
    table{
        border:1px solid red;
        height: 80vh;
        width:100%;
        font-size:2rem;
        color:white;
    }
</style>
</head>
<body>
    <?php include "../components/super_admin_header.php"; ?>

    <section>
    <?php 
    
    $educators=$conn->prepare("select * from `tutors`");
    $educators->execute();
    echo "$educators";
    ?>

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
        <tr>
            <td>        

            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
    </tbody>
    </table>
    </section>

    <script src="../js/admin_script.js"></script>
    <script>
               let store=location.pathname;
        let path=store.substr(22);
  console.log(path);
    
  
  if(path== path){
        document.querySelector(".search-form").remove();           
    }
    </script>
</body>
</html>