<?php
	include('conn.php');
	include('header.php');
	$id =mobiles;

?>
<!-- Carousel -->
<h3 class="wl-heading-3">Main Products</h3>

<hr>
<div class="container-fluid" style="background : black;">
	
	<div class="col-md-12">
		<div id="myCarousel-1" class="carousel slide" data-interval="3000" data-pause="null" data-ride="carousel">
				<!-- Indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
					<li data-target="#myCarousel" data-slide-to="6"></li>
				</ol> -->

				<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
				
						<img src="assets/images/samsung-galaxy-s8-20170329-25.jpg"  width="100%" class="img-responsive wl-custom-img" alt="phone3"/>
						<div class="carousel-caption">
							<h3>Samsung Galaxy S8</h3>
						</div>
			
				</div>
			<?php
				$select = mysqli_query($connect,"select * from products where category = '$id'");
				echo"Error".mysqli_error($connect);
				while($fetch = mysqli_fetch_object($select))
				{
					
			?>
				<div class="item">
						<img src="Admin/images/<?php echo $fetch->image; ?>"  width="100%" class="img-responsive wl-custom-img" alt="phone1"/>
						<div class="carousel-caption">
							<h3><?php echo $fetch->productName; ?></h3>
						</div>
					
				</div>
			<?php
				}
			?>
				
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel-1" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel-1" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<hr>
<div class="container-fluid">
	<h3 class="wl-heading-4"> Other Phones that you Should Buy that are afforadable.</h3>
	<?php
		$select = mysqli_query($connect,"select * from products where category = '$id'");
		while($fetch = mysqli_fetch_object($select))
		{
	?>
	<div class="media wl-custom-media">
		<div class="media-left">
			<img src="Admin/images/<?php echo $fetch->image; ?>" height="150" width="110" class="media-object" >
		</div>
		<div class="media-body">
			<span class="wl-buttons pull-right">
				<button type="submit" class="btn btn-info" title="Buy Now" onclick="window.location.href='checkout.php?id=<?php echo $fetch->product_id?>'" > Buy Now </button>
				<button type="submit" class="btn btn-info" title="More Details" onclick="window.location.href='details.php?id=<?php echo $fetch->product_id?>'"> More Details </button>
			</span>
			<h4 class="media-heading"><?php echo $fetch->productName; ?></h4>
			
			<p><?php echo $fetch->description; ?></p>
			<ul type="none">
				<li>Some Specification
				<li> <?php echo $fetch->size; ?> touch screen
				<li> <?php echo $fetch->ram; ?> RAM 
				<li> <?php echo $fetch->storage; ?> Internal Storage
				<li> <?php echo $fetch->brand; ?>
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


<?php
include('footer.php');
?>