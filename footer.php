<?php
	if(isset($_GET['submit'])){
		echo $email = $_GET['email'];
		if($email==""){
			echo"<script>alert('Enter a valid email')</script>";
		}
		else{
			echo"<script>alert('Subscription Successfull !!')</script>";
		}
	}
?>

<div class="container-fluid">
	<div class="row" style="background : #f6f6f6; ">
	<h2 class="wl-heading-2 text-center"> 
		<span>About us</span> 
	</h2>
			<div class="col-md-3">
				<div class="wl-section-2">
					<h4 style="font-weight : bold;">Mission</h4>
					<p>We Provide the best match Product to your needs and requirement and We assure the best Quality product.      
					Our Comapny find the best local providers which provides the best products for you.
					Easy replacement and return policy.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wl-section-2">
				<h4 style="font-weight : bold;">Services </h4>
					<p><a href="viewCatMob.php" class="wl-custom-link-1"> Mobiles </a></p>
					<p><a href="viewCatLap.php" class="wl-custom-link-1"> Laptops </a></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wl-section-2">
					<h4 style="font-weight : bold;">Owners</h4>
					<p> Anil <br> +918901239977 <br> Faridabad</p>
					<p> Rishabh <br> +918587008852 <br>Faridabad </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wl-section-2">
					<h4 style="font-weight : bold;">Other Links</h4>
					<div style="margin-top : 20px;">
					<i class="fa fa-facebook-official fa-2x wl-custom-icon-1-1 wl-icon-padding" aria-hidden="true" title="Facebook" onclick="window.location.href='https://www.facebook.com/e/Market'"></i>
					<i class="fa fa-google-plus-official fa-2x wl-custom-icon-1-2 wl-icon-padding" aria-hidden="true" title="Google Plus" onclick="window.location.href='https://www.googleplus.com/e/Market/@1'"></i>
					<i class="fa fa-instagram fa-2x wl-custom-icon-1-3 wl-icon-padding" aria-hidden="true" title="Instagram" onclick="window.location.href='https://www.instagram.com/e/Market@1'"></i>
					<i class="fa fa-whatsapp fa-2x wl-custom-icon-1-4 wl-icon-padding" aria-hidden="true" title="WhatsApp" onclick="window.location.href='https://www.web.whatsapp.com/e/Market'"></i>
					</div>
				</div>
				<div class="input-group" style="margin-top : 20px;">
					<input type="text" Placeholder="Enter E-mail" class="form-control" name="email"/>
					<span class="input-group-btn" name="email">
					<button type="submit" class="btn btn-danger" title="Subscribe" name="submit"> Subscribe </button>
					</span>
				</div>
			</div>
		
	</div>
	<div class="row" style="background : #000; padding : 5px;">
		
			<p class="wl-copyright"> All Rights Reserved with © Ebazaar </p> 
		
		
	</div>
</div>
</body>
</html>