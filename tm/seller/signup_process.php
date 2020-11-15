<?php 
	session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost','root','','kamu');

// REGISTER USER
if (isset($_POST['reg_seller'])) {

	// receive all input values from the form
	$strName = mysqli_real_escape_string($db, $_POST['strName']);// this function escapes special characters in a string for use in an SQL query
	$strAddress = mysqli_real_escape_string($db, $_POST['strAddress']);
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$lname = mysqli_real_escape_string($db, $_POST['lname']);
	$contactNo = mysqli_real_escape_string($db, $_POST['contactNo']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$storetype = mysqli_real_escape_string($db, $_POST['storetype']);

	// form validation: ensure that the form is correctly filled
	if (empty($strName)) { array_push($errors, "Store name is required!"); }
	if (empty($strAddress)) { array_push($errors, "Store Address is required!"); }
	if (empty($fname)) { array_push($errors, "first name is required!"); }
	if (empty($lname)) { array_push($errors, "last name is required!"); }
	if (empty($contactNo)) { array_push($errors, "contactNo is required!"); }
	if (empty($email)) { array_push($errors, "email is required!"); }
	if (empty($storetype)) { array_push($errors, "Please choose a store type!"); }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$query = "INSERT INTO seller(storename,storeaddress,firstname,lastname,phonenumber,email,businesstype ) 
				  VALUES('$strName', '$strAddress', '$fname', '$lname', '$contactNo', '$email', '$storetype')";
		mysqli_query($db, $query);

		$_SESSION['storename'] = $strName;
		$_SESSION['success'] = "You have registered successfully";
		header('location: log.php');
	} else {
		$_SESSION['errors'] = $errors;
		 //header('Location: restaurnt_signup.php');
	}

}

// ... 
?>