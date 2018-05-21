<?php
	include('conn.php');
	include('header.php');
	$id = $_GET['id'];

?>

<!-- Carousel -->
<h3 class="wl-heading-3">Products You searched for</h3>
<hr>
<div class="container-fluid">
	<h3 class="wl-heading-4"> Products in your nearest Area.</h3>
	<?php
		$select = mysqli_query($connect,"select * from products where pincode = '$id'");
		while($fetch = mysqli_fetch_object($select))
		{
	?>
	<div class="media wl-custom-media">
		<div class="media-left">
			<img src="Admin/images/<?php echo $fetch->image; ?>" height="150" width="110" class="media-object" >
		</div>
		<div class="media-body">
			<span class="wl-buttons pull-right">
				<button type="submit" class="btn btn-info" title="Buy Now" > Buy Now </button>
				<button type="submit" class="btn btn-info" title="More Details" onclick="window.location.href='details.php?id=<?php echo $fetch->product_id?>'"> More Details </button>
			</span>
			<h4 class="media-heading"><?php echo $fetch->productName; ?></h4>
			
			<p><?php echo $fetch->description; ?></p>
			<ul type="none">
				<li>Some Specification
				<li> <?php echo $fetch->size; ?> touch screen
				<li> <?php echo $fetch->ram; ?> RAM 
				<li> <?php echo $fetch->storage; ?> Internal Storage
				<li> Brand: <?php echo $fetch->brand; ?>
				<li> <?php echo $fetch->processor; ?> Processor
				<li> Seller Type: <?php echo $fetch->seller; ?>
				<span class="pull-right wl-price"> ₹ <?php echo $fetch->price; ?> </span>
			</ul>
	
		</div>
	</div>
	<?php
		}
	?>
	
	
	
</div>


<!-- footer -->
<div class="container-fluid">
	<div class="row" style="background : #f6f6f6; ">
	<h2 class="wl-heading-2 text-center"> 
		<span>Contact Us/Our Services/About US</span> 
	</h2>
			<div class="col-md-3">
				<div class="wl-section-2">
					<h4 style="font-weight : bold;">About Company/Mission</h4>
					<p>We Provide The best match Product of Your Needs And requirement and We assure the best Quality product.
					Our Comapny find The best local host That Provide the best Products for You.
					Easy replacement And return And provide best Service after sell.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wl-section-2">
				<h4 style="font-weight : bold;">Services / Products</h4>
					<p><a href="#" class="wl-custom-link-1"> Mobiles </a></p>
					<p><a href="#" class="wl-custom-link-1"> laptop </a></p>
					<p><a href="#" class="wl-custom-link-1"> Mobiles </a></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wl-section-2">
					<h4 style="font-weight : bold;">About Owner</h4>
					<p> Anil <br> +918901239977 <br> bdjdb</p>
					<p> Rishabh <br> +917206444297 <br>sbfjdsf </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wl-section-2">
					<h4 style="font-weight : bold;">Social Links</h4>
					<div style="margin-top : 20px;">
					<i class="fa fa-facebook-official fa-2x wl-custom-icon-1-1 wl-icon-padding" aria-hidden="true" title="Facebook"></i>
					<i class="fa fa-google-plus-official fa-2x wl-custom-icon-1-2 wl-icon-padding" aria-hidden="true" title="Google Plus"></i>
					<i class="fa fa-instagram fa-2x wl-custom-icon-1-3 wl-icon-padding" aria-hidden="true" title="Instagram"></i>
					<i class="fa fa-whatsapp fa-2x wl-custom-icon-1-4 wl-icon-padding" aria-hidden="true" title="WhatsApp"></i>
					</div>
				</div>
				<div class="input-group" style="margin-top : 20px;">
					<input type="text" Placeholder="Enter E-mail" class="form-control"/>
					<span class="input-group-btn">
					<button type="submit" class="btn btn-danger" title="Subscribe"> Subscribe </button>
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