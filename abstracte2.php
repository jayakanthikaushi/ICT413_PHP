<?php
//2023/11/09 child class argument

abstract class parentClass{
    abstract protected function prefixname($name);
}

class childClass extends parentClass{
  public function prefixname($name ,$separator ="", $great="dear"){
    if($name=="John Due"){
        $prefix="Mr";

    }elseif ($name == "Done Doe"){
        $prefix ="Mrs";
    }else{
        $prefix="";
    }
    return "($prefix) ($name)";

  }

}

$class=new childClass();
echo $class ->prefixname("John Due");
echo "<br>";
echo $class->prefixname("Done Doe");

?>