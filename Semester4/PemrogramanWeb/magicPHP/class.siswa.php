<?php

  class siswa{
    private $nama;
    private $alamat;


    //magic get methode
     public function __get($atribute){
      if(property_exists($this, $atribute)){
        return $this->$atribute;
      }
    }

    //magic set methode
    public function __set($atribute, $value){
      if(property_exists($this, $atribute)){
        $this->$atribute = $value;
      }
    }


  } 



?>