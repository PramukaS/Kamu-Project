<?php
session_start();

if(isset($_SESSION['usertype']))
{
	if($_SESSION['usertype'] !='seller')
	{
		header('Location: login.php');	
	}	
}

?>