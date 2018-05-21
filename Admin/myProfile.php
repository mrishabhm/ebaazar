<?php
	include('conn.php');
	include('header.php');
	$select = mysqli_query($connect,"select * from admin where user_id='$_SESSION[id]'");
	$fetch=mysqli_fetch_object($select);
?>

<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Welcome <?php echo $fetch->name; ?></h2>
				</div><br/>
				<form>
					<div class="field">
					<img src="images/<?php echo $fetch->image; ?>" width="400" height="400">
				</div>
					<input type="text" name="Username" value="<?php echo $fetch->name; ?>" disabled />
					<input type="tel" name="Phone" value="<?php echo $fetch->mobile; ?>" disabled />
					<input type="email" name="Email" value="<?php echo $fetch->email; ?>" disabled /><br/><br/>
					<button ><a href="editProfile.php">Edit Profile</a></button>
				</form>
			</div>
			<br/><br/>
<?php
include('footer.php');
?>