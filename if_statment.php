<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post">
		<select name="gender">
			<option>Giới tính</option>
			<option value="nu">Nữ</option>
			<option value="nam">Nam</option>
		</select>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
		if(isset($_POST['submit'])){
			// xu li form
			if($_POST['gender']=='nu'){
				echo "chao chi";
			} elseif ($_POST['gender']=='nam') {
				echo "chao anh";
			}else {
				echo "chao ban hien";
			}
		}
	?>
</body>
</html>