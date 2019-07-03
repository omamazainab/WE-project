<?php

    session_start();

    if(! isset($_SESSION['admin_email'])){

       require_once 'connection.php'; 

        $loginerr = "";
    
        if(isset($_POST['login_admin'])){
            
    
            $admin_email = $_POST['admin_email'];
            $admin_password = $_POST['admin_password'];
    
            $sql = "SELECT * FROM admin_table WHERE admin_email = '$admin_email' AND admin_password = '$admin_password'";
            $result = mysqli_query($conn,$sql);
    
             if(mysqli_num_rows($result) == 1 ){
                
                $_SESSION['admin_email'] = $admin_email;
                header("location: admin-panel.php");
            }else{
                $loginerr="invalid combination of email and password";
            }
        }
    }else{
       echo "<script> location.href='admin-panel.php' </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         body{
            background-image: url(../pictures/admin_panel_backgorund.jpg);
            text-align: center;
            font-family:arial;
        }

     
.inner{
    width: 60%;
    margin: 8% auto 10% auto;
    background-color: rgba(0,0,0,0.5);
    color: white;
}

input{
    border-radius: 6px 6px 6px 6px;
    padding: 1% 5%;
    margin: 2% auto;
    width: 80%;
    display: block;
}

input[type="radio"]{
    width: 10%;
    display: inline-block;
}

input[type="submit"]{
    color: white;
    background-color: rgba(70,50,50,.9);
    border-width: 0px;
    border-radius: 0px;
}

.inner{
    text-align: center;
    padding: 1%;
}

    </style>
</head>
<body>
    <h1 style="margin: 7% auto; color: rgba(13,5,25,0.9);">
        fOOdies Admin Panel
    </h1>
<form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container  text-center">
            <div class="inner">
                <div class="title">
                    <h2>LOGIN</h2>
                    <div class="content">
                        
                        <div class="txt">
                            <input type="admin_email" name="admin_email" placeholder="Enter your email address">
                        </div>
                        
                        <div class="txt">
                            <input type="password" name="admin_password" placeholder="Enter your password">
                        </div>
                        <span id="span"><?php echo $loginerr; ?></span>
                        <div class="btnsub">
                            <input type="submit" name="login_admin" value="login_admin">
                        </div>
                        <div>new admin? <a href="admin_register.php">Sign-up</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

