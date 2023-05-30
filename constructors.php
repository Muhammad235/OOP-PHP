<?php

class Person{

    //properties
    public $name;
    public $age;

    //method
    function __construct($name, $age)
    {
        $this->name = $name;
        
        $this->age = $age;
    }

    function get_name() {
        return $this->name;
    }

    function get_age() {
        return $this->age;
    }
    
    
}


$person = new Person("muhammad", 40);
echo "Name ".$person->get_name();
echo"\n";
echo "Age ".$person->get_age();


?>

