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
    <link rel="stylesheet" href="navbar.css">
    <style>
        body{
            background-image: url(../pictures/admin_panel_backgorund.jpg);
        }

        
        ul{
            text-align: center;
    list-style: none;
    padding: 0px;
        }

        a{
            color: white;
            text-decoration: none;
        }
        .admin_panel_options{
            margin: 2% auto;
    padding: 1% 0px;
    width: 80%;
    font-size: 62px;
    background-color: rgba(0,0,112,0.6);
    border-radius: 20px;
    font-family: arial;
    text-transform: capitalize;
}
.admin_panel_options:hover{
    background-color: rgba(0,0,0,0.6);
}

    </style>
</head>
<body>
    <?php include ('admin_navbar.php'); ?>
    <div style="
    margin: 1% auto;
    width: 90%;
">
   <ul>
       <li class="admin_panel_options"><a href="products.php"  >products</a></li>
       <li class="admin_panel_options"><a href="categories.php"  >categories</a></li>
       <li class="admin_panel_options"><a href="orderspending.php">pending orders</a></li>
       <li class="admin_panel_options"><a href="orders_accepted.php">accepted orders</a></li>
       
   </ul>
   </div>
</body>
</html>

<?php
    } 
    else{
        header('location: admin_login.php');
    }
?>