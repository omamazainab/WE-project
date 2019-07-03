<?php
session_start();
?>

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

body{
    background-image: url(../pictures/background.jpg);
}

        table{
            text-align: center;
    margin: 1% auto;
    width: 90%;
    color: white;
    background-color: rgba(0,0,0,0.5);
    font-size: 22px;
    text-transform: capitalize;
    
        }

        th{
            padding: 2% 1%;
    font-size: 33px;
    font-family: arial;
    background-color: rgba(141,0,0,0.8);
        }

        .remove-button{
            text-decoration: none;
    color: white;
    padding: 5% 11%;
    background-color: red;
    font-size: 24px;
        }
      
        .product-image{
            width:100px;
            height:100px;
        }


    </style>
</head>
<body>
<?php include('navbar.php'); ?>
    <table>

       
        <?php

            
            if(isset($_SESSION['email']) & !empty($_SESSION['email']) ){ ?>
                <tr>
                <th>Product</th>
                <th>Product Name</th>
                <th>Product price</th>
                <th></th>
            </tr>
            
    
           <?php require_once 'connection.php'; 
            $items = $_SESSION['cart'];
            $items = explode(",", $items);
            if(!empty($items) & !empty($_SESSION['cart'])){
                $sum = 0;

                
            foreach($items as $item){

            $sql = "SELECT * FROM products WHERE id='$item'";
            $query = mysqli_query($conn,$sql);
            $product = mysqli_fetch_assoc($query);
            ?>

        <tr>
            <td><img class="product-image" src="<?php echo $product['product_image'] ?>" alt=""></td>
            <td><?php echo $product['product_name']; ?></td>
            
            <td><b>RS </b><?php echo  $product['product_price']; ?></td>
            <td>
                <a class="remove-button" href="removecartitem.php?remove=<?php echo $product['id']; ?>">remove</a>
            </td>
        </tr>

        

        <?php 
        
        $sum += $product['product_price'] ;
    } 
        ?>
        
        

       
               
        
        </table>
        <div style="display: inline-block;text-align: right; font-size: 24px; color: white;padding: 0% 20%;"><b>total price</b><br><b>RS </b> <?php echo $sum; ?> </div>
        <div style="display: inline-block;padding: 1% 19%; font-size: 26px;background-color: rgba(255,0,0,0.5);"><a style="color: white; text-decoration: none;" href="orderplacement.php?order_price=<?php echo $sum; ?> ">PURCHASE</a></div>
       
        
        
        <?php  }

    }
    else{
        header('location: sign-in.php');
    }
?>

<?php //include('footer.php'); ?>


</body>
</html>