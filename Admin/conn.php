<?php
	$connect=mysqli_connect('localhost', 'root' , '' , 'eBazar');
	if($connect){
		// echo"connected";
	}
	else{
		echo"not connected";
	}

?>