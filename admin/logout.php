<?php
	session_start();
	if(isset($_SESSION['sess_login']))
	{
		unset($_SESSION['sess_login']);
	}
	// calls index.php
	header("location:index.php");
?>