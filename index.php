<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="top off website.css">
    <link rel="stylesheet" href="navbar.css">
</head>

<body>



<?php include('navbar.php'); ?>




    <div class="slideShow">
        <!--this is html for slideshow-->

        <div class="mySlides">
            <img src="Doppler-comp.png" alt="DOPPLER" class="image">
            <h5 class="itemlabels">Doppler</h5>
        </div>

        <div class="mySlides">
            <img src="Animal-Fries-menu.png" alt="ANIMAL FRIES" class="image">
            <h5 class="itemlabels">Animal Fries</h5>
        </div>

        <div class="mySlides">
            <img src="Chocolate Heaven.png" alt="Chocolate Heaven" class="image">
            <h5 class="itemlabels">Chocolate Heaven</h5>
        </div>

        <div class="mySlides">
            <img src="double-tikka-burger.png" alt="Double tikka burger" class="image">
            <h5 class="itemlabels">Double Tikka</h5>
        </div>

        <div class="mySlides">
            <img src="Omelette-N-Tomato-Wrap-Meal-600x600.png" alt="Omelete and tomato wrap" class="image">
            <h5 class="itemlabels">Omelette and tomato Wraps</h5>
        </div>

        <div class="mySlides">
            <img src="noodle_PNG48.png" alt="noodles" class="image">
            <h5 class="itemlabels">Noodles</h5>
        </div>

        <div class="mySlides">
            <img src="hot-n-spicy-steak-burger.png" alt="Hot and spicy steak burger" class="image">
            <h5 class="itemlabels">hot and spicy steak burger</h5>
        </div>
    </div>



    <div id="about-us">
        <h1 class="headings">About us</h1>

        <p>Welcome to the home of delicious gourmet veritey of food. Foodies is a modern contemporary restaurant that
            exists to delight passionate food lovers. Walk in and place your order and sit back and relax and soak in
            our attractive ambiance as you wait for your order to be prepared. All food items are cooked to order and
            we pride ourselves on serving fresh, delicious and hygienic food that tantalize the taste buds and excite
            your senses. Our packaging is designed to be easy to hold and carry as well as ensure that your food
            maintain their flavour and shape.</p>
    </div>

    <h1 class="headings">find us here</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924244.0619641689!2d66.59499551729773!3d25.192146526892635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C+Karachi+City%2C+Sindh!5e0!3m2!1sen!2s!4v1558384018887!5m2!1sen!2s"
        frameborder="0" allowfullscreen>
    </iframe>













    <!-- The Modal (contains the Careers form) -->

    <div id="careers" class="modal">

        <span onclick="window.document.getElementById('careers').style.display='none'" class="exit_modal">
            X
        </span>

        <form action="index.php" method="POST" class="modal_content" id="careers-form">
            <div class="container">

                <h1 class="headings">Careers at foodies</h1>

                <p class="formText">Submit your application.</p>

                <hr>

                <input type="text" placeholder="Enter Your Full Name" name="email" required>


                <input type="text" placeholder="Enter Your Email" name="email" required>

                <select name="degree" class="careers-select-options" title="Degree Level" required="">
                    <option value="" selected=""> Select Highest Degree </option>
                    <option value="10"> Matric </option>
                    <option value="12">Inter</option>
                    <option value="14">Graduate</option>
                    <option value="16"> Master </option>
                    <option value="18">MPhil</option>
                    <option value="20">PhD</option>
                </select>

                <select name="experienceYear" class="careers-select-options" title="Select Department" required="">
                    <option value="" selected=""> Do you have Work Experience? </option>
                    <option value="0"> Fresh </option>
                    <option value="2"> 1 - 3 Years </option>
                    <option value="4"> 3 - 5 Years </option>
                    <option value="6"> 5 - 7 Years </option>
                    <option value="8"> 7 - 9 Years </option>
                    <option value="10"> 10 or More Years </option>
                </select>

                <select name="dept" type="text" class="careers-select-options" id="tags" placeholder="Area">
                    <option value="" selected=""> Position you are applying for </option>
                    <option value="1">HR and Training</option>
                    <option value="2">Restaurant Operation</option>
                    <option value="3">Marketing</option>
                    <option value="4">MIS/IT</option>
                    <option value="5">Supply Chain &amp; warehouse</option>
                    <option value="6">Administration</option>
                    <option value="7">Law &amp; Communicationn</option>
                    <option value="8">Audit</option>
                    <option value="9">Business Development</option>
                    <option value="10">Project &amp; Site Development</option>
                    <option value="12">Call Center</option>
                    <option value="13">Maintenance</option>
                    <option value="14">Food Quality Assurance</option>

                </select>

                <select name="applicantCity" class="careers-select-options" title="Select City" required="">
                    <option value="" selected=""> Select Your City </option>
                    <option value="1"> Karachi </option>
                    <option value="2"> Abbottabad </option>
                    <option value="3"> Lahore </option>
                    <option value="4"> Hyderabad </option>
                    <option value="5"> Islamabad </option>
                    <option value="6"> Peshawar </option>
                    <option value="7"> Multan </option>
                    <option value="9"> Faisalabad </option>
                    <option value="10"> Rawalpindi </option>
                    <option value="11"> Sialkot </option>
                    <option value="12"> Gujranwala </option>
                    <option value="13"> Mangla </option>
                    <option value="14"> Muree </option>
                    <option value="15"> Quetta </option>
                    <option value="16"> Sargodha </option>
                    <option value="18"> Mardan </option>
                    <option value="19"> Bahawalpur </option>
                    <option value="20"> Sahiwal </option>
                    <option value="21"> WahCantt </option>
                    <option value="22"> Kharian </option>
                    <option value="23"> Thokar Niaz Baig </option>
                    <option value="24"> Jhelum </option>
                    <option value="25"> Kala Shah Kaku </option>
                    <option value="26"> Kamoke </option>
                    <option value="27"> Gujrat </option>
                    <option value="28"> Rahwali </option>
                    <option value="29"> Kings Mall Gujranwala </option>
                </select>

                <textarea class="form-control-textarea" name="msg" id="msg" title="Cover Letter" placeholder="Cover Letter"></textarea>
                <input type="file" id="cv" name="cv" title="Upload your cv, (only Ms. Word and PDF files are supported)"
                    required="">

                <div class="clearfix">
                    <button type="submit" class="submitbtn">Submit</button>
                    <button type="button" onclick="window.document.getElementById('careers').style.display='none'"
                        class="cancelbtn">Cancel</button>
                </div>
            </div>
        </form>

    </div>













   







    






    <br>
    <br>
    <br>










    <footer class="footer">
        <div class="footer-content">

            <ul>
                <li><a href="#about-us">About us</a> </li>
                <li><a href="contact-us.php">Contact us</a></li>
                <li onclick="window.document.getElementById('careers').style.display='block'">career</li>
            </ul>

            <div class="footer-image-container">
                <a href="https://twitter.com/"><img src="images (3).png" class="footer-images" alt="twitter"></a>
                <a href="https://facebook.com/"><img src="images.png" class="footer-images" alt="facebook"></a>
                <a href="https://instagram.com/"><img src="images (4).png" class="footer-images" alt="instagram"></a>
                
                
                
            </div>
        </div>
    </footer>










    <script src="home.js"></script>
</body>

</html>