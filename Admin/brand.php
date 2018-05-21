<?php
	include('conn.php');
	$selectValue = mysqli_real_escape_string($connect, $_GET['svalue']);
	if($selectValue=="mobiles"){
		$select=mysqli_query($connect,"select * from mobiles");
		echo '<option value="">Please select...</option>';
		while($row = mysqli_fetch_array($select))
		{
			echo '<option value="'.$row['bname'].'">' . $row['bname'] . "</option>";
		}
	}
	else{
		$select=mysqli_query($connect,"select * from laptops");
		echo '<option value="">Please select...</option>';
		while($row = mysqli_fetch_array($select))
		{
			echo '<option value="'.$row['bname'].'">' . $row['bname'] . "</option>";
		}
	}
?> 


