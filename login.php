<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
</head>
<body>
	<div class="index">
		<div class="topnav">
            <ul type="none">
                <li><a id="login" href="login.php">Login</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Restaurants</a></li>
            </ul>
                <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
        </div>
        <div class="bg">
	        <div class="icon">
	        	<img src="images/login.png">
	        </div>

	        <div class="banner-text">
			<form action="loginvalid.php" method="post">
				<div class="head">
					<img class="logo" src="logo.png">
					<h2 class="title">Login</h2>
				</div>
				
				<?php if (isset($_GET['error'])) { ?>
     			<p class="error"><?php echo $_GET['error']; ?></p>
     			<?php } ?>
				<label class="username">Username</label>
				<input type="text" name="username" placeholder="Username"><br>
				<label>Password</label>
				<input type="password" name="password" placeholder="Password"><br>
				<button type="submit">Login</button>
          		<a href="signupuser.php" class="ca">Create an account</a>
			</form>

		</div>
        </div>
        
		
		<div class="footer"></div>

	</div>


</body>
</html>