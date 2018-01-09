<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="">Forum</a></li>
	<?php 
		$user_level=2;
		switch ($user_level) {
			case '1':
				echo "<li><a href=''>User profile</a></li>";
				break;
			case '2':
				echo "<li><a href=''>Edit profile</a></li>";
				break;
				case '3':
				echo "<li><a href=''>Delete profile</a></li>";
				break;
			default:
				echo "<li><a href=''>Register profile</a></li>";
				break;
		}
	?>
		<li><a href="">Serices</a></li>
		<li><a href="">Contact</a></li>
	</ul>
</body>
</html>