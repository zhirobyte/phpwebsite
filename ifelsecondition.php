<!DOCTYPE html>
<html>
<head>
	<title>this is if elese program for basic php 
	</title>
</head>
<body>

	<?php 

	$umur = 21;
	if ($umur <= 20) {
		echo "selamat anda berhasil mencapai umur 20";
		} 
	elseif ($umur > 20) {
			echo "Selamat atas keberhasilan anda melebihi umur, be brave";
		}
	else
		echo "anda tidak masuk kategori";
	echo "<br>";

	 $nilai = 22;
	 $nilai2 = 22;
	 if ($nilai === $nilai2 ) {
	 	echo "Nilai sama dengan nilai2 ";
	 }
	 else 
	 	echo "nilai akhir adalah sama";
	 echo "<br>";

	//masuk kedalam model switch case ========================
	 $grade = 'B';

	 switch ($grade) {
	 	case 'A':
	 		# code...
	 	echo "Paket nilai A";
	 		break;
	 	case 'B':
	 			# code...
	 	echo "Paket nilai B";
			break;
	 	case 'C':
	 		# code...
	 	echo "Paket nilai C";
	 		break;
	 	case 'D':
	 			# code...
	 	echo "Paket nilai D";
			break;
	 	
	 	default:
	 		echo "data tidak ditemukan";
	 		break;
	 }
	 echo "<br>";
	 echo "=========================<br>";
// ini mulai dikerjakan tugasnya ya..........
	 echo "TOKO CAT BANGUNAN<br>";
	 $MOWILEX = 20000;
	 $DANAPAINT = 30000;
	 $CATYLAC = 40000;
	
	 
	 // jumlah beli dam barang beli
	 $JUMBELI = 5;
	 $HARGA = $CATYLAC;
	 //
	 echo "selamat datang, silahkan pilih jenis cat<br>";
	 switch ($HARGA) {
	 	case '20000':
	 	echo "Harga MOWILEX adalah :" .$MOWILEX;
	 		break;
	 	case '30000':
	 	echo "Harga DANAPAINT adalah :" .$DANAPAINT;
	 		break;
	 	case '40000':
	 		echo "Harga CATYLAC adalah :".$CATYLAC;	
	 			break;
	 	default:
	 		echo "harga tidak ditemukan";
	 		break;
	 }
	echo "<br>";

	$PILIH = $HARGA;
	 $TOTHARGA = $HARGA * $JUMBELI;
	  $dis5 = $TOTHARGA * 5/100;
	 $dis10 = $TOTHARGA * 10/100;
	if ($JUMBELI >= 5) {
		echo "anda mendapat diskon 5%";
		echo "Harga anda menjadi :".$dis5;
	} else if ($JUMBELI >= 10) {
		echo"anda mendapat diskon 10%"
		echo "Harga anda menjadi :".$dis10;
	} else {
		echo "anda tidak mendapat diskon";
	}
	

	 ?>



</body>

</html>