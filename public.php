<?php

class Myclass{

    public $name;
    public $age;

public function show(){
    return $this->name;

}


public function get(){
    return $this->age;
}




}
$mango =new Myclass();
echo $mango->show();
echo $mango->get();
?>