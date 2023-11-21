<?php
class Myclass{
    public $name;
    public $age;
   

    public function name($n){
        return $this->name=$n;

    }



    public function age($n){
        return $this->age=$n;

    }




}
$mango =new Myclass();
echo $mango->name=('kaushi');
echo $mango->age=(25);

?>