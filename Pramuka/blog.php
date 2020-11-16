<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kamu.lk | Blog</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container"> 
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" alt="logo" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="restaurant.php">Restaurants</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="log.php" class="btn">Login</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" alt="menu" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                <div class="text"><h3>Chorizo & mozzarella gnocchi bake <span style="font-size: 11px">  &#8287 &#8287 &#8287  &#8287 &#8287 &#8287 &#8287 &#8287 &#8287 Date:- 15th Nov</span></h3>
                    <p style="font-size: 11px"> Author: Pramuka Senaviratna</p>
                    <p>Step 1 Heat the oil in a medium pan over a medium heat. Fry the onion
                    and garlic for 8-10 mins until soft. Add the chorizo and fry for 5
                    mins more. Tip in the tomatoes and sugar, and season. Bring to a
                    simmer, then add the gnocchi and cook for 8 mins, stirring often,
                    until soft. Heat the grill to high.<span id="dots">...</span><span id="more"><br><br>Step 2 Stir ¾ of the mozzarella and most of the basil through the
                    gnocchi. Divide the mixture between six ovenproof ramekins, or
                    put in one baking dish. Top with the remaining mozzarella, then
                    grill for 3 mins, or until the cheese is melted and golden. Season,
                    scatter over the remaining basil and serve with green salad.</span></p></div>
                    <a href="#SignUp" class="btn">Get Start &#8594;</a> 
                </div>
                <div class="col-2">
                    <img src="images/blog/Food1.jpg" alt="healthy food">
                </div>
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

            myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "More";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Less";
                    moreText.style.display = "inline";
                }
        </Script>

    </body>
</html>
