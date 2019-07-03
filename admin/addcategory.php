<?php 

session_start();

if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){
    if(isset($_POST['add_category']))
    {

        require_once 'connection.php'; 

        $category_name =  $_POST['category_name'];
        $sql = "INSERT INTO category (category_name) VALUES ('$category_name')";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>
            alert ('category added Sucessfully ');
        </script>";
        header('location: categories.php');
        }else{
            echo "<script>
            alert ('Failed to add the category');
             </script>";
             header('location: categories.php');
        }
      }
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
            text-align: center;
        }

        input,select{
            display: block;
            text-align: center;
            margin: 1% auto;
            width: 60%;
            height: 40px;
            border-radius: 5px;
            font-size:20px;
        }

        input[type="submit"]{
    color: white;
    background-color: rgba(70,50,50,.9);
    border-width: 0px;
    border-radius: 0px;
}

    </style>
</head>
<body>
<?php include('admin_navbar.php'); ?>
    <div style=" background-color: rgba(0,0,0,0.5);
        width: 80%;
        margin: 3% auto;padding: 1%;
    ">

                <h1 style="color:white;">Add a new category</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                
                <label for="new_category"></label>
                <input type="text" name="category_name" placeholder="enter new category name">
                <input type="submit" name="add_category" value="add_category">
                </form>

    </div>

</body>
</html>
<?php
}
    else{
        header('location: admin_login.php');
    }
?>