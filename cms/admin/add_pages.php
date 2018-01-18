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
			// GIA TRi TON TAI, XU LI FORM
			if($_SERVER['REQUEST_METHOD']== 'POST')
			{
				$errors= array();
				if(empty($_POST['page_name'])){
					$errors[]='page_name';
				}else{
					$page_name = mysqli_real_escape_string($dbc,strip_tags($_POST['page_name']));
				}
				if(isset($_POST['category']) && filter_var($_POST['category'], FILTER_VALIDATE_INT, array('min_range'=>1))){
					$cat_id=$_POST['category'];
				}else{
					$errors[]= "category";
				}
				if(isset($_POST['position']) && filter_var($_POST['position'], FILTER_VALIDATE_INT, array('min_range'=>1))){
						$position=$_POST['position'];
				}else{
					$errors[]= "position";
				}
				if(empty($_POST['content'])){
					$errors[]='content';
				}else{
					$content=mysqli_real_escape_string($dbc,$_POST['content']);
				}
				// neu k co loi xay ra bat dau chen du lieu vao BD
				if(empty($errors))
				{
					$q= "insert into pages (user_id,cat_id ,page_name,content, position, post_on) value(1, {$cat_id}, '{$page_name}', '{$content}',$position, now()) ";
					$r= mysqli_query($dbc, $q) or die("Query {$q} \n <br> MySQL Error:" .mysqli_error($dbc)); // ordie: bao loi ket noi sql fail
					if(mysqli_affected_rows($dbc)== 1)
					{
						$messages="<p class= 'success'>The page was added successfully.</p>";
					} 
					else 
					{
						$messages = "<p class= 'warning'>The page could not be added due to a system error.</p>";
					} 
				}
				else
				{
					$messages="<p class= 'warning'>Please fill in all the required fields.</p>";
				}
			}//End if for POST SERVER
		?>						
		<div id="content">
			<h2>Add new page</h2>
			<?php if(!empty($messages)) echo $messages;?>
			<form action="add_pages.php" id="login" method="post">
				<fieldset>
					<legend>Add a Page</legend>
					<div>
						<label for="page">Page Name: <span class="required">*</span>

							<?php
								if(isset($errors) && in_array('page_name', $errors)){
									echo "<p class='warning'>Please fill in the page name</p>";
								}
							?>
						</label>
						<input type="text" name="page_name" id="page_name" value="<?php if(isset($_POST['page_name'])) echo strip_tags($_POST['page_name']);?>" size="20" maxlength="80" tabindex="1">
					</div>
					<div>
						<label for="category">All Categories: <span class="required">*</span>
							<?php
								if(isset($errors) && in_array('category', $errors)){
									echo "<p class='warning'>Please fill in the category name</p>";
								}
							?>
						</label>
						<select name="category">
							<option>Select Category</option>
							<?php
								$q= "select cat_id, cat_name from Categories order by position";
								$r = mysqli_query($dbc, $q);
								if(mysqli_num_rows($r)>0){
									while ($cats= mysqli_fetch_array($r, MYSQLI_NUM)) {
										echo "<option value='{$cats[0]}'";
											if(isset($_POST['category'])&& $_POST['category']==$cats[0])
												echo "selected='selected'";
										echo ">".$cats[1]."</option>";
									}
								}
							?>
						</select>
					</div>
					<div>
						<label for="position">Positon: <span class="required">*</span>
														<?php
								if(isset($errors) && in_array('position', $errors)){
									echo "<p class='warning'>Please fill in the position</p>";
								}
							?>
						</label>
						<select name="position">
							<?php 
								$q= "select count(page_id) as count from pages";
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
					<div>
						<label for="page-content">Page content: <span class="required">*</span>
							<?php
								if(isset($errors) && in_array('content', $errors)){
									echo "<p class='warning'>Please fill in the content</p>";
								}
							?>

						</label>
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