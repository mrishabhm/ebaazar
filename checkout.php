<?php
	include('header.php');
	include('conn.php');
	$id = $_GET['id'];
	$select = mysqli_query($connect,"select * from products where product_id='$id'");
	$fetch = mysqli_fetch_object($select);
	
?>
<?php
		if($_SESSION['username']==""){
			header('location:login.php');
			}
	?>
<div class="container-fluid" style="margin-top : 45px;">
	<div class="row">
		<h3> <marquee style="background : #66ccff;padding : 10px;color : #003399;">You Are Ready To checkout the listed item Please Select Appropriate payment Option for Checkout.</marquee> </h3>
		<div class="media">
			<div class="media-left ">
				<img src="Admin/images/<?php echo $fetch->image; ?>" class="media-object " height="50%" width="500">
			</div>
			<div class="media-body wl-custom-media-1">
				<h3 class="media-heading" style=""><?php echo $fetch->productName; ?></h3>
				<p style="font-size : 18px;"> You have select <?php echo $fetch->productName; ?> to Buy.</p>
				<ul type="none" class="wl-custom-list-3">
					<li ><i class="fa fa-cog fa-lg wl-custom-icon-3" aria-hidden="true"></i>Things included in this deal:
					<li><i class="fa fa-cog fa-lg wl-custom-icon-3" aria-hidden="true"></i>  10% off on SBI Debit/Credit Card.
					<li><i class="fa fa-cog fa-lg wl-custom-icon-3" aria-hidden="true"></i>  10GB Additional Data On the BSNL network for 6 months.
					<li><i class="fa fa-cog fa-lg wl-custom-icon-3" aria-hidden="true"></i>  BSNL Sim Included in packet of phone Which Is company prmotional offers.
				</ul>
				<div class="wl-buttons-2"><button type="submit" class="btn  wl-custom-button-3" onclick="window.location.href='#personaldetail'" >Buy Now</button>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<!-- Form for Personal Detail -->
<div id="personaldetail">
<div class="container-fluid wl-custom-container-2">
	<form style="margin-top : 50px;">
		<fieldset>
			<legend class="text-center" style="font-size : 22px;"> Fill Your Personal Details. </legend>
			<div class="row" style="padding: 10px;margin: 10px;">
				<div class="col-md-4">
					<input type="text" placeholder="First Name" class="form-control">
				</div>
				<div class="col-md-4">
					<input type="text" placeholder="Middle name" class="form-control">
				</div>
				<div class="col-md-4">
					<input type="text" placeholder="Last Name" class="form-control">
				</div>
			</div>
			<div class="row" style="padding: 10px;margin: 10px;">
				<div class="col-md-4">
					<select class="form-control">
						<option>Select State</option>
						<option>Haryana</option>
						<option>Delhi/NCR</option>
						<option>Uttar Pradesh</option>
						<option>Himachal Pradesh</option>
						<option>Punjab</option>
						<option>Chandigarh</option>
					</select>
				</div>
				<div class="col-md-4">
					<input type="text" placeholder="District Name" class="form-control">
				</div>
				<div class="col-md-4">
					<input type="number" placeholder="Zip code / Pin Code" class="form-control">
				</div>
			</div>
			<div class="row" style="padding: 10px;margin: 10px;">
				<div class="col-md-12">
					<textarea  class="form-control"  placeholder="Enter Your Address" ></textarea>
				</div>
			</div>
			<div class="row"style="padding: 10px;margin: 10px;">
			<div class="col-md-4">
				<input type="number" class="form-control" placeholder="Mobile Number"/>
			</div>
			<div class="col-md-4">
				<input type="number" class="form-control" placeholder="<?php echo'₹'.$fetch->price; ?>" disabled />
			</div>
			</div>
			
			<button onclick="window.location.href='#payment'" type="submit" class="btn wl-custom-button-3" style="margin : 0 auto;display : block;" title="Pay">Proceed to Payment</button>
		</fieldset>
	</form>
	
</div>
</div>
<hr>
<!-- accordians -->
<div id="payment">
<div class="container-fluid">
	<h3 style="line-height : 35px;margin-top : 65px;font-size : 22px;" class="wl-heading-5 text-center"> Payment Options</h3>
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						Debit Cards/Credit Cards</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
						<div class="col-md-3"><a href="#" target="blank"><img src="assets/images/visa.png" class="img-responsive wl-custom-image" title="Payments Via Visa Card" height="100" width="100"/></a></div>
						<div class="col-md-3"><a href="#" target="blank"><img src="assets/images/mastercard.png" class="img-responsive wl-custom-image" title="Payments Via Master Card" height="100" width="100"/></a></div>
						<div class="col-md-3"><a href="#" target="blank"><img src="assets/images/mastercard (1).png" class="img-responsive wl-custom-image" title="Payments Via Maestro Card" height="100" width="100"/></a></div>
						<div class="col-md-3"><a href="#" target="blank"><img src="assets/images/Rupay_credit_debit_card_bank_transaction-512.png" class="img-responsive wl-custom-image" title="Payments Via Rupay Card" height="100" width="100"/></a></div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
						Wallets</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="col-md-3"><a href="#" target="blank"><img src="assets/images/paytm_icon-icons.com_62731.png" class="img-responsive wl-custom-image" title="Payments Via Visa Card" height="100" width="100"/></a></div>
						<div class="col-md-3"><a href="#" target="blank"><img src="assets/images/mobikwik_logo.png" class="img-responsive wl-custom-image" title="Payments Via Master Card" height="100" width="100"/></a></div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
						UPI Payments/COD</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="row">
							<div class="col-md-1"><p>Enter VPA:</p></div><div class="col-md-8"><input type="text" class="form-control" placeholder="Enter the VPA:"/></div>
							</div>
							<div class="row" style="padding : 10px;">
							
							<div class="col-md-4"><a href="#" target="blank"><img src="assets/images/bhim.png" class="img-responsive wl-custom-image" title="BHIM UPI" height="100" width="100"/></a></div>
							<div class="col-md-4"><a href="#" target="blank"><img src="assets/images/PhonePe icon.png" class="img-responsive wl-custom-image" title="PhonePe UPI" height="100" width="100"/></a></div>
							<div class="col-md-4"><a href="#" target="blank"><img src="assets/images/tezupi.png" class="img-responsive wl-custom-image" title="TEZ UPI" height="100" width="100"/></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
</div>

<?php
	include('footer.php');
?>