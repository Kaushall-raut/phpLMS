<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <?php include "../components/super_admin_header.php"; ?>
    <script src="../js/admin_script.js"></script>
    <script>
               let store=location.pathname;
        let path=store.substr(22);
  console.log(path);
    
  
  if(path==path){
    console.log("check");
    
        document.querySelector(".search-form").remove();           
    }
    </script>
</body>
</html>