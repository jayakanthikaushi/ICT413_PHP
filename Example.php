<?php

class person{
    public $name;
    public $age;
    public $salary;




    function show (){
        echo "Employee Name".$this->name."<br>" ."SAlary".$this->age."<br>".$this->salary."<br>";
    }

    function __construct($name ,$age,$alary){
        $this->name =$name;
        $this->age=$age;
        $this->salary=$salary;
}


}

class manager extends employee{
    public $allowance =1500;
    public $ot=3000;
    public $totalsalary;


         function show(){
            $this->totalsalary= $this->salary +$this->allowamce + $this->ot;


            echo "Manager profile";
            echo "Manager Name".$this->name."<br>";
            echo "Manager Age" .$this->age."<br>";
            echo "Manager ".$this->totalsalary."<br>";

         }


}

$p1 =new employee("Kamal" ,25 ,25000);

$p2=new manager("Sadun",27,27000);
$p1->show();
$p2->show();

?>