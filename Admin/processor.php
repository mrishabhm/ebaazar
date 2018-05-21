<?php	
	include('conn.php');
	$selectValue = mysqli_real_escape_string($connect, $_GET['svalue']);
	if($selectValue=="mobiles"){
		$select=mysqli_query($connect,"select * from processor where name='$selectValue'");
		echo '<option value="">Please select...</option>';
		while($row = mysqli_fetch_array($select))
		{
			echo '<option value="'.$row['type'].'">' . $row['type'] . "</option>";
		}
	}
	else{
		$selectValue = laptops;
		$select=mysqli_query($connect,"select * from processor where name='$selectValue'");
		echo '<option value="">Please select...</option>';
		while($row = mysqli_fetch_array($select))
		{
			echo '<option value="'.$row['type'].'">' . $row['type'] . "</option>";
		}
	}
?>