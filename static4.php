<?php

class myclass{
    public static $name="sanduni";


}
class B extends myclass{
    public function show(){
        return parent::$name;

    }
}

$mango =new myclass();
echo $mango->show();