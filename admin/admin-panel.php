<?php
    session_start();
    if( isset($_SESSION['admin_email'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <ul>
       <li><a href="products.php"  >products</a></li>
       <li><a href="categories.php"  >categories</a></li>
       <li><a href="menuU.php"  >menu</a></li>
       
   </ul>
</body>
</html>

<?php
    } 
    else{
        header('location: admin_login.php');
    }
?>