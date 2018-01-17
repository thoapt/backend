<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php include('../include/header.php');?>
	<?php include('../include/mysqli_connect.php');?>
	<?php include('../include/sidebar_admin.php');?>
	<?php 
		if($_SERVER['REQUEST_METHOD']== 'POST'){ // GIA TRi TON TAI, XU LI FORM	
	?>						
		<div id="content">
			<h2>Create a category </h2>
			<?php if(!empty($messages)) echo $messages;?>
			<form action="" id="login" method="post">
				<fieldset>
					<legend>Add a Page</legend>
					<div>
						<label for="page">Page Name: <span class="required">*</span></label>
						<input type="text" name="page_name" id="page_name" value="" size="20" maxlength="80" tabindex="1">
					</div>
					<div>
						<label for="category">All Categories: <span class="required">*</span></label>
						<select name="category">
							<option>Select Category</option>
						</select>
					</div>
					<div>
						<label for="position">Positon: <span class="required">*</span></label>
						<select name="position">
							<option>Select position</option>
						</select>
					</div>
					<div>
						<label for="page-content">Page content: <span class="required">*</span></label>
						<textarea name="content" cols="50" rows="20"></textarea>
					</div>
				</fieldset>
				<p><input type="submit" value="Add Page" name="submit"></p>
			</form>
		</div> <!-- end content-->
	<?php include('../include/sidebar_b.php');?>
	<?php include('../include/footer.php');?>
</body>
</html>