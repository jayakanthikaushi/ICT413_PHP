<?php

class student{

    //public variable can accesss outside the class
    public $name;
    public $age;
    public $grade;


    function set_name($n){
        return $this->name="Name is :$n";
      }
    
    public function set_age($n){
        return $this-> age="Age is :$n";
    }
    
    public function set_grade($n){
        return $this->grade="grade is :$n";
    }
    
    }
    
    
    $detail =new student ();
    echo $detail->set_name("kamal</br>");
    echo $detail->set_age("25</br>");
    echo $detail->set_grade("A");
    
    


   

?>