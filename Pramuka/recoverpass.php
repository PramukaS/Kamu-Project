<?php
include 'connect.php';

if(isset($_POST['submit'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$emailquery = " select * from accounts where email='$email'";
	$query = mysqli_query($conn, $emailquery); 

	$emailcount = mysqli_num_rows($query);

	if($emailcount){
		$userdata = mysqli_fetch_array($query);

		$username = $userdata['name'];
		$token = $userdata['token'];

		$subject = "Recover Password";
		$body = "Hi, $name. Click here to reset your password.
		http://localhost/1emailverifregistr/recoverpass.php?token=$token";
		$sender_email = "From:-kamuwetellyouthebest@gmail.com";

		if(mail($email, $subject, $body, $sender_email)){
			$_SESSION['msg'] = "Check youe email to reset your account $email password";
			header('Location:login.php');
		}else{
			echo "Email sending failed....";
		}
	}else{
		echo "No User Email Found";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Recover Password</title>
	<link rel="stylesheet" type="text/css" href="css/logstyle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					</ul>
				</nav>
				<img src="images/menu.png" class="menu-icon" alt="menu" onclick="menutoggle()">
			</div>
	        <div class="row">
				<div class="col-2">
					<div class="icon">
			        	<img src="images/recover.png">
			        </div>
				</div>
				<div class="col-2">
					<div class="banner-text">
						<form action="<php echo htmlentities ($_SERVER['PHP_SELF']); ?>" method="post">
							<div class="head">
								<h2 class="title">Recover Password</h2>
							</div>
							<br>
							<?php if (isset($_GET['error'])) { ?>
							<p class="error"><?php echo $_GET['error']; ?></p>
							<?php } ?>
							
							<label>Please Enter Your Email Here</label>
							<input type="email" name="email" placeholder="Email Address"><br>
							<button type="submit">Send Email</button>	<br><br>
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