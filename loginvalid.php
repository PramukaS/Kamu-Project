<?php 
session_start(); 
include "connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		
		// hashing the password
        $password = md5($password);

        
		$sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);


		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result))
			{
				if($row["usertype"] == "admin")
				{
					$_SESSION['AdminUser'] = $row["username"];
					header('Location: admin.php');
				}
				else if ($row["usertype"] == "nutrition") 
				{
					$_SESSION['NutritionistUser'] = $row["username"];
					header('Location: nutritionist.php');
				}
				else if ($row["usertype"] == "seller") 
				{
					$_SESSION['SellerUser'] = $row["username"];
					header('Location: seller.php');
				}
				else if ($row["usertype"] == "delivery") 
				{
					$_SESSION['DeliveryUser'] = $row["username"];
					header('Location: delivery.php');
				}
				else
				{
					$_SESSION['registereduser'] = $row["username"];
					header('Location: home.php');
				}

			}
		}else{
			header("Location: login.php?error=Incorrect Username or password");
	        exit();
		}
	}}
	else{
	header("Location: login.php");
	exit();
}