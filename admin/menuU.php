<?php 
session_start();
 include('navbar.php'); ?>
 <h1 style="
    text-align: center;
    font-size: 55px;
">Menu
    </h1>
 <?php
require_once 'connection.php'; 

    $category_sql = "SELECT * FROM category";
    $category_query = mysqli_query($conn,$category_sql);
    while($category_row = mysqli_fetch_assoc($category_query)){ ?>
        <h1 class="category_name"><?php echo $category_row['category_name']; ?></h2>
        
        <?php 
        $id = $category_row['id'];
        $product_sql = "SELECT * FROM products where product_category='$id'"; 
        $product_query = mysqli_query($conn,$product_sql); ?>

        <div style="text-align: center;" >

       

       <?php while($product_row = mysqli_fetch_assoc($product_query) ){ ?>
        <div class="product-box">
        <img src="<?php  echo $product_row['product_image']; ?>" alt="" class="product-image" >
            <h5  class="product-name"><?php echo $product_row['product_name']; ?></h5>
            <h5><?php echo $product_row['product_description']; ?></h5>
            <h5 class="product-price"><?php echo $product_row['product_price']; ?></h5>
            
            <p style="text-align: center;"><a class="cart-button" href="addtocart.php?id=<?php echo $product_row['id']; ?>">add to cart</a></p>
        </div>   
        <?php } ?>
        </div>
    <?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        .category_name{ text-align: center;
    font-size: 45px;}
    body{
    background-image: url(../pictures/background.jpg);
    color: white;
    font-family: arial;
}
   
.product-box{
    margin: 1% 1%;
    display: inline-block;
    width: 340px;
    height: 383px;
    background-color: rgba(0,0,0,0.5);
    border-radius: 12px;
    padding: 1% 2%;
}

.product-image{
    width: 200px;
    height: 130px;
    display: block;
    margin: 15px auto;
}


.product-name{
    text-align: center;
    font-size: 15px;
    margin: 5%;
}

.product-price{
    text-align: center;
}

.cart-button{
    text-decoration: none;
    padding: 3% 13%;
    color: white;
    background-color: rgba(225,0,0,1.6);
}





    </style>

</head>
<body>
    
<?php include('footer.php'); ?>
</body>
</html>