<?php
	ob_start();
	error_reporting(E_ALL^E_NOTICE);	
	include('conn.php');
	if(isset($_GET['submit'])){
		$pin = $_GET['pincode'];
		if($pin){
			header('location:viewPin.php?id='.$pin);
		}
		else{
			echo "error".mysqli_error($connect);
		}
	}
?>

<!DOCTYPE html>
<html>
<!-- header part -->
<head>
  <title>Ebazaar</title>
  
  
 <!--bootstrap link -->
  <link rel="stylesheet" href="assets/css/bootstrap-3.3.7/dist/css/bootstrap.min.css"/>
 <!--font-awsome link-->
  <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css"/>
 <!--google-font -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet"/>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!--custome css link -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<meta name="viewport" content= width=device-width initial-scale=1.0>
</head>
<body>

<nav class="navbar navbar-fixed-top wl-custom-header">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php" style="color : #fff;font-size : 20px;font-weight : bold;">Ebazaar</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Fixed" style="color : #fff;">
				<span class="icon-bar" style="background : #fff;"></span>
				<span class="icon-bar" style="background : #fff;"></span>
				<span class="icon-bar" style="background : #fff;"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="Fixed">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php" class=" wl-contact-list">Home</a></li>
			<li ><a href="viewCatMob.php" class=" wl-contact-list">Mobiles</a></li>
			<li ><a href="viewCatLap.php" class=" wl-contact-list">Laptops</a></li>
			<li><a href="contactus.php" class=" wl-contact-list">Contact Us</a></li>
			
		</ul>


<?php
	session_start();
	if ($_SESSION['username']=="")
	{
?>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php">Login</a></li>
			<li><a href="signup.php">Register Here</a></li>
		</ul>
	<?php }
	else {
	?>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle wl-header-list" data-toggle="dropdown" href="#">Products <i class="fa fa-caret-down" aria-hidden="true"></i></a>
				<ul class="dropdown-menu">
					<li><a href="addproduct.php">Add Products</a></li>
					<li><a href="products.php">View Products</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle wl-header-list" data-toggle="dropdown" href="#"><i class="fa fa-cog" aria-hidden="true"></i> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
				<ul class="dropdown-menu">
					<li><a href="myProfile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
<?php }?>
		<form>
			<div class="input-group col-md-3 col-xs-3 pull-right" style="margin-top : 5px;">
				<input type="text" name="pincode" class="form-control" placeholder="Enter Pin/City"/>
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit" name="submit">
					<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</div>
		</form>
		</div>
	</div>
</nav>