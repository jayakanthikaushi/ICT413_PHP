<?php
class university{
    protected static function getName(){
        return"SUSL";
    }
}

class faculty extends university{
    public $name;
    public function__construct(){
        Static->name=parent::getName();
    }
}


$faculty =new faculty;
echo $faculty->name;











?>