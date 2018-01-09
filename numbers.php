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
	$num=3.14;
	echo round($num,1)."<br>";
	echo ceil($num)."<br>";
	echo floor($num)."<br>";
	echo rand()."<br>";
	echo rand(1,100)."<br>";
	$float = 30456;
	echo number_format($float)."<br>";
	?>	
	<?php
		// gan gia tri cho bien
		$soluong=20;
		$gia=30.343;
		$thue=.05;
		// tinh tong so hoa don
		$tong_cong=$soluong*$gia;
		$tong_cong=$tong_cong+($tong_cong*$thue);
		$tong_cong+=($tong_cong*$thue);
		echo "<p>Ban mua tong so la: {$soluong} voi gia cua moi qua laf: {$gia} voi tong so tien phai tra la: <strong>{$tong_cong}</strong> da bao gom thue <strong>{$thue}</strong></p>";
	?>
</pre>
</body>
</html>