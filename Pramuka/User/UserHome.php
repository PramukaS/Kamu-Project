<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="css/usrhmcss.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Reg User</title>
</head>
<body>
	<header>
		<div class="index">
        	<div class="topnav">
            	<ul type="none">
                	<li><a id="login" href="login.php">Login</a></li>
                	<li><a href="aboutus.php">About Us</a></li>
                	<li><a href="#">Blog</a></li>
                	<li><a href="#">Restaurants</a></li>
            	</ul>
                <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
        	</div>
   		</div>		
	</header>

	<aside class="sidebar">
		<div class="side-menu">
			<center>
				<img src="images/cont.png">
				<br><br>
				<h2>Anjali</h2>
			</center>
    		<br>
			<a href="UserProfile.php"><i class="fas fa-user"></i><span>View profile</span></a>
			<a href="#"><i class="fas fa-envelope"></i><span>Inbox</span></a>
			<a href="#"><i class="fas fa-question-circle"></i><span>Contact admin</span></a>
			<a href="ContactNutritionist.php"><i class="fas fa-user-md"></i><span>Contact Nutritionist</span></a>
			<a href="#"><i class="fas fa-square"></i><span>Logout</span></a>
		</div>
	</aside>

	<div class="cont">
		<div class="row">
			<div class="column">
				<a href="UserPost.php">
					<img src="images/share-button.jpg" width="200px" height="250px">
				</a>
				 <div class="desc">Post</div>
			</div>

			<div class="column">
				<a href="UserOrder.php">
					<img src="images/food_order.png" width="200px" height="250px">
				</a>
				 <div class="desc">Order</div>
			</div>

			<div class="column">
				<a href="Req_Mealplan.php">
					<img src="images/mealplan.jpg" width="200px" height="250px">
				</a>
				 <div class="desc">Request Mealplan</div>
			</div>	
		</div>
	</div>
		<div class="footer">
            <div class="footer-content">
                <div class="footer-section-about"></div>
                <div class="footer-section-links"></div>
                <div class="footer-section-contact-forms"></div>
            </div>
            <div class="footer-bottom"> </div>
    	</div>			
</body>
</html>