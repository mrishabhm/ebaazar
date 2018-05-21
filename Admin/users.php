<?php
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
				<!-- tables -->
				<div class="agile-tables">
				 <h3>Registered Users </h3>
				  <table id="table-two-axis" class="two-axis">
					<thead>
					  <tr>
						<th>Name</th>
						<th>Id</th>
						<th>Address</th>
						<th>Mobile No.</th>
						<th>Email</th>
						<th>Products Added</th>
						<th>Remove</th>
					  </tr>
					</thead>
					<tbody>
					<?php
						$select = mysqli_query($connect,"select * from users");
						while($fetch = mysqli_fetch_object($select))
						{
					?>
					  <tr>
						<td><?php echo $fetch->name; ?></td>
						<td><?php echo $fetch->user_id; ?></td>
						<td><?php echo $fetch->address; ?></td>
						<td><?php echo $fetch->mobile; ?></td>
						<td><?php echo $fetch->email; ?></td>
						<td><?php 
									$id = $fetch->user_id;
									$pSelect = mysqli_query($connect, "select product_id from products where user_id = '$id'");
									echo $count = mysqli_num_rows($pSelect);						
						?></td>
						<td class="td-actions"><a href="deleteUser.php?id=<?php echo $fetch->user_id; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
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