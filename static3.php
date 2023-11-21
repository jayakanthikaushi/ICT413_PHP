<?php
class myclass{
    public static $name=25;

public function cat(){
  return  self::$name;
}


}

 $mango =new myclass();
 echo $mango->cat();
?>