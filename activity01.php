<?php
class rectangle{
    public $length;
    public $weight;


    function set_length($n){
        return $this->length="length is:$n";
      }



      function set_weight($n){
        return $this->weight="weight is:$n";
      }

   

}





$circle =new rectangle ();
echo $circle->set_length("200</br>");
echo $circle->set_weight("300");

















$circle =new rectangle();






?>