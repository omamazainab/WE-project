<?php 
        session_start(); 

        $ferr = $lerr = $eerr = $perr = $cperr = $gerr = "";
        $fname = $lname = $email = $pswd = $cpassword = $gender = "";
        $vfname = $vlname = $vemail = $vpswd = $vcpassword = $vgender = false;
        
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            function validate_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            function strlenght($str){
                $ln = strlen($str);
                if($ln>15){
                    return "password should be less then 15 characters";
                }elseif($ln < 5 && $ln >= 1){
                    return "password should be greater than 4 characters";
                }
                return false;
            }

            if(empty($_POST['fname'])||empty($_POST['lname']))
            {
                $ferr="First and last names are required";
            }else{
                $fname = validate_input($_POST['fname']);
                $vfname = true;
                $lname = validate_input($_POST['lname']);
                $vlname = true;
            }

            if(empty($_POST['email'])){
                $eerr="E-mail required";
            }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $eerr = "Invalid Email";
            }else{
                $email = validate_input($_POST['email']);
                $vemail=true;
            }

            $lenght = strlenght($_POST['pswd']);

            if(empty($_POST['pswd'])){
                $perr = "password field required";
            }elseif($lenght){
                $perr = $lenght;
            }else{
                $pswd = validate_input($_POST['pswd']);
                $vpswd = true;
            }

            if(empty($_POST['cpassword'])){
                $cperr = "confirm password required";
            }elseif($_POST['cpassword']!=$pswd){
                $cperr = "password do not match";
            }
            elseif($_POST['cpassword']==$pswd){
                $vcpassword = true;
            }

            if(empty($_POST['gender'])){
                $gerr = "gender required";
            }else{
                $gender = validate_input($_POST['gender']);
                $vgender = true;
            }
        }

        $conn= mysqli_connect("localhost","root","","registrations");

        if($conn->connect_error){
            die("Connection Failed");
        }
        


      
        if(isset($_POST['submit']) && $vfname && $vlname && $vemail && $vcpassword && $vgender )
        {
           
              $sql = "SELECT * FROM customer WHERE email = '$email'" ;  
              $result = mysqli_query($conn,$sql);

              if(mysqli_num_rows($result)>0)
              {
                echo "<script>
                        alert ('you already have an account');
                    </script>";
              }else {

                $sql =  "INSERT INTO customer (fname,lname,email,pswd,gender) VALUES ('$fname','$lname','$email','$pswd','$gender')";
                $query = mysqli_query($GLOBALS['conn'],$sql);
                
                
                if($query){
                    echo "<script>
                        alert ('Record Inserted Sucessfully ');
                    </script>";
                }

                $_SESSION['email'] = $email;
              }

            
        }

?>