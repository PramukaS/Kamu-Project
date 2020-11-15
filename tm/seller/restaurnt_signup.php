<?php include("includes/signup_process.php")  ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    .errors{
    color: red;
    display:flex;
    justify-content:center;
    flex-direction:row;}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
    <script src="javaScript/signup.js"></script>
    <title>Seller Signup</title>
</head>
<body>
<div class="bg-img">

    <form name="form1" method="post" action="restaurnt_signup.php" onSubmit="return check();">
    </div>

    <div class="box">

        <div class="right">

            <h1 style="font-family:'Palatino Linotype';color:green;font-size:38px">Add my Restaurant</h1>
            <div class="input">
                <i class="fas icon fa-utensils-alt"></i>
                <input type="storeName" name="strName" value="" placeholder="StoreName" >
            </div>

            <div class="input">
                <i class="fas icon fa-map-marked"></i>
                <input type="storeAddress" name="strAddress" value="" placeholder="Store Address" >
            </div>
            <div class="input">
                <i class="far icon fa-id-badge"></i>
                <input type="firstName" name="fname" value="" placeholder="First Name" >
            </div>
            <div class="input">
            <i class="fas icon fa-id-badge"></i>
                <input type="lastName" name="lname" value="" placeholder="Last Name" >
            </div>
            <div class="input">
                <i class="fas icon fa-phone-volume"></i>
                <input type="tel" name="contactNo" value="" placeholder="+94|Contact Number" >
            </div>
            <div class="input">
                <i class="fas icon fa-envelope"></i>
                <input type="email" name="email" value="" placeholder="Email" >
            </div>
            <div class="input">
                <i class="fas icon fa-store"></i>
                <select id="storeType" name="storetype" required>
                <option value="" disabled selected>Choose a Store Type</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Conveniencestore">Convenience store</option>
                <option value="Grocerystore">Grocery store</option>
                <option value="Liquorstore">Liquor store</option>
                </select>
            </div>

            <h5 style="font-family:'Palatino Linotype';color:brown;font-size:12px">By clicking </h5>
            <h5 style="font-family:'Palatino Linotype';color:green;font-size:12px">“Submit,” </h5>
            <h5 style="font-family:'Palatino Linotype';color:brown;font-size:12px">you agree to Kamu.lk General Terms and Conditions and acknowledge you have read the Privacy Policy.</h5>
            <br>
                     <div class="errors">
                          <?php if (isset($_SESSION['errors'])) {
                            foreach($errors as $err) {
                            ?>
                            <span><?php echo $err ?></span>
                          <?php }} ?>
                    </div>

                <button type="submit" class="btn" name="reg_seller">Submit</button>
            <br>
                <h5 style="font-family:'Palatino Linotype';color:green;font-size:16px">Already have an account? <a href="#">Login</a> </h5>
        </div>
    </form>

        <div class="left">


             <div class="logo1">
                <img src="img/logo.png" alt="kamu.lk logo" width="100" height="70">
                </a>
            </div>

            <div class="logo2">
                 <img src="img/restaurant.jpg" alt="kamu.lk logo" width="350" height="350">
                </a>
            </div>

        </div>


    </div>

</div>

</body>
</html>
