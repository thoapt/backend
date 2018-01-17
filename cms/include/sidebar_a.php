<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="content-container">
		<div id="section-navigation">
			<ul class="navi">
				<?php
					$q="select cat_name from categories order by position";
					$r= mysqli_query($dbc,$q) or die("Query {$q} \n<br> MySQL error: ".mysqli_error($dbc));
					while ($cats = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo "<li><a href='index1.php'>".$cats['cat_name']."</a>";
					}
				?>
			</ul>
		</div>
	</div>
</body>
</html>