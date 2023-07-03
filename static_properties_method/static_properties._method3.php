<?php


class Person{
    
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge  = 21;

    public static function setDrinkingAge($newDA){
       return self::$drinkingAge = $newDA;
    }

    //accessing static properties from regular obj
    public static function getDA(){
        return self::$drinkingAge;
    }

}


echo Person::$drinkingAge . PHP_EOL;

echo Person::setDrinkingAge(40);

//accessing static properties from regular obj
$getDA = new Person();
echo $getDA->getDA() . PHP_EOL;