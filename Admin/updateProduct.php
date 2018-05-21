<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function($) {
	var list_target_id = 'brand';
	var list_target = 'storage';
	var list_select_id = 'category'; 
	var list_ram = 'ram';
	var list_size = 'size';
	var list_processor = 'processor';
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_target_id).html('<option value="">Loading...</option>');
        $.ajax({url: 'brand.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_target_id).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_target).html('<option value="">Loading...</option>');
        $.ajax({url: 'storage.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_target).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_ram).html('<option value="">Loading...</option>');
        $.ajax({url: 'ram.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_ram).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_size).html('<option value="">Loading...</option>');
        $.ajax({url: 'size.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_size).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_processor).html('<option value="">Loading...</option>');
        $.ajax({url: 'processor.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_processor).html(output);
        }
        });
    });
});
</script>

<?php 
	error_reporting(E_ALL^E_NOTICE);
	include('header.php');
	include('conn.php');
	 $id = $_GET['id'];
	if(isset($_POST['submit']))
	{
		$name =$_POST['name'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$pincode = $_POST['pincode'];
		$seller = $_POST['seller'];
		$brand = $_POST['brand'];
		$storage = $_POST['storage'];
		$processor = $_POST['processor'];
		$ram = $_POST['ram'];
		$size = $_POST['size'];
		$update=mysqli_query($connect,"update products set productName='$name', price='$price',description='$description',category='$category', pincode='$pincode', seller='$seller', brand='$brand', storage='$storage', processor='$processor', ram='$ram', size='$size' where product_id='$id'");
		if($update){
			header("location:products.php");
		}
		else{
			echo"<script>alert('ERROR')</script>".mysqli_error($connect);
		}		
	}
	
?>
<?php
	error_reporting(E_ALL^E_NOTICE);
	include('conn.php');
	$id = $_GET['id'];
	$select = mysqli_query($connect,"select * from products where product_id='$id'");
	$fetch = mysqli_fetch_object($select);

?>

<div class="main-grid">
<div class="agile-grids">	
	<!-- input-forms -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<h2>Update</h2>
		</div>
		<div class="panel panel-widget forms-panel">
			<div class="forms">
				<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
					<div class="form-title">
						<h4>Existing Product</h4>
					</div>
					<div class="form-body">
						<form action="" method="post" enctype=multipart/form-data> 
							<div class="form-group"> 
								<label for="exampleInputName2">Name</label> 
								<input type="text" name="name" value="<?php echo $fetch-> productName ?>" class="form-control" placeholder="Product name" autocomplete="off" required /> 
							</div> 
							<div class="form-group">
								<label for="exampleInputName2">Category</label>
								<div class="col-sm-20"><select name="category" id="category" class="form-control1">
								<option>-----Select Category-----</option>
								<?php
									$option = mysqli_query($connect,"select * from category");
									while($fetch_cat = mysqli_fetch_object($option))
									{
								?>
								<option value="<?php echo $fetch_cat->name; ?>"><?php echo $fetch_cat->name; ?></option>
								<?php
									}
								?>
								</select></div>
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">Seller Type</label>
								<div class="col-sm-20"><select name="seller" id="selector1" class="form-control1">
								<option>-----Seller Type-----</option>
								<option value="Individual">Individual</option>
								<option value="Shopkeeper">Shopkeeper</option>
								</select></div>
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">Brand</label>
								<div class="col-sm-20"><select name="brand" id="brand" class="form-control1 ">
								</select></div>
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">Display Size</label>
								<div class="col-sm-20"><select name="size" id="size" class="form-control1">
								</select></div> 
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">Processor</label>
								<div class="col-sm-20"><select name="processor" id="processor" class="form-control1">
								</select></div> 
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">Storage</label>
								<div class="col-sm-20"><select name="storage" id="storage" class="form-control1">
								</select></div> 
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">RAM</label>
								<div class="col-sm-20"><select name="ram" id="ram" class="form-control1">
								</select></div> 
							</div>
							<div class="form-group"> 
								<label for="exampleInputName2">Price</label> 
								<input type="numbers" name="price" value="<?php echo $fetch-> price ?>" class="form-control" placeholder="Price" autocomplete="off" required /> 
							</div> 
							<div class="form-group"> 
								<label for="exampleInputName2">Description</label> 
								<input type="text" name="description" class="form-control" id="exampleInputName2" value="<?php echo $fetch->description; ?>" placeholder="Product Description
								" autocomplete="off" required /> 
							</div> 
							<div class="form-group"> 
								<label for="exampleInputName2">Pincode</label> 
								<input type="numbers" name="pincode" value="<?php echo $fetch-> pincode; ?>" class="form-control" placeholder="Area Code" autocomplete="off" required />  
							<button type="submit" name="submit">Update</button> 
						</form> 
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