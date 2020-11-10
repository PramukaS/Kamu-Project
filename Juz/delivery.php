<?php
session_start();
if(isset($_SESSION['usertype']))
{
	if($_SESSION['usertype'] !='delivery')
	{
		header('Location: login.php');
	}
}

?>