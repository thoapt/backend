<!DOCTYPE html>
<?php 
	$user =array('user_id'=>1, 'user_name'=>'thoa', 'user_email'=>'thoapt@gmail.com');
	setcookie('user_id','', time()-3600,'/','',0,0);
	setcookie('user_name','', time()-3600,'/','',0,0);
	setcookie('user_email','', time()-3600,'/','',0,0)
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
		if(isset($_COOKIE['user_id'])){
			echo $_COOKIE['user_id'];
			echo "xin chao" .$_COOKIE['user_name'];
			echo $_COOKIE['user_email'];
		}
	?>
	<p>hello the world</p>
</body>
</html>