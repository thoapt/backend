<?php
// ket noi voi csdl
	$dbc= mysqli_connect('localhost','root','','izcms');
// neu ket noi khong thanh cong thi bao loi ra 
	if(!$dbc){
		trigger_error("could not connect to DB".mysqli_connect_error());
	} else{
		// dat phuong thuc ke noi laf utf8
		mysqli_set_charset($dbc,'utf8');
	}
?>