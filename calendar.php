<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
		$thang =array(
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
			12=>"Thang 12"
			);
		$ngay = range(1, 31);
		$nam = range(2012, 2030);
	?>
		<form action="" method="post">
		<select>
			<option>Chọn ngày</option>
			<?php
				function build_form($value){
					foreach ($value as $k=>$v){
				echo "<option value='{$k}'>".$v."</option>";
			}
				}
			?>
			<?php //foreach ($ngay as $k=>$v){
				//echo "<option value='{$k}'>".$v."</option>";
			//}
				build_form($ngay);
			?>
		</select>
		<select>
			<option>Chọn tháng</option>
			<?php //foreach ($thang as $k=>$v){
				//echo "<option value='{$k}'>".$v."</option>";
			//}
				build_form($thang);
			?>
		</select>
		<select>
			<option>Chọn năm</option>
			<?php //foreach ($nam as $k=>$v){
				//echo "<option value='{$k}'>".$v."</option>";
			//}
				build_form($nam);
			?>
		</select>
		</form>
		
	
</body>
</html>