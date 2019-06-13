<?php
 include('signup.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css">   -->
    <link rel="stylesheet" href="sign-up.css">  
    <!-- <link rel="stylesheet" href="top off website.css"> -->
    <link rel="stylesheet" href="navbar.css">

</head>
<body>

<?php include('navbar.php'); ?>

    <form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container  text-center">
            <div class="inner">
                <div class="title">
                    <h2>Sign-up</h2>
                    <div class="content">
                        <div class=txt>
                            <input type="text" name="fname" placeholder="Enter your first name">
                        </div>
                        <div class="txt">
                            <input type="text" name="lname" placeholder="Enter your last name">
                        </div>
                        <span id="span"><?php echo $ferr; ?></span>
                        <div class="txt">
                            <input type="email" name="email" placeholder="Enter your email address">
                        </div>
                        <span id="span"><?php echo $eerr; ?></span>
                        <div class="txt">
                            <input type="password" name="pswd" placeholder="Enter your password">
                        </div>
                        <span id="span"><?php echo $perr; ?></span>
                        <div class="txt">
                            <input type="password" name="cpassword" placeholder="Confirm password">
                        </div>
                        <span id="span"><?php echo $cperr; ?></span>
                        <div class=radios>
                            <h6>Gender : </h6>
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female">Female</label>
                        </div>
                        <span id="span"><?php echo $gerr; ?></span>
                        <div class="btnsub">
                            <input type="submit" name="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>