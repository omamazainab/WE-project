<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="top off website.css">
    <link rel="stylesheet" href="navbar.css">
</head>

<body>

<?php include('navbar.php'); ?>


    <h1 id="menu-heading"> menu</h1>

    <div class="menu-container">
        <!-- APPETIZER -->
        <h1 id="appetizer" class="menu">APPITIZER AND FRIES </h1>
        <section class="product">

            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\Fries.png" class="abc" alt="Fries">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">FRIES</h2>
                    <h3 class="product-info-price">Rs:100</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\baked fries.jpg" alt="baked fries">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">BAKED FRIES</h2>
                    <h3 class="product-info-price">Rs:150</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\French Fries.jpg " alt="French Fries">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">FRENCH FRIES</h2>
                    <h3 class="product-info-price">Rs:50</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\Egg-N-Sausage-Wrap-600x600.png" alt="Egg-N-Sausage-Wrap">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Egg-N-Sausage-Wrap</h2>
                    <h3 class="product-info-price">Rs:200</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\Omelette-N-Tomato-Wrap-Meal-600x600.png"
                        alt="Omelette-N-Tomato-Wrap-Meal-">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Omelette-N-Tomato-Wrap-Meal-</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\Onion-Rings.jpg" alt="Onion-Rings">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Onion-Rings</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\Gourmet-Fries.png" alt="Gourmet-Fries">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Gourmet-Fries</h2>
                    <h3 class="product-info-price">Rs:250</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\nugets.jpg" alt="nugets">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">NUGGETS</h2>
                    <h3 class="product-info-price">Rs:100</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\curly-fries.png" alt="curly-fries">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Curly--Fries</h2>
                    <h3 class="product-info-price">Rs:400</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Appetizer and Fries\Animal-Fries-menu.png" alt="Animal-Fries-menu"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Animal-Fries-menu</h2>
                    <h3 class="product-info-price">Rs:350</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
        </section>
        <!-- BEEF AND CHICKEN BURGER -->

        <h1 id="Beef" class="menu">Beef and Chicken burgers</h1>

        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\american.png" alt="AMERICAN">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">AMERICAN BURGER</h2>
                    <h3 class="product-info-price">Rs:500</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\bbqflip.png" alt="bbqflip">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">BBQ FLIP</h2>
                    <h3 class="product-info-price">Rs:600</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\bigbang-final.png" alt="bigbang-final">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">BIGBANG-FINAL</h2>
                    <h3 class="product-info-price">Rs:500</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\doplerBurger.png" alt="doplerBurger">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">DOPLER BURGER</h2>
                    <h3 class="product-info-price">Rs:700</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\firehouse.png" alt="firehouse.">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">FIREHOUSE</h2>
                    <h3 class="product-info-price">Rs:700</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\labsoriginal.png" alt="labsoriginal">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">LABS ORIGINAL</h2>
                    <h3 class="product-info-price">Rs:600</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\mighty.png" alt="mighty">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">MIGHTY</h2>
                    <h3 class="product-info-price">Rs:750</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\oldschool.png" alt="oldschool">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">OLD SCHOOL BURGER</h2>
                    <h3 class="product-info-price">Rs:600</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\chicken.jpg" alt="chicken">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">CHICKEN BURGER</h2>
                    <h3 class="product-info-price">Rs:400</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\beef and chickenburger\quadraburger.png" alt="quadraburger"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">QUADRA BURGER</h2>
                    <h3 class="product-info-price">Rs:650</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
        </section>






        <!-- CAKES -->
        <h1 id="Cakes" class="menu">Cakes</h1>

        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Cake\Chocolate Heaven.png" alt="Chocolate Heaven">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">CHOCOLATE HEAVEN</h2>
                    <h3 class="product-info-price">Rs:250</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Cake\chocolate_lava.png" alt="chocolate_lava">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">CHOCOLATE-LAVA</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Cake\chocolate.jpg" alt="dark chocolate">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">CHOCOLATE CAKE</h2>
                    <h3 class="product-info-price">Rs:250</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Cake\Fudge Cake,jpg.jpg" alt="Fudge Cake">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">FUDGE CAKE</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Cake\dark vegan.jpg" alt="oreo Brownie">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">OREO BROWNIE</h2>
                    <h3 class="product-info-price">Rs:700</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>
        </section>
        <!-- cheese burger -->
        <h1 id="burger" class="menu">Cheese Burgers</h1>
        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cheeseburger\Bacon Cheese.jpg" alt="Bacon Cheese" class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Bacon Cheese</h2>
                    <h3 class="product-info-price">Rs:250</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cheeseburger\BBQ Cheese Burger.png" alt="BBQ Cheese Burger">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">BBQ Cheese Burger</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>





            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cheeseburger\Caramelized Burger.jpg" alt="Caramelized Burger"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Caramelized Burger</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>

            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cheeseburger\doubleCheeseBurger.jpg" alt="doubleCheeseBurger"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">double Cheese Burger</h2>
                    <h3 class="product-info-price">Rs:250</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>




        </section>
        <!-- ICECREAM SHAKES -->
        <h1 id="icecream" class="menu">Icecream shakes</h1>
        <section class="product">



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\icecream shakes\Chocolate-Shake.png" alt="Chocolate-Shake">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Chocolate-Shake.png</h2>
                    <h3 class="product-info-price">Rs:150</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\icecream shakes\Cookies-Shake.png" alt="Cookies-Shake">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Cookies-Shake</h2>
                    <h3 class="product-info-price">Rs:200</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\icecream shakes\Oreo-Shake.png" alt="Oreo-Shake">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Oreo-Shake</h2>
                    <h3 class="product-info-price">Rs:200</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\icecream shakes\Strawberry-Shake.png" alt="Strawberry-Shake">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Strawberry-Shake</h2>
                    <h3 class="product-info-price">Rs:150</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
                    .
                </div>
            </div>
        </section>

        <!-- NOODLES -->
        <h1 id="noddles" class="menu">noodles</h1>

        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\noodles\Asian peanut noodles.jpg" alt=" peanut noodles">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">peanut noodles</h2>
                    <h3 class="product-info-price">Rs:100</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\noodles\chinese-chilled-noodle-salad.jpg" alt="chinese-chilled-noodle-salad">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">chinese-chilled-noodle-salad.jpg</h2>
                    <h3 class="product-info-price">Rs:150</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\noodles\Garlic-Noodles-Skillet.jpg" alt="Garlic-Noodles-Skillet">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Garlic-Noodles</h2>
                    <h3 class="product-info-price">Rs:150</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\noodles\noodle_PNG48.png" alt="noodle_PNG48" class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">noodle</h2>
                    <h3 class="product-info-price">Rs:200</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\noodles\singapore-noodles-shao-zhong.jpg" alt="singapore-noodles-shao-zhong">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">singapore-noodles</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


        </section>
        <!--Sandwich and Chicken Red -->
        <h1 id="sandwich" class="menu">Sandwich and Chicken Red</h1>

        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Sandwich and  Chicken Red\Blackened Grouper Sandwiches.png"
                        alt=" Blackened Grouper Sandwiches">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Blackened Grouper Sandwiches</h2>
                    <h3 class="product-info-price">Rs:300</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Sandwich and  Chicken Red\Halfbird.jpg" alt="Halfbird">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Half bird</h2>
                    <h3 class="product-info-price">Rs:450</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Sandwich and  Chicken Red\Egg in a nest sandwich.jpg" alt="Egg in a nest sandwich">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Egg in a nest sandwich</h2>
                    <h3 class="product-info-price">Rs:150</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Sandwich and  Chicken Red\redchic.jpg" alt="redchic">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">redchic</h2>
                    <h3 class="product-info-price">Rs:350</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Sandwich and  Chicken Red\Chicken sandwich.jpg" alt="Chicken sandwich">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Chicken sandwich</h2>
                    <h3 class="product-info-price">Rs:100</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


        </section>
        <!-- PIZZA -->
        <h1 id="pizza" class="menu">Pizza</h1>
        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\pizza\al_forno_pizza_fast_food_avgorou_famagousta_kokkinochoria_2.jpg"
                        class="abc" alt="TIKKA ">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">TIKKA </h2>
                    <h3 class="product-info-price">Rs:1000</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\pizza\cheese.jpg" alt="cheese">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">CHEESE</h2>
                    <h3 class="product-info-price">Rs:1200</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\pizza\Piccadilly Circus Pizza.png" alt="Piccadilly Circus Pizza"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Piccadilly Circus Pizza</h2>
                    <h3 class="product-info-price">Rs:1000</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\pizza\pizza salami italian.png" alt="pizza salami italian"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">pizza salami italian</h2>
                    <h3 class="product-info-price">Rs:1350</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\pizza\spicy.jpg" alt="spicy">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">spicy</h2>
                    <h3 class="product-info-price">Rs:1200</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


        </section>

        <!-- DONUTS -->
        <h1 id="donuts" class="menu">Donuts</h1>
        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Donuts\images.jpg" class="abc" alt="chocolate cake doughnut ">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">chocolate cake doughnut </h2>
                    <h3 class="product-info-price">Rs:100</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Donuts\Chocolate-Frosted-Donuts.jpg" alt="Chocolate-Frosted-Donuts">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Chocolate-Frosted-Donuts</h2>
                    <h3 class="product-info-price">Rs:120</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Donuts\strawberry frosted doughnuts.jpg" alt="strawberry frosted doughnuts"
                        class="abc">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">strawberry frosted doughnuts</h2>
                    <h3 class="product-info-price">Rs:80</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Donuts\cinnamon-twist-doughnuts-01.jpg" alt="cinnamon-twist-doughnuts-01"
                        class="abc" />
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">cinnamon-twist</h2>
                    <h3 class="product-info-price">Rs:130</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\Donuts\cream filled doughnuts.jpg" alt="cream filled doughnuts">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">cream filled doughnuts</h2>
                    <h3 class="product-info-price">Rs:120</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


        </section>





        <!-- COLDDRINKS -->
        <h1 id="coldrinks" class="menu">Cold Drinks</h1>
        <section class="product">
            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cold drinks\Coke.png" alt="COKE">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">COKE</h2>
                    <h3 class="product-info-price">Rs:60</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cold drinks\Fanta-600x600.png" alt="Fanta-600x600">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Fanta</h2>
                    <h3 class="product-info-price">Rs:60</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cold drinks\milo.png" alt="milo">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">milo</h2>
                    <h3 class="product-info-price">Rs:100</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>



            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cold drinks\Orange-Juice-600x600.png " alt="Orange-Juice-600x600">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">Orange-Juice</h2>
                    <h3 class="product-info-price">Rs:130</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


            <div class="product-card">
                <div class="product-image-div">
                    <img class="product-image" src="pictures\cold drinks\mineral water.jpg" alt="mineral water">
                </div>
                <div class="product-info">
                    <h2 class="product-info-name">mineral water</h2>
                    <h3 class="product-info-price">Rs:50</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>
            </div>


        </section>

    </div>

    <!-- cart modal -->
    



    <!-- The Modal (contains the Deals) -->




    <div class="deals-container" id="Deals">

        <h1 class="headings">DEALS</h1>

        <div class="product-card">

            <img src="Deal8.png" alt="" class="deal-images product-image">

            <div class="product-info">
                <p class="itemlabels-deals product-info-name">4 in one!! get four value burgers in just Rs 1200/- </p>
                <h3 class="product-info-price">Rs:1100</h3>
                <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
            </div>

        </div>

        <div class="product-card">

            <img src="deal1.jpg" alt="" class="deal-images product-image">

            <div class="product-info">
                <p class="itemlabels-deals product-info-name">Whooper fest!! get 2 chicken bugers and two glasses of
                    pepsi in
                just Rs.999/-</p>
                <h3 class="product-info-price">Rs:999</h3>
                <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
            </div>


        </div>


       

            <div class="product-card">

                <img src="Deal3.png" alt="" class="deal-images-circle product-image">

                <div class="product-info">
                    <p class="itemlabels-deals-circle product-info-name">Get a regular pizza 5 garlic breads and 1 ltr
                        pepsi in
                        just
                        RS.1199/-</p>
                    <h3 class="product-info-price">Rs:1199</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
                </div>

            </div>

            <div class="product-card">

                <img src="Deal4.png" alt="" class="deal-images-circle product-image">

                <div class="product-info">
                    <p class="itemlabels-deals-circle product-info-name">Get a regular pizza 3 garlic breads and 1 ltr
                        pepsi in
                        just
                        RS.1199/-</p>
                    <h3 class="product-info-price">Rs:1199</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>

                </div>

            </div>


            <div class="product-card">
                <img src="Deal5.png" alt="" class="deal-images-circle product-image">

                <div class="product-info">
                    <p class="itemlabels-deals-circle product-info-name">Get a regular pizza 2 garlic breads and 1 ltr
                        pepsi in
                        just
                        RS.1199/-</p>
                    <h3 class="product-info-price">Rs:1199</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <img src="Deal6.png" alt="" class="deal-images-circle product-image">

                <div class="product-info">
                    <p class="itemlabels-deals-circle product-info-name">Get a regular pizza 4 garlic breads and 1 ltr
                        pepsi in
                        just
                        RS.1199/-</p>
                    <h3 class="product-info-price">Rs:1199</h3>
                    <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
                </div>
            </div>
        

        <div class="product-card">
            <img src="Deal2.jpg" alt="" class="deal-images product-image">

            <div class="product-info">
                <p class="itemlabels-deals product-info-name">get one drink, 6 pcs of nuggets and spicy crisp chicken
                    in just
                    RS.220/-
                </p>
                <h3 class="product-info-price">Rs:220</h3>
                <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
            </div>
        </div>

        <div class="product-card">

            <img src="Deal10.jpg" alt="" class="deal-images product-image">

            <div class="product-info">
                <p class="itemlabels-deals product-info-name">get Chatpata chicken burger in just RS.150/- </p>
                <h3 class="product-info-price">Rs:150</h3>
                <button onclick="addToCartClicked(event)" class="add-to-cart">Add to cart</button>
            </div>
        </div>
    </div>




    



    
   

</body>

</html>