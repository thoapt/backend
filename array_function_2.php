<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<pre>
	<?php  
		$myArray =array('html','css','wp','jquery','php','javascript');
		$array= array('photoshop', 'illustrator','corelDraw', 'thinkpad');
		//shuffle($myArray);
		$rand=array_rand($myArray);
		$viethoa=array_map('ucfirst', $array);
		foreach ($viethoa as $hoa) {
			echo "<li>{$hoa}</li>";
		}
		if(in_array('css', $myArray)){
			echo "yes, it is in array";
		}
		//$merge=array_merge($myArray,$array);
		//array_splice($myArray, 3, 1, 'oop');
		//unset($myArray[5]);
		//array_splice($myArray, 3,2);
		//print_r($myArray);
		//print_r($myArray+$array);
		print_r ($myArray[$rand]);
	?>
</pre>
</body>
</html>