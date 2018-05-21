<?php
	include('conn.php');
	include('header.php');
	$select = mysqli_query($connect,"select * from users where user_id='$_SESSION[idUser]'");
	$fetch=mysqli_fetch_object($select);
?>

<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Welcome <?php echo $fetch->name; ?></h2>
				</div><br/>
				<center>
				<form>
					Name: <input type="text" name="Username" value="<?php echo $fetch->name; ?>" disabled /><br/><br/>
					Mobile No.: <input type="tel" name="Phone" value="<?php echo $fetch->mobile; ?>" disabled /><br/><br/>
					Email: <input type="email" name="Email" value="<?php echo $fetch->email; ?>" disabled /><br/><br/>
					Address: <input type="text" name="address" value="<?php echo $fetch->address; ?>" disabled />
					<br/><br/>
					<button >Done</button>
				</form>
				</center>
			</div>
			<br/><br/>
<?php
include('footer.php');
?>