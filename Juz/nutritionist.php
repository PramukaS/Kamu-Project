<?php
session_start();

if(isset($_SESSION['usertype']))
{
	if($_SESSION['usertype'] !='nutrition')
	{
		header('Location: login.php');
	}
}

?>