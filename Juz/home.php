<?php 
session_start();

if(isset($_SESSION['usertype']))
{
	if($_SESSION['usertype'] !='reguser')
	{
		header('Location: login.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>
