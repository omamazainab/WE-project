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

    </style>
</head>
<body>
<?php include ('admin_navbar.php'); ?>

    <h1>ACCEPTED ORDERS</h1>
</body>
</html>

<?php 
    session_start();
    if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){

        require_once 'connection.php';
        $true=TRUE;
        $sql = "SELECT * FROM orders WHERE accepted='$true'";
        $query = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($query)){

        $customersql = "SELECT * FROM customer WHERE id={$row['customer_id']}";
        $customerquery =  mysqli_query($conn,$customersql);
        $customernameresult = mysqli_fetch_assoc($customerquery);
        

            ?>
                
                <div style="width: 80%;
    margin: 1% auto;   
    background-color: rgba(0,0,0,0.5);
    color: white;
    font-size: 24px;
    padding-bottom:1%;">

                <h3><?php echo $customernameresult['fname'] . " " . $customernameresult['lname']; ?></h3>
                <?php 
                $id = $row["id"];
                $orderdproductsql = "SELECT * FROM ordered_products WHERE order_id='$id'"; 
                $products_query =  mysqli_query($conn,$orderdproductsql);
                while($orderdetailsrow = mysqli_fetch_assoc($products_query)){

                    $productnamesql = "SELECT * FROM products WHERE id={$orderdetailsrow['product_id']}";
                    $productnamequery =  mysqli_query($conn,$productnamesql);
                    $productnameresult = mysqli_fetch_assoc($productnamequery);
        
                    ?>
                    <p><?php echo $productnameresult['product_name'] . " " . $productnameresult['product_price']; ?></p>
                    
               <?php } ?>

               <h5>total price : <?php echo $row['order_price']; ?></h5>

                <!-- <a href="accept_order.php?accepted_orderid=<?php echo $row['id']; ?>">Accept Order</a> -->
                </div>
               <?php   }

    }else{
        header('location: admin_login.php');
    }
?>