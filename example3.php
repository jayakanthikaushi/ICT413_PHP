<?php
class fruit {
    public $name;
    public $colour;

public function_construct($name,$colour){
    public->name=$name;
    public->colour=$colour;
}

public function intro(){
    echo "this fruit is ($this->name) and the colour is ($this->colour).";
}


}

class strawbery extends fruit{

public function message(){

 echo "I`m strawbery";
}

$strawbery  =new  strawbery ("strawbery","red");
$strawbery->message();
$strawbery->intro();




}






?>