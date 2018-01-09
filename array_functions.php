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
		$myArray =array(34,39,56,67,76, 88,99,100,77);
	?>
	count: <?php echo count($myArray)?>
	max: <?php echo max($myArray)?>
	min: <?php echo min($myArray)?>
	sort: <?php sort($myArray); echo "<pre>"; print_r($myArray); echo "</pre>"; ?>
	Reverse sort: <?php rsort($myArray); echo "<pre>"; print_r($myArray); echo "</pre>";?>
	implode"<?php echo implode('*', $myArray);?>
	<?php 
		$myEmails='thoapham38k14@gmail.com, thoapt2602@gmail.com, testfgc#gmail.com';
		$split =explode(',', $myEmails);
		echo "<pre>";
		print_r($split);
		echo "</pre>";
		$last=end($split);
		echo $last;
	?>
</body>
</html>