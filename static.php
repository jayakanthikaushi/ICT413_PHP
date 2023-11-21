<?php

class Myclass{
    public static function staticmethod(){
        echo "Hello word";

    }


 public function cat(){
    self::staticmethod();
 }






}
$noe=new Myclass();
echo $noe->cat();

  
?>