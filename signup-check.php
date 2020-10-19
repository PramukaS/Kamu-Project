<?php 
session_start(); 
include "connection.php";

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['address']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['height']) && isset($_POST['weight']) && isset($_POST['bmi']) && isset($_POST['password']) &&  isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$username = validate($_POST['username']);
	$address = validate($_POST['address']);
	$age = validate($_POST['age']);
	$gender = validate($_POST['gender']);
	$height = validate($_POST['height']);
	$weight = validate($_POST['weight']);
	$bmi = validate($_POST['bmi']);
	$password = validate($_POST['password']);
	$re_password = validate($_POST['re_password']);

	$user_data = 'username='. $username. '&name='. $name;


	if (empty($name)) {
		header("Location: signupuser.php?error=Name is required&$user_data");
	    exit();
	}else if(empty($username)){
        header("Location: signupuser.php?error=Username is required&$user_data");
	    exit();
	}

	else if(empty($address)){
        header("Location: signupuser.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($age)){
        header("Location: signupuser.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($gender)){
        header("Location: signupuser.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($height)){
        header("Location: signupuser.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($weight)){
        header("Location: signupuser.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($bmi)){
        header("Location: signupuser.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($password)){
        header("Location: signupuser.php?error=Name is required&$user_data");
	    exit();
	}

	else if($password !== $re_pass){
        header("Location: signupuser.php?error=The confirmation password  does not matched&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM accounts WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signupuser.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO accounts(username,password,usertype) VALUES('$username', '$password', 'reguser')";
           $sql3 = "INSERT INTO registered_users(name,username,address,age,gender,height,weight,bmi,password) VALUES('$name', '$username', '$address', '$age', '$gender', '$height', '$weight', '$bmi', '$password')";
           $result2 = mysqli_query($conn, $sql2);
           $result3 = mysqli_query($conn, $sql3);
           if ($result2 && $result3) {
           	 header("Location: signupuser.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signupuser.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signupuser.php");
	exit();
}