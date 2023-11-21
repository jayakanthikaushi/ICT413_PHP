<?php
class person{
    public $name;
    function show (){
        echo "your name".$this->name;

    }
}

$p1 =new person(){
$p1->name ="Cat";
}



