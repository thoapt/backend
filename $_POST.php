<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="GET.php?id=2&name=cong">go to get</a>
	<?php
	if (isset($_POST['submit'])) {
		echo "<pre>";
			print_r($_POST);
		echo "</pre>";
		$ngay = $_POST['ngay'];
		$thang = $_POST['thang'];
		$nam = $_POST['nam'];
		$gender = $_POST['gender'];
		$hidden = $_POST['hidden'];
		echo " ngay hom nay la ngay {$ngay},$thang, $nam ban co gioi tinh la $gender . cai nay ban khong can biet la hidden $hidden} ";

	}
	?>
	<?php
		$thang = array(
			1=>"Thang 1",
			2=>"Thang 2",
			3=>"Thang 3",
			4=>"Thang 4",
			5=>"Thang 5",
			6=>"Thang 6",
			7=>"Thang 7",
			8=>"Thang 8",
			9=>"Thang 9",
			10=>"Thang 10",
			11=>"Thang 11",
			12=>"Thang 12",
			);
		$ngay=range(1, 31);
		$nam=range(2012, 2030);
	?>
	<form action="" method="post">
		<select name="ngay">
			<option>Chon ngay</option>
			<?php
				foreach ($ngay as $k => $v) {
					echo "<option value='{$k}'>".$v."</option>";
				}
			?>
		</select>
		<select name="thang">
			<option>Chon thang</option>
			<?php
				foreach ($thang as $k => $v) {
					echo "<option value='{$k}'>".$v."</option>";
				}
			?>
		</select>
		<select name="nam">
			<option>Chon nam</option>
			<?php
				foreach ($nam as $k => $v) {
					echo "<option value='{$k}'>".$v."</option>";
				}
			?>
		</select>
		<select name="gender">
			<option>Gioi tinh</option>
			<option value="nu">nu</option>
			<option value="nam">nam</option>
		</select>
		<input type="submit" name="submit" value="submit">
		<input type="hidden" name="hidden" value="id=1">
	</form>
</body>
</html>