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
			<?php 
			if($_SERVER['REQUEST_METHOD']== 'POST'){ // GIA TRi TON TAI, XU LI FORM
				$errors = array();
				if(empty($_POST['category'])){
					$errors[]= "category";
				}else{
					// them lenh escape de nguoi dung khi nhap text kieu nhu: drop database izcms thi k bi xoa du lieu
					// strip-tag: loai bo gia tri html, chi lay gia tri text:
					$cat_name = mysqli_real_escape_string($dbc,strip_tags($_POST['category'])); 
				}
				if(isset($_POST['position']) && filter_var($_POST['position'], FILTER_VALIDATE_INT, array('min_range'=>1))){
					$position=$_POST['position'];
				} else{
					$errors[]= "position";
				}
				if(empty($errors)){
					// neu k co loi xay ra thi luu vao du lieu
				$q="INSERT INTO categories (user_id, cat_name, position) value (1,'{$cat_name}',$position)";
				$r = mysqli_query($dbc, $q) or die("Query {$q} \n <br> MySQL Error:" .mysqli_error($dbc));
				if(mysqli_affected_rows($dbc)==1){
					$messages = "<p>The category was added successfully</p>" ;
				} else {
					$messages = "<p>Could not added to the database due to a system error</p>";
				}
				} else{
					$messages = "Please fill all the required fiellds";
				}
			}
			?>
			<div id="content">
			<h2>Create a category </h2>
			<?php 
				if (isset($messages))  {
					echo $messages;
				}
			?>

			<form action="" id="add_cat" method="post">
				<fieldset>
					<legend>Add category</legend>
					<div>
						<label for="category">Category Name: <span class="required">*</span>

							<?php
								if(isset($errors) && in_array('category', $errors)){
									echo "<p class='warning'>Please fill in the category name</p>";
								}
							?>

						</label>
						<input type="text" name="category" id="category" value="<?php if(isset($_POST['category'])) echo strip_tags($_POST['category']); ?>" size="20" maxlength="80" tabindex="1">
					</div>
					<div>
						<label for="position">Position: <span class="required">*</span>
							<?php
								if(isset($errors) && in_array('position', $errors)){
									echo "<p class='warning'>Please pick position</p>";
								}
							?>
						</label>
						<select name="position" tabindex="2">
							<?php 
								$q= "select count(cat_id) as count from categories";
								$r = mysqli_query($dbc, $q) or die("Query {$q} \n<br> My SQL Error:" .mysqli_error($dbc));
								if(mysqli_num_rows($r)==1){
									list($num)=mysqli_fetch_array($r, MYSQLI_NUM);
									for($i=1; $i<=$num+1;$i++)
									// tao vong lap for de tao option c ong them 1 gia tri
									{ 
										echo "<option value ='{$i}'";
										if(isset($_POST['position']) && $_POST['position'] == $i) echo "selected='selected'";
										echo ">".$i."</option>";
									}
								}
							?>
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