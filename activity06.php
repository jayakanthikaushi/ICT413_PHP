<?php
class Employee{
static $name;
public function staticvaluena(){
    return self::$name;
}

}



class person extends Employee{
    static $salary;
    static $position;
}








?>