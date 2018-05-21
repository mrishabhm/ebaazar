<?php
	error_reporting(E_ALL^E_NOTICE);
	session_start();
	include("conn.php");
	if(isset($_POST['submit']))
	{
	$user =$_POST['username'];
	$password =$_POST['password'];
	$select = mysqli_query($connect,"select * from admin where name='$user' AND password='$password'");
	$count = mysqli_num_rows($select);
	$fetch = mysqli_fetch_object($select);
	if($count==1)
	{
		$_SESSION['id']=$fetch->user_id;
		$_SESSION['user']=$user;
		header('location:index.php');
	}
	else{
		echo"unsuccessful";
	}
	}

?>

<!DOCTYPE html>
<head>
<title>E Bazaar Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2> Admin Login</h2>
				</div>
				<form action="" method="post">
					<input type="text" name="username" value="" placeholder="User name"  autocomplete="off" />
					<input type="password" name="password" value="" placeholder="password" autocomplete="off" />
					<input type="submit" class="register" value="Login" name="submit">
				</form>
				<a href="../index.html">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2016 eBazar . All Rights Reserved</p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
