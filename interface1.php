<?php
interface product{

    public function makename();

    public function makeprice();
    
    
}
  class second implements product{

    public function makename(){
        echo"asus";
    }
    public function makeprice(){
        echo"290000";
    }

}

class third implements product{
    public function makename(){
        echo"acer";
    }
    public function makeprice(){
        echo"250000";
    }


}



$computer =new second();
$computer->makename();
$computer->makeprice();
echo"<br>";

$computer =new third();
$computer->makename();
$computer->makeprice();

