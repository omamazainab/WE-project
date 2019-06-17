<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
<?php include('navbar.php'); ?>
    <table>

        <tr>
            <th>Product</th>
            <th>Product Name</th>
            <th>Product price</th>
        </tr>
        
        <?php

            session_start();
            if(isset($_SESSION['email']) & !empty($_SESSION['email']) ){
    
            require_once 'connection.php'; 
            $items = $_SESSION['cart'];
            $items = explode(",", $items);
            if(!empty($items) & !empty($_SESSION['cart'])){
            foreach($items as $item){
            $sql = "SELECT * FROM products WHERE id='$item'";
            $query = mysqli_query($conn,$sql);
            $product = mysqli_fetch_assoc($query);
            ?>

        <tr>
            <td><img src="<?php echo $product['product_image'] ?>" alt=""></td>
            <td><?php echo $product['product_name']; ?></td>
            <td><?php echo $product['product_price']; ?></td>
            <td><a href="removecartitem.php?remove=<?php echo $product['id']; ?>">remove</a></td>
        </tr>

        <?php  }
        }
    }
?>

    </table>
</body>
</html>