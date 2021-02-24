<?php
	session_start();
	if(isset($_SESSION['sess_login']))
	{
		unset($_SESSION['sess_login']);
	}
	// index.php is called
	header("location:index.php");
?>