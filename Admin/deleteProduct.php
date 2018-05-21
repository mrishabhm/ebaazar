<?php 
	error_reporting(E_ALL^E_NOTICE);
	include('conn.php');
	$id = $_GET['id'];
	$delete = mysqli_query($connect ,"delete from products where product_id='$id'");
	if($delete){
		header("location:products.php");
	}
	else{
		echo "<script> alert('Errorr') </script>";
	}
?>