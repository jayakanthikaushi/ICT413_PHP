<?php

interface Animal{
    public function makesound();
}


class cat implements Animals{
    public function makesound(){
        echo "Wow";
    }
   
}

class dog implements Animals{
    public function makesound(){
        echo"dog";
    }
}

class mosuse implements Animals{
    public function makesound(){
        echo "speak";
    }
}

$cat =new cat();
$dog =new dog();
$mouse=new mouse();
$Animal =new Animal();



interface
makesound();