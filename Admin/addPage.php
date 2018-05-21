<?php 
	error_reporting(E_ALL^E_NOTICE);
	include('header.php');
	include('conn.php');
	if(isset($_POST['submit'])){
		$pagename = $_POST['PageName'];
		$pagetitle = $_POST['title'];
		$image_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$src = "images/".$image_name;
		move_uploaded_file($tmp_name,$src);
		$description = $_POST['Desc'];
		$insert = mysqli_query($connect,"insert into cms(page_name, page_title, page_image, description) values ('$pagename','$pagetitle','$image_name','$description')");
		if($insert){
			header('location:index.php');
		}
		else{
			echo"ERRORR!!".mysqli_error($connect);
		}
  		
	}
 ?>
	<form method="POST" action="" enctype=multipart/form-data>
		<label for="pageId">Page Id:</label>
		<input type="number" name="id" id="pageId" placeholder="Page Id "><br/>
		<label for="pageName">Page Name: </label>
		<input type="text" name="PageName" id="pageName" placeholder="Page Name " required><br/>
		<label for="pageTitle">Page Title: </label>
		<input type="text" name="title" id="pageTitle" placeholder="Page Title" required><br/>
		<label for="image"> Page Image</label>
		<input type="file" id="image" name="image" required><br/>
		<label for="desc">Description</label>
		<input type="text" name="Desc" id="desc" placeholder="Description of the Page" required><br/>
		<p>Select the Order in which you want to display?
		<select name="order">
			<option>.......Select......</option>
			<?php  
				$i = 1;
				while($i<101){
			?>
			<option value="<?php echo $i; ?>"><?php echo $i ?></option>
			<?php 
				}
			?>
		</select>
		</p>
		<button  type="submit" name="submit">Submit</button>
	</form>
<?php
	include('footer.php');
?>