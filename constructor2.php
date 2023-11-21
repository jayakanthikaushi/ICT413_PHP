<?php

class person{
    public $name;
    public $index;
    public $age;




    function show (){
        echo $this->name."<br>" .$this->index."<br>".$this->age."<br>";
    }

    function __construct($name ,$index,$age){
        $this->name =$name;
        $this->index=$index;
        $this->age=$age;
}

}
$p1 =new person("Sanduni" ,5441,25);
$p1->show();

?>