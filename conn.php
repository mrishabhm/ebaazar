<?php
	$connect=mysqli_connect('localhost', 'root' , '' , 'ebazar');
	if($connect){
		// echo"connected";
	}
	else{
		echo"not connected";
	}

?>