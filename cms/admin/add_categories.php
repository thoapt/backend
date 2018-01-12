<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include('../include/header.php');?>
	<?php include('../include/mysqli_connect.php');?>
	<?php include('../include/sidebar_admin.php');?>
		<div id="content">
			<h2>Create a category </h2>
			<?php 
			if($_SERVER['REQUEST_METHOD']== 'POST'){ // GIA TRJ TON TAI, XU LI FORM
				$cat_name =$_POST['category'];
				$position=$_POST['position'];
				$q="INSERT INTO categories (user_id, cat_name, position) value (1,'{$cat_name}',$position)";
				$r = mysqli_query($dbc, $q) or die("Query {$q} \n <br> MySQL Error:" .mysqli_error($dbc));
				if(mysqli_affected_rows($dbc)==1){
					echo "<p>The category was added successfully</p>" ;
				} else {
					echo "<p>Could not added to the database due to a system error</p>";
				}
			}
			?>
			<form action="" id="add_cat" method="post">
				<fieldset>
					<legend>Add category</legend>
					<div>
						<label for="category">Category Name: <span class="required">*</span></label>
						<input type="text" name="category" id="category" value="" size="20" maxlength="80" tabindex="1">
					</div>
					<div>
						<label for="position">Position: <span class="required">*</span></label>
						<select name="position" tabindex="2">
							<option value="1">1</option>
						</select>
					</div>
				</fieldset>
				<p><input type="submit" name="submit" value="Add category"></p>
			</form>
		</div>
	<?php include('../include/sidebar_b.php');?>
	<?php include('../include/footer.php');?>
</body>
</html>