<!DOCTYPE html>
<?php 
	$user =array('user_id'=>1, 'user_name'=>'thoa', 'user_email'=>'thoapt@gmail.com');
	$_SESSION['user_id']=$user['user_id'];
	$_SESSION['user_name']=$user['user_name'];
	$_SESSION['user_email']=$user['user_email'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		if(isset($_SESSION['user_id'])){
			echo $_SESSION['user_id']."<br>";
			echo "xin chao" .$_SESSION['user_name']."<br>";
			echo $_SESSION['user_email'];
		}
	?>
	<p>hello the world</p>
</body>
</html>