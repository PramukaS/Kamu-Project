<?php 
session_start(); 
include "connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['emailid']) && isset($_POST['age']) && isset($_POST['height']) && isset($_POST['weight']) && isset($_POST['bmi'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$emailid = validate($_POST['emailid']);
	$age = validate($_POST['age']);
	$height = validate($_POST['height']);
	$weight = validate($_POST['weight']);
	$bmi = validate($_POST['bmi']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'username='. $username. '&name='. $name. '&emailid='. $emailid. '&age='. $age. '&height='. $height. '&weight='. $weight. '&bmi='. $bmi ;


	if (empty($username)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($emailid)){
        header("Location: signup.php?error=Email ID is required&$user_data");
	    exit();
	}
	else if(empty($age)){
        header("Location: signup.php?error=Age is required&$user_data");
	    exit();
	}
	else if(empty($height)){
        header("Location: signup.php?error=Height is required&$user_data");
	    exit();
	}
	else if(empty($weight)){
        header("Location: signup.php?error=Weight is required&$user_data");
	    exit();
	}
	else if(empty($bmi)){
        header("Location: signup.php?error=BMI is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($password !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE username='$username' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, name, emailid, age, height, weight, bmi, password) VALUES('$username', '$name', '$emailid', '$age', '$height', '$weight', '$bmi','$password')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}