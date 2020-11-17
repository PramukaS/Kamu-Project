<?php
require_once('connect.php');

if (isset($_POST['submit'])) {
    $username =($_POST['username']);
    $password = ($_POST['password']);
    $nic =($_POST['nic']);
    $license =($_POST['license']);
    $contact =($_POST['contact']);
    $email =($_POST['email']);
    $confirmpassword =($_POST['confirmpassword']);

    if($password != $confirmpassword){
        echo "<script>alert('password not matched!');
        window.location.href='Driver_signup.php';</script>";
    }else{
        $sql = "INSERT INTO deliverydriver(username, nic, license, contact, email, password) VALUES('$username', '$nic', '$license', '$contact', '$email', '$password')";
        $result = mysqli_query($con, $sql);
    }
   
    if($result=True){
        echo "<script>alert('Successfully entered');
        window.location.href='Driver_signup.php';</script>";
    }else{
        echo 'unknown error occured';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/logstyle.css">  
    <title>Driver Signup</title>
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
                <h3>To join as a Kamu.lk driver,<br>first you have to fill this form and then you have to submit copies of following document as a zip file</h3><br>
                <ul>
                    <li>National Identity card</li>
                    <li>Driving License document</li>
                    <li>vehicle insurance document</li>
                    <li>Vehicle registration document</li>
                </ul>
                <div class="icon">
                    <img src="images/driver_signup.png">
                </div>
            </div>
            <div class="col-2">
                <div class="banner-text">
                    <form method="post" action="#">
                        <div class="head">
							<h2 class="title">Signup as Driver</h2>
						</div>
                        <br><lable>User Name</lable>
                            <input type="text" name="username" value="" autocomplete="off" placeholder="Enter Your Name" required><br>
                        <lable>NIC number</lable>
                            <input type="text" name="nic" value="" autocomplete="off" placeholder="Enter your NIC number" required><br>
                        <lable>License Number</lable>
                            <input type="text" name="license" value="" autocomplete="off" placeholder="Enter your License number" required><br>
                        <lable>Contact Number</lable>
                            <input type="number" name="contact" value="" autocomplete="off" placeholder="Enter your Contact number" required><br>
                        <lable>Email</lable>
                            <input type="email" name="email" value="" autocomplete="off" placeholder="Enter your Email" ><br>
                        <lable>Password</lable>
                            <input name="password" type="password" placeholder="Create Password" required><br>
                        <lable>Confirm Password</lable>
                            <input id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" required><br>
                        <lable>Upload your document</lable>
                            <input name="file" type="file" accept="image/jpSg"placeholder="Zip Document">
                            <p style="color:green;">
                                By clicking “Submit,” you agree to Kamu.lk <br> General Terms and Conditions and <br> acknowledge you have read the Privacy Policy.
                            </p>
                            <br>

                            <button type="submit" value="submit" name="submit">Submit</button>
                            <a href="log.php" class="ca">Already have an account?</a>
                    </form>
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