<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/logstyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
	</head>
	<body class="background">
		<div class="icon">
			    <img src="images/rest.png">
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
				<label class="username">Username</label>
				<input type="text" name="username" placeholder="Username"><br>
				<label>Password</label>
				<input type="password" name="password" placeholder="Password"><br>
				<button type="submit">Login</button>
          		<a href="signup.php" class="ca">Want to create an account?</a><br>
         		<a href="recoverpass.php" class="ca">Forgot password?</a>
			</form>
		</div>
	</body>

</html>