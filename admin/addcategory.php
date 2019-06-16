<?php 
    if(isset($_POST['add_category']))
    {

        require_once '../connection.php'; 

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
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
      Add a new category
      <label for="new_category"></label>
      <input type="text" name="category_name" placeholder="enter new category name">
      <input type="submit" name="add_category" value="add_category">
    </form>
</body>
</html>