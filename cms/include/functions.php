<?php
	// XAC DINH HANG SO CHO DIA CHI TUYET DOI
	define('BASE_URL', 'http://localhost/backend/cms/');
	// kiem tra xem ket qua tra ve co dung hay khong?
	function confirm_query($result, $query){
		global $dbc;
		if($result){
			die("Query {$q} \n <br> MySQL Error:" .mysqli_error($dbc));
		}
	}

	//
	function redirect_to($page = 'index.php')
	{
		$url = BASE_URL.$page;
		header("Location: admin.php");
		exit();
	}
	
?>