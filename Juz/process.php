<?php
session_start();
include_once('connection.php');

$update=false;
$id= 0;
$username='';
$useremail='';
$usertype= '';

if (isset($_POST['save'])) {
	$username = $_POST['username'];
	$usertype = $_POST['usertype'];
	$useremail = $_POST['useremail'];

	$query="INSERT INTO accounts (username,usertype, useremail) VALUES ('$username', '$usertype', '$useremail')";

	$result=mysqli_query($conn,$query);

	$_SESSION['message'] = "Recored has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: manageusers.php");

}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];

	$query ="DELETE FROM accounts Where id='$id'";
	$result=mysqli_query($conn,$query);

	$_SESSION['message'] = "Recored has been deleted!";
	$_SESSION['msg_type'] = "success";

	header("location: manageusers.php");

}


if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$query ="SELECT * FROM accounts WHERE id=$id";
	$result=mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==1) {
		$row = $result->fetch_array();
		$username = $row['username'];
		$useremail = $row['emailid'];
		$usertype = $row['usertype'];
	}
}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$username = $_POST['username'];
	$useremail =$_POST['emailid'];
	$usertype = $_POST['usertype'];

	$query ="UPDATE accounts SET username='$username', emailid = '$useremail', usertype ='$usertype' WHERE id = $id";
	$result=mysqli_query($conn,$query);

	$_SESSION['message'] = "Recored has been deleted!";
	$_SESSION['msg_type'] = "warning"; 

	header("location: manageusers.php");

}

?>