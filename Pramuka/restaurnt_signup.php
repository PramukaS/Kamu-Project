<?php include('signup_process.php')  ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    .errors{
    color: red;
    display:inline;
    justify-content:center;
    flex-direction:row;}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/logstyle.css">  
    <title>Seller Signup</title>
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
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" alt="menu" onclick="menutoggle()">
        </div> 
        <div class="row">
           <div class="col-2">
                <div class="icon">
                    <img src="images/seller_signup.png">
                </div>
           </div>
            <div class="col-2">
                <div class="banner-text">
                    <form name="form1" method="post" action="restaurnt_signup.php">
                        <div class="head">
							<h2 class="title">Signup as Restaurant</h2>
						</div>
                        <lable>Store Name</lable>
                            <input type="storeName" name="strName" value="" autocomplete="off" placeholder="Store Name" required>
                        <lable>Store Addresss</lable>
                            <input type="storeAddress" name="strAddress" value="" autocomplete="off" placeholder="Store Address" required>
                        <lable>First Name</lable>
                            <input type="firstName" name="fname" value="" autocomplete="off" placeholder="First Name" required>
                        <lable>Last Name</lable>
                            <input type="lastName" name="lname" value="" autocomplete="off" placeholder="Last Name" required>
                        <lable>Contact Number</lable>
                            <input type="tel" name="contactNo" value="" autocomplete="off" placeholder="+94|Contact Number" required>
                        <lable>Email</lable>
                            <input type="email" name="email" value="" autocomplete="off" placeholder="Email" ><br>
                        <lable>Store Type</lable>
                            <select id="storeType" name="storetype" required>
                                <option value="" disabled selected>Choose a Store Type</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Conveniencestore">Convenience store</option>
                                <option value="Grocerystore">Grocery store</option>
                                <option value="Liquorstore">Liquor store</option>  
                            </select>
                            <p style="color:green;">
                                By clicking “Submit,” you agree to Kamu.lk <br> General Terms and Conditions and <br> acknowledge you have read the Privacy Policy.
                            </p>
                            <br>
                            <div class="errors">
                                <?php if(isset($_SESSION['errors'])) {
                                    foreach($errors as $err) {
                                ?>
                                <span><?php echo $err ?></span>
                                <?php }} ?>
                            </div>
                            <button type="submit" name="reg_seller">Submit</button>
                            <a href="log.php" class="ca">Already have an account?</a>
                    </form>
                </div>
            </div>
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
        </Script>
</body>
</html>
