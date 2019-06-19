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
</head>
<body>
<?php include('navbar.php'); ?>
    <table>

       
        <?php

            
            if(isset($_SESSION['email']) & !empty($_SESSION['email']) ){ ?>
                <tr>
                <th>Product</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product price</th>
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
            <td><img src="<?php echo $product['product_image'] ?>" alt=""></td>
            <td><?php echo $product['product_name']; ?></td>
            <td>
            
            
    <p value="1" id="count" >1</p>
    <input type="button" value="-" id="moins" onclick="minus()">
    <input type="button" value="+" id="plus" onclick="plus()">

            </td>
            <td><b>RS </b><?php echo  $product['product_price']; ?></td>
            <td><a href="removecartitem.php?remove=<?php echo $product['id']; ?>">remove</a></td>
        </tr>

        <script>
 var count = 1;
    var countEl = document.getElementById("count");
    function plus(){
        if(count<15){
        count++;
        countEl.value = count;
        document.getElementById('count').innerHTML = count;}
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
        document.getElementById('count').innerHTML = count;
      }  
    }
</script>

        <?php 
        
        $sum += $product['product_price'] ;
        
    } 
        ?>
        
        

        <tr>
        
                <td></td>
                <td></td>
                <td><b>total price</b><br><b>RS </b> <?php echo $sum; ?> </td>
        </tr>

        <tr>
                <td><a href="">PURCHASE</a></td>
        </tr>
        </table>
        <?php  }

    }
    else{
        header('location: sign-in.php');
    }
?>

<?php //include('footer.php'); ?>


</body>
</html>