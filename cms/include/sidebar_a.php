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
				// xac dinh cat_id de to dam link
				if (isset($_GET['cid']) && filter_var($_GET['cid'],FILTER_VALIDATE_INT, array('min_range'=>1))) 
				{
					$cid=$_GET['cid'];
					$pid=NULL;
				}
				 elseif (isset($_GET['pid']) && filter_var($_GET['pid'],FILTER_VALIDATE_INT, array('min_range'=>1))) 
				{
					$pid=$_GET['pid'];	
					$cid=NULL;
				}
					else{
						$cid=NULL;
						$pid=NULL;
					}

				// cau lenh truy xuat category
					$q="select cat_name, cat_id from categories order by position";
					$r= mysqli_query($dbc,$q) or die("Query {$q} \n<br> MySQL error: ".mysqli_error($dbc));
					// lay categories tu co so du lieu
					while ($cats = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo "<li><a href='index1.php?cid={$cats['cat_id']}'";
							if ($cats['cat_id'] == $cid) echo "class='selected'";
						echo ">".$cats['cat_name']."</a>";
							// cau lenh truy xuat page
						$q1 = "select page_name,page_id from pages where (cat_id = {$cats['cat_id']}) order by position";
						$r1 = mysqli_query($dbc,$q1) or die("Query {$q1} \n<br> MySQL error: ".mysqli_error($dbc));
						echo "<ul class='pages'>";
						// lay pages tu CSDL
						while ($pages=mysqli_fetch_array($r1, MYSQLI_ASSOC)) {
							echo "<li><a href='index1.php?pid={$pages['page_id']}'";
								if ($pages['page_id'] == $pid) echo "class= 'selected'";
							echo ">".$pages['page_name']."</a></li>";
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