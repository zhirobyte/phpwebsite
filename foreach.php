<!DOCTYPE html>
<html>
<head>
	<title>ini adalah array for </title>
</head>
<body>

	<?php 
	$nama = array("Asep","John", "Doni", "Anti");
	foreach ($nama as $nilai) {
		echo $nilai;
		echo"<br>";
	}

	foreach ($nama as $key => $nilai) {
		echo $key."".$nilai;
		echo "<br>";
	}


///while sttement===============================
	$x= 0;
	$y = 99;
	while ($x <=10 ) {
		echo "Nilaix = ".$x;
		$x++;
		echo "<br>";
	}
// do while statement =     =============== 
	 
	 do {
	 echo "Nilai y = ".$x;	
	 } while ($y <= 100);

	 ?>
	
</body>
</html>