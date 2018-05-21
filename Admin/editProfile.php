<?php
	include('conn.php');
	include('header.php');
	$select=mysqli_query($connect,"select * from admin where user_id='$_SESSION[id]'");
	$fetch=mysqli_fetch_object($select);
	if(isset($_POST['submit']))
	{
		$name = $_POST['username'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$image_name=$_FILES['image']['name'];
		$tmp_name=$_FILES['image']['tmp_name'];
		$src="images/".$image_name;
		move_uploaded_file($tmp_name,$src);
		$insert = mysqli_query($connect , " update admin set name='$name', mobile='$phone', email='$email' ,image='$image_name' where user_id='$_SESSION[id]'");
		if($insert){
			header("location:myProfile.php");
			//echo"updated";
		}
		else{
			echo "Error encountered .".mysqli_error($connect);
		}
	}
?>

<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Welcome <?php echo $fetch->name; ?></h2>
				</div><br/>
				<form method="post" enctype=multipart/form-data>
					<div>
					<input type="file" name="image" id="file" value="" /><img src="images/<?php echo $fetch-> image?>" width="300" height="400">
					</div>
					<input type="text" name="username" value="<?php echo $fetch->name; ?>" autocomplete="off" />
					<input type="tel" name="phone" value="<?php echo $fetch->mobile; ?>" autocomplete="off" />
					<input type="email" name="email" value="<?php echo $fetch->email; ?>" autocomplete="off" /><br/><br/>
					<input type="submit" name="submit" value="Update" />
				</form>
			</div>

<?php
include('footer.php');
?>