<?php
class vehicle{
  public   $brand;
  public   $model;
  public   $year;



  function set_brand($n){
    return $this->brand="brand is:$n";
  }


  function set_model($n){
    return $this->model="model is:$n";
  }

  function set_year($n){
    return $this->year="year is:$n";
  }

}


$circle =new vehicle ();
echo $circle->set_brand("TATA</br>");
echo $circle->set_model("BMW</br>");
echo $circle->set_year("1998</br>");













?>