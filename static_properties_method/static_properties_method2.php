<?php

class ClassName {
    public static function staticMethod() {
      echo "Hello World!";
    }
  }

 ClassName::staticMethod().'\n';


 echo '<br>';

class Car {

    private $color = 'red';
    private $weight = 3000;
    // static public $availableColors = [
    //     'red', 'green', 'yello'
    // ];

    static $counter = 0;
    public function __construct()
    {
        self::$counter++;
    }
}


$mycar = new Car();

//Car::$availableColors;

echo Car::$counter.PHP_EOL;


$mycar = new Car();
echo Car::$counter.PHP_EOL;



?>