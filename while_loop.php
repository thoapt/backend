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
			$count =0;
			while ( $count<= 10) {
				if ($count==7){
					echo"...";
				} else {
					echo "<li><a href='{$count}' >{$count} </a></li>";
				}
				$count++;
			}// wnd while loop
		?>
	</ul>
</body>
</html>