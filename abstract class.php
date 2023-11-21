<?php
abstract class Car{
    public $name;
    public function_construct($name){
        $this->name;
    }

    abstract public function intro();
    string;

}

class Audi extends Car{
    public function intro():string{
        return "Choose Quntity ! I`m ;
        an $this->name !";
    }
}

class volvo extends Car{
    public function intro (): string{
        return "proud to be swedish! I`m a
        $this->name!";

    }
}

$audi =new audi("Audi");
echo $audi->intro();
echo "<br>";


$volvo =new volvo("volvo");
echo $volvo->intro();
echo "<br>";
?>






