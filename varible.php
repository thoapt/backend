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
	$file =$_SERVER['SCRIPT_FILENAME'];
	$user=$_SERVER['HTTP_USER_AGENT'];
	$server=$_SERVER['SERVER_SOFTWARE'];
	
	// in ra file dang xem
	echo "ban dang xem file: {$file}"."<br>";
	// in ra thong tin cua trinh duyet nguoi dung
	echo "ban dang dung: {$user}"."<br>";
	//in ra thong thong tin server cua ban
	echo "thong tin server cua ban: {$server}";
	?>
</body>
</html>