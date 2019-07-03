<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
         body{
            background-image: url(../pictures/admin_panel_backgorund.jpg);
            text-align: center;
            font-family: arial;
        }

       .button{
        padding: 2% 5%;
        color: white;
        text-decoration: none;
       }

       .edit{
        background-color: rgba(0,255,0,0.4);
       }

      .delete{
        background-color: red;
      }
        

    </style>
</head>
<body>
<?php include ('admin_navbar.php'); ?>
<a href="addcategory.php" style="color: white;display: block;
   color: rgba(13,5,25,0.9);
    text-align: right;
    margin: 1% 7%;
    text-decoration: none;"><i class="fa fa-plus-square" style="font-size:24px"></i> add new category</a>
<h1 style="color: rgba(13,5,25,0.9);">Categories</h1>


    <!-- <a href="addcategory.php">add new category</a> -->
<?php   
session_start();
if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){
require_once 'connection.php'; 

  $sql = "SELECT * FROM category";
  $query = mysqli_query($conn, $sql); ?>
 <div style="width:90%;margin: 1% auto;
    background-color: rgba(13,5,25,0.7);">
  <?php
  while ($row = mysqli_fetch_assoc($query)) {
?>
 
    <!-- <th scope="row"><?php //echo $row['id']; ?></th> -->
   
          <div style="width:40%; display:inline-block; text-align:left;text-transform:capitalize;">
              <h2 style="color:white; ">
                <?php echo $row['category_name']; ?>
              </h2>
          </div>
          <div style="width:40%;display:inline-block;">
                <a class="button edit" href="editcategory.php?id=<?php echo $row['id']; ?>&category_name=<?php echo $row['category_name']; ?>">Edit</a>  <a class="button delete" href="deletecategory.php?id=<?php echo $row['id']; ?>">Delete</a>
          </div> 
   
   
 

    
<?php } 
?>
 </div>

<?php 
}
else{
  header('location: admin_login.php');
} 
?>


</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Categories</h3>
    <a href="addcategory.php">add new category</a>
</body>
</html>
 -->
