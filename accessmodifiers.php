<?php

class People{
    
    public $name;
    protected $age;
    private $height;

    function set_age($age){
        $this->age = $age;
    }

    function set_height($height){
        $this->height = $height;
    }

    function get_age(){
        return $this->age;
    }

    function get_height(){
        return $this->height;
    }
}


$person1 = new People();
$person1->name = 'Muhammad';
echo $person1->name;

echo '<br>';

$person1->set_age(31);
echo $person1->get_age();

echo '<br>';

$person1->set_height(101);
echo $person1->get_height();



?>