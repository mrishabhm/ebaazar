<?php 
	error_reporting(E_ALL^E_NOTICE);
	include('header.php');
	include('conn.php');
	if(isset ($_POST['submit']))
	{
		$categoryname = $_POST['categoryname'];
		$select = mysqli_query($connect,"select * from category where name = '$categoryname'");
		$count = mysqli_num_rows($select);
		if(count>=1){
			echo "<script>alert('Already exists in database.')</script>";
		}
		else{
			$insert = mysqli_query($connect,"insert into category(name) values ('$categoryname')");
		}
	
	}
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
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>All Categories</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-two widget-shadow">
								<div class="form-title">
									<h4>Add Category</h4>
								</div>
								<div class="form-body" data-example-id="simple-form-inline">
									<form class="form-inline" action="" method="post"> 
									<div class="form-group"> 
									<label for="exampleInputName2">Name</label> 
									<input type="text" name="categoryname" class="form-control" id="exampleInputName2" placeholder="Category Name"  autocomplete="off" required /> 
									</div>
									<button type="submit" class="btn btn-default w3ls-button" name="submit">Add</button> </form> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //input-forms -->
	<br/><br/>
	<!-- tables -->
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>Added Categories</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>S. No.</th>
							<th>Name</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							$select=mysqli_query($connect,"select * from category");
							$i=1;
							while($fetch_cat = mysqli_fetch_object($select))
							{
						?>
						  <tr>
						  <td><?php echo $i; ?></td>
							<td><?php echo $fetch_cat->name; ?></td>
						  </tr>
						  <?php
							$i++;
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