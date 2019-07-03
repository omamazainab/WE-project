<?php 
    
     
        if(isset($_GET) && !empty($_GET)){
        $id = $_GET['id'];
        $category_name = $_GET['category_name'];
        }else{
            header('location: categories.php');
        }

      if(isset($_POST['edit_category'])){

        require_once 'connection.php'; 

        
        $category_name =  $_POST['category_name'];
        
        $sql = "UPDATE category SET category_name = '$category_name' WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>
            alert ('Updated Sucessfully ');
        </script>";
        header('location: categories.php');
        }else{
            echo "<script>
            alert ('Failed to update');
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
            font-family:arial;
        }

        input{
    border-radius: 6px 6px 6px 6px;
    padding: 1% 5%;
    margin: 2% auto;
    width: 80%;
    display: block;
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
<?php include ('admin_navbar.php'); ?>

<div style=" background-color: rgba(0,0,0,0.5);
    width: 80%;
    margin: 3% auto;padding: 1%;
">

<h1 style="color:white;">Edit Category</h1>
    <form action="" method="post">
      
      <!-- <h4><?php //echo $id; ?></h4> -->
      <input type="text" name="category_name" value="<?php echo $category_name; ?>" placeholder="update the name of category">
      <input type="submit" name="edit_category" value="edit_category">
    </form>

    </div>


</body>
</html>

