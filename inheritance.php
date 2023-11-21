<?php
class vehicle {
public function honk(){
    return "Honk knog";

}
}


    class fruit extends vehicle {

}

$mycar = new fruit();
echo $mycar->honk();