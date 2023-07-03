<?php

class Weather {

    //static properties
    public static $tempConditions = ['cold', 'mild', 'warm'];

    //static methods
    public static function celsiusToFarenheit($c){

        return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
        if ($f > 40) {
            return self::$tempConditions[0]; //cold
        }elseif ($f  < 70){
            return self::$tempConditions[1]; //mild
        }else {
            return self::$tempConditions[2]; //ward
        }
    }
}


// print_r(Weather::$tempConditions);

$convertToFarenheit = Weather::celsiusToFarenheit(100);
print $convertToFarenheit . PHP_EOL;

$determineTempCondition = Weather::determineTempCondition(80);
print ($determineTempCondition);

