<?php
	include('header.php');
	include('conn.php');
	$id = $_GET['id'];
	$select = mysqli_query($connect,"select * from products where product_id='$id'");
	$fetch = mysqli_fetch_object($select);
?>

<script>

	 $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
        	$(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
</script>
<div class="container-fluid" style="margin-top : 50px;">
	<div class="row">
		<div class="col-md-5">
			<img src="Admin/images/<?php echo $fetch->image; ?>" alt="phone" class="img-responsive" height="" width=""/>
			<div class="text-center" style="color : #66ccff;"><?php echo $fetch->productName; ?></div>
		</div>
		<div class="col-md-7">
			<h3 style="color : #66ccff;line-height : 35px; letter-spacing : 1px;"> <?php echo $fetch->productName; ?> </h3>
			<ul class="nav nav-tabs nav-justified text-center">
				<li class="active wl-custom-tab">
					<a  href="#1" data-toggle="tab" class="wl-custom-list"><i class="fa fa-list fa-lg" aria-hidden="true"></i><br>Key Specifications</a>
				</li>
				<li class="wl-custom-tab">
					<a href="#2" data-toggle="tab" class="wl-custom-list"><i class="fa fa-file-text fa-lg" aria-hidden="true"></i><br>Full Details</a>
				</li>
				<li class="wl-custom-tab">
					<a href="#3" data-toggle="tab" class="wl-custom-list"><i class="fa fa-percent fa-lg" aria-hidden="true"></i><br>Offers</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="1">
					<h4 class="wl-tab-heading" style="line-height : 35px;"> Some Key Features </h4>
					<ul type="none">
						<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> <?php echo $fetch->size  ;?> LCD IPS display
						<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> <?php echo $fetch->processor; ?> Processor 
						<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> <?php echo $fetch->ram; ?> RAM <?php echo $fetch->storage; ?> ROM
						<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> 3000 mAh Battery
						<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> Android Os Latest Version Compatible 
					</ul>
					<a href="#2" data-toggle="tab"><button type="submit" class="btn wl-tab-button"> More Detail </button></a>
					<button type="submit" class="btn wl-tab-button" onclick="window.location.href='checkout.php?id=<?php echo $fetch->product_id?>'" > Buy Now </button>
				</div>
				<div class="tab-pane fade" id="2">
					<h4 class="wl-tab-heading" style="line-height : 35px;"> Full Specifications of Phone </h4>
					<h5 style="font-weight : bold;"> Display </h5>
					<div class="wl-custom-list-2">
						<span> Resolution </span>
						<span style="float : right;"> 1280*720 HD </span>
					</div>
					<div class="wl-custom-list-2">
						<span> Protection </span>
						<span style="float : right;"> Corning Gorilla Glass </span>
					</div>
					<div class="wl-custom-list-2">
						<span> TouchScreen  </span>
						<span style="float : right;"> Yes , Multitouch  </span>
					</div>
					<h5 style="font-weight : bold;"> In the Box </h5>
					<div class="wl-custom-list-2">
						<span> Standard Earphones,User Guide,Adapter,USB Cable, Warranty Card </span>
					</div>
					<h5 style="font-weight : bold;"> Camera </h5>
					<div class="wl-custom-list-2">
						<span> Front Camera </span>
						<span style="float : right;"> 5MP Camera </span>
					</div>
					<div class="wl-custom-list-2">
						<span> Rear Camera </span>
						<span style="float : right;"> 12MP camera </span>
					</div>
					<div class="wl-custom-list-2">
						<span> Video Recording </span>
						<span style="float : right;"> HD Recording </span>
					</div>
					<div class="wl-custom-list-2">
						<span> Other Camera Features </span>
						<span style="float : right;"> Panaroma Mode,Auto face Detection,Smiling mode,Auto Focusing, </span>
					</div>
					<h5 style="font-weight : bold;"> Processor </h5>
					<div class="wl-custom-list-2">
						<span> Processor Name </span>
						<span style="float : right;"> <?php echo $fetch->processor; ?> </span>
					</div>
					<h5 style="font-weight : bold;"> Storage </h5>
					<div class="wl-custom-list-2">
						<span> Ram </span>
						<span style="float : right;"> <?php echo $fetch->ram; ?> </span>
					</div>
					<div class="wl-custom-list-2">
						<span> Internal Storage </span>
						<span style="float : right;"> <?php echo $fetch->storage; ?> Expandable Upto 128GB via Dedicated SD Card Slot. </span>
					</div>
					<button type="submit" class="btn wl-tab-button" onclick="window.location.href='checkout.php?id=<?php echo $fetch->product_id?>'">Buy Now </button> 
				</div>
				<div class="tab-pane fade" id="3">
					<h4 class="wl-tab-heading" style="line-height : 35px;"> Bank Offers</h4>
					<ul type="none">
					<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> 10% Off On Credit/Debit Card.
					<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> 15Z% off on DBS Bank.
					<li class="wl-custom-list-2"><i class="fa fa-star" aria-hidden="true" style="color : #66ccff;"></i> Exchange Offer Upto 1000 Offer.
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- tabs end -->
<hr>
<!-- accordians -->
<div class="container">
	<h3 style="color : #66ccff;line-height : 35px;"> Frequently Asked Questions (FAQ's)</h3>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				Is this Phone Is volte enabled or not?</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse in">
			<div class="panel-body">Yes this phone is volte enabled.</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					Hybrid Sim slot Or not and support Quick Charging or not?</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">No users can inserts two sim cards and one memory card and it doesnot support Quick charging.</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					Otg Support or not?</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">Yes It Support Otg Cable.</div>
			</div>
		</div>
	</div>
</div>	
<!-- Icons Sections -->
<div class="container-fluid">
	<div class="row text-center">
		<div class="col-md-3">
			<div class="wl-subsection-1" style="border-right : 2px solid #eee;">
				<i class="fa fa-refresh fa-3x wl-custom-icon-2" aria-hidden="true"></i>
				<h4 class="wl-heading-4">Easy Returns And Replacement</h4>
				<p class="wl-para-2"> If There is any defect in the product than Give You The Opportunity to replace and  Return Products in 30 Days from The date of Purchase </p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="wl-subsection-1" style="border-right : 2px solid #eee;">
				<i class="fa fa-inr fa-3x wl-custom-icon-2" aria-hidden="true"></i>
				<h4 class="wl-heading-4">Hassle Free And Secure Payments</h4>
				<p class="wl-para-2"> We use 128Bit Secure Encryption So the money Is safe there is no risk Of hackers.</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="wl-subsection-1" style="border-right : 2px solid #eee; height :30%;">
				<i class="fa fa-headphones fa-3x wl-custom-icon-2" aria-hidden="true"></i>
				<h4 class="wl-heading-4">24*7 Customer Service </h4>
				<p class="wl-para-2">We Provide You The 24*7 Customer Service.</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="wl-subsection-1">
				<i class="fa fa-thumbs-o-up fa-3x wl-custom-icon-2" aria-hidden="true"></i>
				<h4 class="wl-heading-4">Genuine And Original Products </h4>
				<p class="wl-para-2"> The Product we Give you is 100% Original Genuine and authenticate. </p>
			</div>
		</div>
	</div>
</div>
<hr>
<?php
	include('footer.php');
?>