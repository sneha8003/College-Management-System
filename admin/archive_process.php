<?php
// database name group_project is connected using pdo connnection
$pdo = new PDO('mysql:dbname=Group_Project;host=localhost','root','');
// get id to update id from tbl_user
$_GET['id'];    
//update tbl_user column archive
$stmt = $pdo->prepare("UPDATE tbl_user SET archive =:archive WHERE id =:id");
// all values are posted on the attribute of tbl_user table using get method
$criteria = [
		'id'=>$_GET['id'],
		 'archive'=>'yes'
	];
		// statement execute the above criteria
	($stmt->execute($criteria)); 
	header('Location:view_user.php')
?>