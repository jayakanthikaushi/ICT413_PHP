<?php

//protected variable can't access outside the class
class fruit{
    public $name;
    public $colour;
    public $weight;

  function set_name($n){
    return $this->name=$n;
  }

protected function set_colour($n){
    return $this->colour=$n;
}

protected function set_weight($n){
    return $this->weight=$n;
}

}


$mango =new fruit ();
echo $mango->set_name("mango");
echo $mango->set_colour("Yellow");
echo $mango->set_weight("300");



?>