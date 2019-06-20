<?php
session_start();
if(isset($_SESSION['cart']) & !empty($_SESSION['cart']) ){
    require_once 'connection.php'; 
    $useremail = $_SESSION['email'];
    echo $useremail;
    $customerquery = "SELECT * FROM customer WHERE email='$useremail'";
    $query = mysqli_query($conn,$customerquery);
    $row = mysqli_fetch_assoc($query);
    $customer_id = $row['id'];
    echo $customer_id;
    $sql = "INSERT INTO orders(customer_id) VALUE ('$customer_id')";
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        
    
        $items = $_SESSION['cart'];
        $items = explode(",", $items);
        if(!empty($items)){
        foreach($items as $item){
            $sql1 = "INSERT INTO ordered_products(order_id,product_id) VALUES ( '$last_id','$item')";
            if (mysqli_query($conn, $sql1)) {
                echo "<script> alert('record inserted'); </script>";
                header('location: menuU.php');
            }
        }}
        
        //
    }else{
        echo "<script> alert('record insertion failed'); </script>";
    }

    
}else{
    header("location: menuU.php");
}

?>