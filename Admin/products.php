<?php 
	error_reporting(E_ALL^E_NOTICE);
	include('header.php');
	include('conn.php');
?>

<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>	
			
<div class="main-grid">
			<div class="agile-grids">
<br/>
	<!-- tables -->
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>Products</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>Id</th>
							<th>Name</th>
							<th>Category</th>
							<th>Seller Type</th>
							<th>Brand</th>
							<th>Price</th>
							<th>Storage</th>
							<th>RAM</th>
							<th>Processor</th>
							<th>Size</th>
							<th>Pincode</th>
							<th>Image</th>
							<th>Modify</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							$select = mysqli_query($connect,"select * from products");
							while($fetch = mysqli_fetch_object($select))
							{
						?>
						  <tr>
						  <td><?php echo $fetch->product_id; ?></td>
							<td><?php echo $fetch->productName; ?></td>
							<td><?php echo $fetch->category; ?></td>
							<td><?php echo $fetch->seller; ?></td>
							<td><?php echo $fetch->brand; ?></td>
							<td>₹<?php echo $fetch->price; ?></td>
							<td><?php echo $fetch->storage; ?></td>
							<td><?php echo $fetch->ram; ?></td>
							<td><?php echo $fetch->processor; ?></td>
							<td><?php echo $fetch->size; ?></td>
							<td><?php echo $fetch->pincode; ?></td>
							<td><img src="images/<?php echo $fetch->image; ?>" width="70" height="90"></td>
							<td class="td-actions"><a href="updateProduct.php?id=<?php echo$fetch->product_id;  ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="deleteProduct.php?id=<?php echo $fetch->product_id;  ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
						  </tr>
						  <?php
							}
						  ?>
						</tbody>
					  </table>
					</div>
				<!-- //tables -->
			</div>
		</div>
<?php 
include('footer.php');
?>