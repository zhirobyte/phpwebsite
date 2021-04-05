<?php 
 
    
  require_once('class.siswa.php');

  //namespace php
  require 'audi/mobil.php';
  require 'ferrari/mobil.php';
  require 'ford/mobil.php';
  require 'lamborghini/mobil.php';

  $siswa = new siswa();
  $siswa->nama ="Fulan";
  $siswa->alamat ="jakarta";
  
  //------------------
  echo "Nama siswa adalah:".$siswa->nama;  
  echo "siswa ini tinggal di:".$siswa->alamat;
  //------------------
  //MAGIC METHODE END------------------



  $audi = new audi\mobil(); 
  $ferrari = new ferrari\mobil();
  $ford = new ford\mobil();
  $lamborghini = new lamborghini\mobil();

  //print hasil dari methode 
  echo "<p>". $audi->cetak(). "</p>";
  echo "<p>". $ferrari->cetak(). "</p>";
  echo "<p>". $ford->cetak(). "</p>";
  echo "<p>". $lamborghini->cetak(). "</p>";
  //NAMESPACE END---------------------


  //function autoload

function __autoload($classname){
  require "mobil/".$classname.".php";
}

$cars = new honda();
$cars2 = new porsche();

echo "<p>". $cars->cetak(). "</p>";
echo "<p>". $cars2->cetak(). "</p>";
//AUTOLOAD END --------------------

function cekNumber($number){
    if($number>5){
      throw new Exception("Angka harus dibawah 5");
    }return true;
  }

  try{
    cekNumber(8);
    echo "Jika melihat pesan ini berarti angka yang anda masukkan dibawah 5";
  }
  catch(Exception $e){
    echo "Error Messages:" .$e->getMessage();
  }



?> 
  