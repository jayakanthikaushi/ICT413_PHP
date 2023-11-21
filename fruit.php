<?php
class fru{
    public $name;
    protected $colour;
    protected $weight;
} 

$mango = new fru ();
echo $mango->$name=("mango");
echo $mango->$colour=("yellow");
echo $mango->$weight=("300");

?>