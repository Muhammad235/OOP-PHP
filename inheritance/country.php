<?php

//inclding the inheriting class
include 'person.php';

class country extends Person{

    public $country = 'Nigeria';

    function set_age($age){
        $this->age = $age;
    }

}

//the person class has being accessed from the country page
$person1 = new Person();

$person1->name = 'Muhammad';
echo $person1->name;

echo '<br>';

$person1->set_age(31);
echo $person1->get_age();

echo '<br>';

$person1->set_height(101);
echo $person1->get_height();

echo '<br>';

$PersonCountry = new country();

echo $PersonCountry->country;

echo '<br>';


echo 'My name is '. $person1->name.' i am '. $person1->get_age().'years old i am as tall as '. $person1->get_height().' meters i am from '.$PersonCountry->country;

echo '<br>';

//method overring of the of value age 
$PersonCountry->set_age(43);
echo $PersonCountry->get_age();

$PersonCountry->set_height(40);
echo $PersonCountry->get_height();




?>