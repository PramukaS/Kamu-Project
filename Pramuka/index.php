<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kamu.lk</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <div class="container"> 
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" alt="logo" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="restaurant.php">Restaurants</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="" class="btn">Login</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" alt="menu" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Let's change <br> the way you eat!</h1>
                    <p> We promote healthy food habits in order to prevent<br>
                        non-communicable diseases in the Sri Lankan community.</p>
                    <a href="#SignUp" class="btn">Get Start &#8594;</a> 
                </div>
                <div class="col-2">
                    <img src="Images/image1.png" alt="healthy food">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <h1>How Kamu Works.</h1> <br>
                <p> We promote healthy food habits in order to prevent<br>
                        non-communicable diseases in the Sri Lankan community.</p>
            </div>
            <div class="col-2">
                <img src="Images/4.png" alt="healthy food">
            </div>
        </div>
    </div>

    <!------ SignUp categories ------>

    <div class="categories" id="SignUp">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/diet_plan.png" alt="">
                    <div class="content">
                        <h1> Eat Healthy.<br> Stay Healthy.</h1>
                        <p> We provide personalized meal plans with expert advice. Order food and get delivered it to your door steps.</p>
                        <a href="" class="btn">Sign Up User &#8594;</a> 
                    </div>   
                </div>
                <div class="col-3">
                    <img src="images/restaurant.png" alt="">
                    <div class="content">
                        <h1>Add Your <br> Restaurant Here.</h1>
                        <p> You can add your meals and get connected with your customers.<br><br></p>
                        <a href="" class="btn">Sign Up as Restaurant &#8594;</a>
                    </div>
                </div>
                <div class="col-3">
                    <img src="images/driver.png" alt="">
                    <div class="content">
                        <h1>Earn Money <br> From Kamu.lk</h1>
                        <p>You can earn money by delivering foods.<br><br><br></p>
                        <a href="" class="btn">Sign Up as Driver &#8594;</a> 
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <!------ footer------>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <img src="images/logo.png" alt="logo">
                        <p>We promote healthy food habits in order to prevent<br>
                            non-communicable diseases in the Sri Lankan community.</p>
                    </div>
                    <div class="footer-col-2">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="">Restaurant</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-2">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">YouTube</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright"> Copyright 2020 - Kamu.lk</p>
            </div>
        </div>

        <Script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "250px";
                }
                else{
                    MenuItems.style.maxHeight = "0px";
                }
            } 
        </Script>

    </body>
</html>