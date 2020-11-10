<?php
include 'connection.php';

if(isset($_POST['submit'])){
	
	if(isset($_GET['token'])){

		$token = $_GET['token'];

		$newpassword = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['repassword']);

		$updatequery= ""
	}

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
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
</head>
	<body>
		<div class="container">
			<div class="topnav">
	            <ul type="none">
	                <li><a href="">About Us</a></li>
	                <li><a href="">Blog</a></li>
	                <li><a href="">Restaurants</a></li>
	                <li><a href="index.php">Home</a></li>
	            </ul>
	            <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
	        </div>

	        <div class="main">
	        	<div class="bg">
			        <div class="icon">
			        	<img src="images/login.png">
			        </div>

		        	<div class="banner-text">
					<form action="loginvalid.php" method="post">
						<div class="head">
							<img class="logo" src="images/logo.png">
							<h2 class="title">Login</h2>
						</div>
						
						<?php if (isset($_GET['error'])) { ?>
		     			<p class="error"><?php echo $_GET['error']; ?></p>
		     			<?php } ?>
						<label>New Password</label>
						<input type="password" name="password" placeholder="New Password"><br>
						<label>Confirm Password</label>
						<input type="password" name="password" placeholder="Re Enter Password"><br>
						<button type="submit">Update Password</button>
		          		<a href="login.php" class="ca"> Have an account already?</a><br>
					</form>
				</div>
	        </div>
	        
			
			<div class="footer">
				<a href="https://www.facebook.com/juzly.ahamed.10"><img src="images/facebook.jpg"></a>
			    <a href="https://www.instagram.com/juzly_ahamed98/"><img src="images/instagram.jpg"></a>
			    <a href="https://twitter.com/login?lang=en"><img src="images/twitter.jpg"></a>
			    <a href="https://www.youtube.com/watch?v=dD2EISBDjWM&list=PLr6-GrHUlVf_ZNmuQSXdS197Oyr1L9sPB"><img src="images/youtube.jpg"></a>
			</div>
		</div>

	</body>
</html>