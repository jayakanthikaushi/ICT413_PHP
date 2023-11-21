<?php
class A{
    public static function welcome(){
        echo "hello World";
    }
}

class B{
    public function message(){
       A::welcome();
    }
}

$job =new B();
echo $job->message();

?>