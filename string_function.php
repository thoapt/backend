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
		$string1 ="nha sac co han";
		$string2="thu doan vo bien";
		$string3=$string1;
		$string3.=$string2;
		echo $string3;
		?>
		<p><strong>String length:</strong><?php echo strlen($string1); ?></p>
		<p><strong>String uppercase:</strong><?php echo strtoupper($string2); ?></p>
		<p><strong>String lowercase:</strong><?php echo strtolower($string2); ?></p>
		<p><strong>String chu dau:</strong><?php echo ucfirst($string1); ?></p>
		<p><strong>String tat ca chu dau:</strong><?php echo ucwords($string1); ?></p>
		<p><strong>String thay the</strong><?php echo str_replace('bien', 'song', $string3);?></p>

	
</body>
</html>