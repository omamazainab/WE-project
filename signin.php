<?php

    session_start();

    if(! isset($_SESSION['email'])){
        $conn = mysqli_connect("localhost","root","","registrations");

        $loginerr = "";
    
        if(isset($_POST['login'])){
            
    
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];
    
            $sql = "SELECT * FROM customer WHERE email = '$email' AND pswd = '$pswd'";
            $result = mysqli_query($conn,$sql);
    
             if(mysqli_num_rows($result) == 1 ){
                
                $_SESSION['email'] = $email;
                header("location: index.php");
            }else{
                $loginerr="invalid combination of email and password";
            }
        }
    }else{
       echo "<script> location.href='index.php' </script>";
    }

?>