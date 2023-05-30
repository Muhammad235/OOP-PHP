<?php

class People{
    public $name;
    protected $age;
    private $height;

}


$person1 = new People();
$person1->name = 'Muhammad';
//this will not result in an erorr because it is public property
echo $person1->name;


//this will  result in an erorr because it is a protected property
// $person1->age = 12;
// echo $person1->age;


//this will  result in an erorr because it is a private property
// $person1->height = 123;
// echo $person1->height;


//protected and public properties can not be accessed outside the class


?>