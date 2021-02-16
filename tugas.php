<!DOCTYPE html>
<html>
<head>
	<title>ini adalah contoh dari tugas</title>
</head>
<body>



		<?php

		$dulur = array("Budi satu","Susi dua","Dudi", "Joni");

		//Menampilkan nama dari setiap anggota

		foreach ($dulur as $x => $y) {

			echo "Nama".$x." berumur".$y;
			echo "<br>"; 
		}

		echo "<br>";

		// menampilkan jumlah kata dan huruf pada kata yang diinput 
		
	for($z=0; $z<count($dulur); $z++){	
		

		$arrpanjang = str_word_count($dulur[$z]);
		$arrkarakter = strlen($dulur[$z]);
		$arrbalik = strrev($dulur[$z]);
		$convertArray = str_split($dulur[$z]);
		$vokal = 0;
		$konsonan = 0;
		$space = 0;

		foreach($convertArray as $row){
			
		 if(preg_match('/^[aiueo]/', $row[0]))
			  {
			   echo $row[0] ." = vokal <br >" ;
			   $vokal++;
			  }
		elseif (preg_match('/^[ ]/', $row[0])) {
			  $space++;
			  }
		else
			 {
			  echo $row[0] ." = konsonan <br >";
			  $konsonan++;
			 }

			}
		
			echo "Nama:".($dulur[$z])."<br>";
			echo "Jumlah kata adalah:".$arrpanjang."<br>";
			echo "jumlah karakter adalah:".$arrkarakter."<br>";	
			echo "jumlah vokal    :".$vokal."<br>";
			echo "jumlah konsonan :".$konsonan."<br>";
			echo "<br>";

		}

	
	    ?>
</body>
</html>