<?php

    $nameerr = $emailerr = $degerr = $experr = $posterr = $cityerr = $covererr = "";
    $applicant_name = $applicant_email = $applicant_degree = $applicant_position = $applicant_city = $coverletter = "";
    $vcname = $vcemail = $vcdeg = $vcpost = $vccity = $vccover = false;

    if($_SERVER['REQUEST_METHOD']=='POST')
        {
            function validate_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if(empty($_POST['applicant_name']))
            {
                $nameerr="Name is required";
            }else{
                $applicant_name = validate_input($_POST['applicant_name']);
                $vcname = true;
            }

            if(empty($_POST['applicant_email'])){
                $ceerr="E-mail required";
            }elseif(!filter_var($_POST['applicant_email'],FILTER_VALIDATE_EMAIL)){
                $emailerr = "Invalid Email";
            }else{
                $applicant_email = validate_input($_POST['applicant_email']);
                $vcemail=true;
            }

            if(empty($_POST['applicant_degree']))
            {
                $degerr="degree is required";
            }else{
                $applicant_degree = $_POST['applicant_degree'];
                $vcdeg = true;
            }
            
            if(empty($_POST['applicant_position']))
            {
                $posterr="position is required";
            }else{
                $applicant_position = $_POST['applicant_position'];
                $vcpost = true;
            }

            if(empty($_POST['applicant_city']))
            {
                $cityerr="city is required";
            }else{
                $applicant_city = $_POST['applicant_city'];
                $vccity = true;
            }

            if(empty($_POST['coverletter']))
            {
                $covererr="coverletter is required";
            }else{
                $coverletter = $_POST['coverletter'];
                $vccover = true;
            }

            require_once 'connection.php'; 

            if(isset($_POST['apply']) && $vcname && $vcemail && $vcdeg && $vcpost && $vccity && $vccover )
                    {
                    
                        
                            $sql =  "INSERT INTO career (applicant_name,applicant_email,applicant_degree,applicant_position,applicant_city,coverletter) VALUES ('$applicant_name','$applicant_email','$applicant_degree','$applicant_position','$applicant_city','$coverletter')";
                            $query = mysqli_query($conn,$sql);
                            
                            if($query){
                                echo "<script>
                                    alert ('Request sent Sucessfully ');
                                </script>";
                            }else{   echo "<script>
                                alert ('Request not sent Sucessfully ');
                            </script>";
                        }
    
                    }
        }

       
?>