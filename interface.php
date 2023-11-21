<?php

interface Animal{
    public function makesound();
}

class cat implements Animal{
    public function makesound(){
        echo "Wow";
    }
}

$animal =new cat();
$animal->makesound();