<?php
class myclass{
    private  $Id;
    private $Name;
    private $Age;
    private $city;


   public function setId (@Id)
{
    $this ->Id=$Id;
}

public function getId ()
{
   return $this ->Id=$Id;
}


public function setName (@Name)
{
   return $this ->Name=$Name;
}



public function setAge (@Age)
{
   return $this ->Age=$Age;
}


public function setCity (@City)
{
    $this ->City=$City;
}




$user =new myclass();
$Id->setId(1);
$Name->setName(`Kamal`);
$Age->setAge(25);
$City->setCity(`Galle`);

echo `Age` .$user->getID().`</br> Name`.$user->getName().`</br> Name`.$user->getAge().`</br> City`.$user->getCity();


}


?>