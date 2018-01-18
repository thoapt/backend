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
				<li><a href="#">Home</a>
					<ul class="pages">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Clients</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</li>
				<li><a href="#">About</a></li>
				<li><a href="#">Clients</a>
					<ul class="pages">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Clients</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</li>
				<li><a href="#">Contact Us</a></li>
				<?php
					$q="select cat_name, cat_id from categories order by position";
					$r= mysqli_query($dbc,$q) or die("Query {$q} \n<br> MySQL error: ".mysqli_error($dbc));
					// lay categories tu co so du lieu
					while ($cats = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo "<li><a href='index1.php'>".$cats['cat_name']."</a>";
							// cau lenh truy xuat page
						$q1 = "select page_name,page_id from pages where (cat_id = {$cats['cat_id']}) order by position";
						$r1 = mysqli_query($dbc,$q1) or die("Query {$q1} \n<br> MySQL error: ".mysqli_error($dbc));
						echo "<ul class='pages'>";
						// lay pages tuw CSDL
						while ($pages=mysqli_fetch_array($r1, MYSQLI_ASSOC)) {
							echo "<li><a href=''>".$pages['page_name']."</a></li>";
						}// end while page
						echo "</ul>";
						echo "</li>";
					}//END WHILE cats
				?>
			</ul>
		</div>
	</div>
</body>
</html>