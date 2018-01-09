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
		$img ="izwebz.abc";
		$l=strlen($img);
		$allowed=array('jpg','png','gif');
		$split=explode('.', $img);
		$ext=end($split);
		if(($l <15) && (in_array($ext, $allowed))){
			echo "your img is ready for upload";
		} else{
			echo "your img is not either the valid type or over the size limit";
		}
	?>
</body>
</html>