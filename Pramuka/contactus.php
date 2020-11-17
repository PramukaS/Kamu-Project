<?php

require_once("connect.php");

    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $sql="INSERT INTO contactus(name, email, subject,message) VALUES ('$name','$email','$subject','$message')";

        $result=$con->query($sql);

        if($result=True){
            echo "<script>alert('Successfully Sent your message!');
            window.location.href='contactus.php';</script>";
        }else{
            echo "error".$sql."<br>".$conn->error;
        }
        $con->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamu.lk | Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/logstyle.css">
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
				<div class="icon">
					<img src="images/contactus.png">
                </div>
            </div>
			<div class="col-2">
				<div class="banner-text">
                    <form method="post" action="#">
                        <div class="head">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <p style="color:green">Hotline: + 94 77 2342347</p>
                        <p style="color:green">Email: kamuinfo@gmail.com</p><br>	
        		        <label class="username">Name</label>
							<input type="text" name="name" autocomplete="off" placeholder="Enter Your Name" required><br>
						<label>Email</label>
                            <input type="email" name="email" autocomplete="off" placeholder="Enter Your Email" required><br>
                        <label>Subject</label>
                            <input type="text" name="subject" autocomplete="off" placeholder="Enter Your Subject" required><br>
                        <label>Message</label><br>
                            <textarea class="textarea" name="message" placeholder="Message" 
                            style="display: block; border: 2px solid #ccc; width: 95%; padding: 6px; margin: 5px auto;border-radius: 5px;" required></textarea><br><br>
							<button type="submit" value="submit" name="submit" >Submit</button><br><br>
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