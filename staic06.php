<?php

class B{
    public static $value=3.14159;
    public function staticvalue(){
        return self::$value;
    }
}



$B= new B();
echo $B->staticvalue();









?>