<?php
public class Employee{

    public salary;
    public position;

 public   function set_salary($n){
        return $this->salary=$n;
      }
    
    public function set_position($n){
        return $this->position=$n;
    }
    
   
}
class Person extends Employee{
    public name;
    public age;

    public function set_name($n){
        return $this->name=$n;

}
public function set_age($n){
    return $this->age=$n;

}







}


$activity =new Employee();
echo $activity->$salary=("35000");
echo $activity->$position=("Manager");
echo $activity->$name=("Sandun");
echo $activity->$age=("25");
