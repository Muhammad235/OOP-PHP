<?php
//define a class

class Fruit{

    //properties
    public $name;
    public $color;

    //method
    function set_name($givenName){
        $this->name = $givenName;
    }

    function set_color($givenColor){
        $this->color = $givenColor;
    }

    function getName(){
       return $this->name;
    }

    function getColor(){
        return $this->color;
    }
}


//define a new object
$apple = new Fruit();

$apple->set_name("Apple");
$apple->set_color("Green");

echo $apple->getName();
echo $apple->getColor().'<br>';

echo "The fruit ". $apple->getName(). " has color ". $apple->getColor();

//to check if apple is an istances of fruit

$apple = new Fruit();

var_dump($apple instanceof Fruit);



?>