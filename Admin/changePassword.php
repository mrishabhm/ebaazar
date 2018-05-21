<?php
	session_start();
	error_reporting(E_ALL^E_NOTICE);
	include('conn.php');
	include('header.php');
	if (isset($_POST['submit'])){
		$oldPassword = $_POST['oldPassword'];
		$newPassword = $_POST['newPassword'];
		$select = mysqli_query($connect,"select * from admin where user_id='$_SESSION[id]'");
		$fetch = mysqli_fetch_object($select);
		$prePassword = $fetch-> password;
		if($prePassword==$oldPassword){
			$update=mysqli_query($connect,"update admin set password='$newPassword' where user_id='$_SESSION[id]'");
			echo"<script>alert('Password Changed Successfully.')</script>";
			header('location:login.php');
		}
		else{
			echo"<script>alert('Old Password does not match.')</script>";
		}
	}
?>

<script>
	function confirmpassword(){
		var newPassword = document.changePasswordForm.newPassword.value;
		var confirmPassword = document.changePasswordForm.confirmPassword.value;
		if(!newPassword.match(confirmPassword)){
			document.changePasswordForm.confirmPassword.style.border="solid red 3px";
			document.changePasswordForm.confirmPassword.value="";
			document.changePasswordForm.confirmPassword.focus();
			//document.changePasswordForm.confirmPassword.title="Enter the same above password";	
			return false;
		}
		else{
			document.changePasswordForm.confirmPassword.style.border="solid green 3px";
		}	
		return true;
	}
</script>

<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Change Password</h2>
				</div><br/>
				<form method="post" name="changePasswordForm" >
					<input type="password" name="oldPassword" value="" placeholder="Old Password" required />
					<input type="password" name="newPassword" value="" placeholder="New Password" required />
					<input type="password" name="confirmPassword" value="" placeholder="Confirm Password" required onBlur="confirmpassword()" /><br/><br/>
					<input type="submit" name="submit" value="Update" />
				</form>
			</div>

<?php
include('footer.php');
?>