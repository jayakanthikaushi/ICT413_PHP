<?php
class myclass{
    protected static function fruit(){

        echo "Fruit";


    }
}

class apple extends myclass{
    public function fpp(){
        echo parent::fruit();
    }
}

$mango=new apple();
echo $mango->fpp();