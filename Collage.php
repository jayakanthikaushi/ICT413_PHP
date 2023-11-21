<?php
class Collage{
    const MESSAGE ="SUSL ONLY";
    public function exam(){
        echo self::MESSAGE;
    }
}

$cl =new Collage();
$cl->exam();
?>