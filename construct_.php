<?php
 class Myclass{
  public $age;
  public $name;

  public function _construct($age , $name){

    $this->age=$age;
    $this->name=$name;

  }

   public function intro(){
    echo " {$this->age} and {$this->name} ";
   }


 }

  $mango =new Myclass( 25 , "kaushi");
 echo $mango->intro();
?>