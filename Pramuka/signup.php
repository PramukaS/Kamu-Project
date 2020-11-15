<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="css/logstyle.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
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
                              <li><a href="restaurant.php">Restaurants</a></li>
                         <li><a href="">About Us</a></li>
                    </ul>
               </nav>
          </div>
          <div class="row">
               <div class="col-2">
                    <div class="icon">
                         <img src="images/eggplant.png">
                    </div>
               </div>
               <div class="col-2">
                    <div class="banner-text">                     
                         <form action="signup-check.php" method="post">
                              <div class="head">
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
                                   <input type="text" 
                                        name="name" 
                                        placeholder="Name"                                        
                                        value="<?php echo $_GET['name']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="name" 
                                        placeholder="Name"><br>
                              <?php }?>

                              <label>User Name</label>
                              <?php if (isset($_GET['username'])) { ?>
                                   <input type="text" 
                                        name="username" 
                                        autocomplete="off"
                                        placeholder="User Name"
                                        value="<?php echo $_GET['username']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="username" 
                                        autocomplete="off"
                                        placeholder="User Name"><br>
                              <?php }?>

                              <label>Email ID</label>
                              <?php if (isset($_GET['emailid'])) { ?>
                                   <input type="text" 
                                        name="emailid" 
                                        placeholder="Email ID"
                                        value="<?php echo $_GET['emailid']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="emailid" 
                                        placeholder="Email ID"><br>
                              <?php }?>

                              <label>Age</label>
                              <?php if (isset($_GET['age'])) { ?>
                                   <input type="text" 
                                        name="age" 
                                        placeholder="Age"
                                        value="<?php echo $_GET['age']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="age" 
                                        placeholder="Age"><br>
                              <?php }?>

                              <label>Height</label>
                              <?php if (isset($_GET['height'])) { ?>
                                   <input type="text" 
                                        name="height" 
                                        placeholder="Height"
                                        value="<?php echo $_GET['height']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="height" 
                                        placeholder="Height"><br>
                              <?php }?>

                              <label>Weight</label>
                              <?php if (isset($_GET['weight'])) { ?>
                                   <input type="text" 
                                        name="weight" 
                                        placeholder="Weight"
                                        value="<?php echo $_GET['weight']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="weight" 
                                        placeholder="Weight"><br>
                              <?php }?>

                              <label>BMI</label>
                              <?php if (isset($_GET['bmi'])) { ?>
                                   <input type="text" 
                                        name="bmi" 
                                        placeholder="BMI"
                                        value="<?php echo $_GET['bmi']; ?>"><br>
                              <?php }else{ ?>
                                   <input type="text" 
                                        name="bmi" 
                                        placeholder="BMI"><br>
                              <?php }?>

                              <label>Password</label>
                              <input type="password" 
                                   name="password" 
                                   placeholder="Password"><br>

                              <label>Re Password</label>
                              <input type="password" 
                                   name="re_password" 
                                   placeholder="Re_Password"><br>

                              <button type="submit">Sign Up</button>
                              <a href="log.php" class="ca">Already have an account?</a>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>