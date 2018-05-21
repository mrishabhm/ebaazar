<?php
	error_reporting(E_ALL^E_NOTICE);
	include('conn.php');
	$id = $_GET['id'];
	$deleteU = mysqli_query($connect,"delete from users where user_id='$id'");
	if($deleteU){
		$deleteP = mysqli_query($connect,"delete from products where user_id='$id'");
		header('location:users.php');
	}
	else{
		echo"Error".mysqli_error($connect);	
	}
?>