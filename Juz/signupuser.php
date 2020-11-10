<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
</head>
    <body>
        <div class="container">
            <div class="topnav">
                <ul type="none">
                    <!--<li><a id="login" href="login.php">Login</a></li>-->
                    <li><a href="">About Us</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Restaurants</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
            </div>
            
            <div class="main">
                <div class="bgc">
                    <div class="icon">
                        <img src="images/eggplant.png">
                    </div>


                    <div class="banner-textleft">
                        
                        <form action="signup-check.php" method="post">
                            <div class="head">
                                <img class="logo" src="images/logo.png">
                                <h2 class="title">Signup</h2>
                            </div>
                        
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

                            <label>Name</label>
                            <?php if (isset($_GET['name'])) { ?>
                            <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>">
                            <?php }else{ ?>
                            <input type="text" name="name" placeholder="Name">
                            <?php }?>

                            <label>User Name</label>
                            <?php if (isset($_GET['username'])) { ?>
                            <input type="text" name="uname" placeholder="User Name"value="<?php echo $_GET['username']; ?>">
                            <?php }else{ ?>
                            <input type="text" name="username" placeholder="User Name">
                            <?php }?>

                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address">

                            <label>Age</label>
                            <input type="text" name="age" placeholder="Age">

                            <label>Gender</label> <br>
                            <table width="250" border="0px">
                                <tr>
                                    <td><label for="male"> Male </label></td>
                                    <td width="15px" height="15px"><input type="radio" id="male" name="gender" value="male"></td>
                                </tr>
                                <tr>
                                    <td><label for="female"> Female</label></td>
                                    <td width="15px" height="15px"><input type="radio" id="female" name="gender" value="female"></td>
                                </tr>
                                <tr>
                                    <td><label for="other"> Other </label></td>
                                    <td width="15px" height="15px"><input type="radio" id="other" name="gender" value="other"></td>
                                </tr>
                            </table> 
                            <label>Height</label>
                            <input type="text" name="height" placeholder="Height">

                            <label>Weight</label>
                            <input type="text" name="weight" placeholder="Weight">

                            <label>BMI</label>
                            <input type="text" name="bmi" placeholder="BMI">

                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password">

                            <label>Re Enter Password</label>
                            <input type="password" name="re_password" placeholder="Re_Password"><br>

                            <button type="submit">Sign Up</button>
                            <a href="login.php" class="ca">Already have an account?</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
      <div class="footer">
          <a href="https://www.facebook.com/juzly.ahamed.10"><img src="images/facebook.jpg"></a>
          <a href="https://www.instagram.com/juzly_ahamed98/"><img src="images/instagram.jpg"></a>
          <a href="https://twitter.com/login?lang=en"><img src="images/twitter.jpg"></a>
          <a href="https://www.youtube.com/watch?v=dD2EISBDjWM&list=PLr6-GrHUlVf_ZNmuQSXdS197Oyr1L9sPB"><img src="images/youtube.jpg"></a>
      </div>   
    </body>
</html>