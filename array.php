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
		$myArray =array(34,39,56,67,76, array('a'=>'apple', 'b'=>'banana', 'c'=>'coconut'));
		echo $myArray[5]['b'];
		echo "<p>there are {$myArray[1]} {$myArray[5]['b']} in the box</p>";
		echo "<pre>";
		print_r($myArray);
		echo "</pre>";
	?>
</body>
</html>