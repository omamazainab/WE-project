


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
        }

        .products{
          margin: 1%;
          padding: 2% 0px;
          width: 280px;
    display: inline-block;
    color: white;
    background-color: rgba(13,5,25,0.7);
    text-align: center;
    border-radius: 22px;
        }

        .button{
          padding: 1% 8%;
          margin:1%;
          color: white;
          border-radius: 7px;
        }

        .edit-button{background-color: green;background-color: rgba(0,255,0,0.4);}


        .delete-button{background-color: red;}

    </style>
</head>
<body>
<?php include ('admin_navbar.php'); ?>
<a href="addproduct.php" style="color: white;display: block;
    color: rgba(13,5,25,0.9);
    text-align: right;
    margin: 1% 7%;
    text-decoration: none;"><i class="fa fa-plus-square" style="font-size:24px"></i> add new product</a>
    <h3 style="text-align: center;
   color: rgba(13,5,25,0.9);
    font-size: 40px;
    text-transform: capitalize;">products</h3>

    <?php   
session_start();
if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){
require_once 'connection.php'; 

  $sql = "SELECT * FROM products";
  $query = mysqli_query($conn, $sql); 
  while ($row = mysqli_fetch_assoc($query)) {
?>

  <div class="products">
    <h4><?php echo $row['product_name']; ?></h4>
    <img src="<?php  echo $row['product_image']; ?>" alt="" width="100px" height="100px" >
    <h4><?php echo $row['product_price']; ?></h4>
    <h4><?php echo $row['product_description']; ?></h4>
    <div><a class="button edit-button" href="editproduct.php?id=<?php echo $row['id']; ?>">Edit</a>  <a class="button delete-button" href="deleteproduct.php?id=<?php echo $row['id']; ?>">Delete</a></div>
  </div>
<?php } 
?>

    
</body>
</html>
<?php 
} 
else{
  header('location: admin_login.php');
}
?>
