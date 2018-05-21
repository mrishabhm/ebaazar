<?php
	error_reporting(E_ALL^E_NOTICE);
	include('conn.php');
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$select = mysqli_query($connect,"select * from users where email='$email'");
		$count = mysqli_num_rows($select);
		if($count==1){
			echo "<script>alert('Already exists in database.')</script>";
		}
		else{
			$insert = mysqli_query($connect,"insert into users (name, email, address, password, mobile) values ('$username','$email','$address','$password','$phone')");
		}
		
	}
?>
<!DOCTYPE html>
<head>
<title>E market</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="Admin/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="Admin/css/font.css" type="text/css"/>
<link href="Admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Sign Up</h2>
				</div>
				<form action="" method="post"> 
					<input type="text" name="username" value="" placeholder="User Name" autocomplete="off" required />
					<input type="tel" name="phone" value="" placeholder="Phone" autocomplete="off" required />
					<input type="email" name="email" value="" placeholder="Email" autocomplete="off" required />
					<input type="password" name="password" value="" placeholder="Password" autocomplete="off" required />
					<input type="text" name="address" value="" placeholder="Address" autocomplete="off" required />
					<input type="submit" class="register" value="Sign Up" name="submit">
				</form>
				<a href="index.html">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2016 eMarket . All Rights Reserved</p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="Admin/js/proton.js"></script>
</body>
</html>