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
		function cong_tru($x, $y){
			$tong=$x+$y;
			$hieu=$x-$y;
			$dap_so=array($tong,$hieu);
			return $dap_so;
		}
		$total=cong_tru(8,6);
		echo "tong so: $total[0] <br>";
		echo "hieu so: $total[1] <br>";

		list($tong,$hieu) = cong_tru(8,6);
		echo "tong so: $tong <br>";
		echo "hieu so: $hieu <br>";
	?>
</body>
</html>