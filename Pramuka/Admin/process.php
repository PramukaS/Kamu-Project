<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'kamu');

	// initialize variables
	$username = "";
	$emailid = "";
	$usertype = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$usertype=$_POST['usertype'];
		$emailid = $_POST['emailid'];

		mysqli_query($db, "INSERT INTO accounts (username, usertype, emailid) VALUES ('$username', '$usertype', '$emailid')"); 
		$_SESSION['message'] = "User details added Successfully!"; 
		header('location: manageusers.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$usertype = $_POST['usertype'];
	$emailid = $_POST['emailid'];


	mysqli_query($db, "UPDATE accounts SET username='$username', usertype='$usertype', emailid='$emailid' WHERE id=$id");
	$_SESSION['message'] = "User details updated Successfully!"; 
	header('location: manageusers.php');
	}

	if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($db, "DELETE FROM accounts WHERE id=$id");
	$_SESSION['message'] = "User Account deleted Successfully!"; 
	header('location: manageusers.php');
	}

?>