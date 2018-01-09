<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		ul li {
			display: inline;
			margin: 5px;
		}
	</style>
</head>
<body>
	<ul class="pagination">
		<?php 
			for ($i=1; $i <= 8; $i++) { 
				echo "<li><a href ='{$i}'> {$i}</a></li>";
			}
		?>
	</ul>
</body>
</html>