<?php
	echo "hello, <b> world</b>!";
	echo "<p>have a nice day</p>";
	$nama = "Fulan";
	$alamat = "bumi";
	$jumlah = 10;
	$tambah = 30;

	$total = 10 + 30;

	echo "<b>Nama saya adalah</b>    :".$nama."<br>";
	echo "<b>Alamat saya adalah</b>  :".$alamat."<br>";
	echo "<b>Jumlah saya adalah</b>  :".$jumlah."<br>";
	
	echo "===================<br>";
	echo "|| Data1 :".$nama;
	echo "<br>";
	echo "|| Data2 :".$alamat;
	echo "<br>";
	echo "|| Data3 :".$jumlah;
	echo "<br>";
	echo $total."<br>";


	echo "==========================";
	print"<h2> php is fun</h2>";
	print"this is print sample<br>";
	print"i'm about to print PHP<br>";


	echo "=====================<br>";
	$x = 99346672;
	$y = 29930.992;
	$z = 99284 + $x / 9;


	var_dump($x).var_dump($z);
	var_dump($y);

	echo "<br>====================<br>";
	echo "nilai x adalah sebuah nilai:".gettype($x)."<br>";
	echo "sedangkan yang nilai y dan z adalah: <br>".gettype($y).gettype($z);

	echo "<br>====================<br>";
	echo "Hasil penjumlaham dari y + z adalah<br>";
	echo $y+$z;

	echo "<br>====================<br>";
?>