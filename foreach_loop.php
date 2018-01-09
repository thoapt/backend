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
			$names= array('thoa','pham', 'tuyet','giang', 'quyen', 68,95);
			foreach ($names as $name) {
				echo $name."<br>";
				
			}
			foreach ($name as $key => $value) {
					echo $key."". $value ."<br>";
				}
		?>
</body>
</html>