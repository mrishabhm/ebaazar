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
        $.ajax({url: 'Admin/brand.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_target_id).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_target).html('<option value="">Loading...</option>');
        $.ajax({url: 'Admin/storage.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_target).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_ram).html('<option value="">Loading...</option>');
        $.ajax({url: 'Admin/ram.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_ram).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_size).html('<option value="">Loading...</option>');
        $.ajax({url: 'Admin/size.php?svalue='+selectvalue,
        success: function(output) {
        //alert(output);
        $('#'+list_size).html(output);
        }
        });
    });
	$('#'+list_select_id).change(function(e) {
		var selectvalue = $(this).val();
		$('#'+list_processor).html('<option value="">Loading...</option>');
        $.ajax({url: 'Admin/processor.php?svalue='+selectvalue,
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
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$pincode = $_POST['pincode'];
		$seller = $_POST['seller'];
		$category = $_POST['category'];
		$brand = $_POST['brand'];
		$storage = $_POST['storage'];
		$ram = $_POST['ram'];
		$size = $_POST['size'];
		$processor = $_POST['processor'];
		$image_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$src = "Admin/images/".$image_name;
		move_uploaded_file($tmp_name,$src);
		$insert=mysqli_query($connect,"insert into products(productName, price, user_id , description, category, image, pincode, seller , brand, storage, ram, size, processor) values('$name','$price','$_SESSION[idUser]','$description','$category','$image_name','$pincode','$seller', '$brand','$storage','$ram','$size','$processor')");
		if($insert){
			header('location:products.php');
		}
		else{
			echo "Error encountered .".mysqli_error($connect);
		}
				
	}
?>




<div class="main-grid">
<div class="agile-grids">	
	<!-- input-forms -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<h2>Add</h2>
		</div>
		<div class="panel panel-widget forms-panel">
			<div class="forms">
				<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
					<div class="form-title">
						<h4>New Product</h4>
					</div>
					<div class="form-body">
						<form action="" method="post" enctype=multipart/form-data> 
							<div class="form-group"> 
								<label for="exampleInputName2">Name</label> 
								<input type="text" name="name" class="form-control" placeholder="Product name" autocomplete="off" required /> 
							</div> 
							<div class="form-group"> 
								<label for="exampleInputName2">Category</label>
								<div class="col-sm-20"><select name="category" id="category" class="form-control1">
								<option>-----Select Category-----</option>
								<?php
									$option = mysqli_query($connect,"select * from category");
									while($fetch = mysqli_fetch_object($option))
									{
								?>
								<option value="<?php echo $fetch->name; ?>"><?php echo $fetch->name; ?></option>
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
								<input type="numbers" name="price" class="form-control" placeholder="Price" autocomplete="off" required /> 
							</div> 
							<div class="form-group"> 
								<label for="exampleInputName2">Description</label> 
								<input type="text" name="description" class="form-control" id="exampleInputName2" placeholder="Product Description
								" autocomplete="off" required /> 
							</div> 
							<div class="form-group"> 
								<label for="exampleInputName2">Pincode</label> 
								<input type="numbers" name="pincode" class="form-control" placeholder="Area Code" autocomplete="off" required /> 
							</div> 
								<label for="exampleInputFile">File input</label> 
								<input type="file" name="image" required /> 
							</div> 
							<button type="submit" name="submit">Add</button> 
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