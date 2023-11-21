<?php

class Math{

    
    public static function add($sum1,$sum2){
        return $sum1+$sum2;
    }



    
    public static function sub($sum1,$sum2){
        return $sum1-$sum2;
    }


    
    public function mul($sum1,$sum2){
        return $sum1*$sum2;
    }



$add =Math::add(4,5);
$sub =Math::sub(5,3);
$add =Math::mul(4,5);






echo "Addition is ".$add;
echo "Addition is ".$sub;
echo "Addition is ".$mul;









}














?>