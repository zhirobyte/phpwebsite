<?php

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$date = date("d-m-Y", strtotime($_POST['date']));
$dropdown = $_POST["dropdown"];
$inputan = $_POST["inputan"];
$hp = $_POST["hp"];
$rd = $_POST["rd"];

echo "SELAMAT DATANG DI FORM KAMI</br>";
echo " $name</br>";
echo " $email</br>";
echo " $pass</br>";
echo " $date</br>";
echo " $dropdown</br>";
echo " $inputan</br>";
echo " $hp</br>";
echo " $rd</br>";


?>