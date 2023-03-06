<?php

class People{
    public $name;
    protected $age;
    private $height;

    function set_age($age){
        $this->age = $age;
    }

    function get_age(){
        return $this->age;
    }
}


$person1 = new People();
$person1->name = 'Muhammad';
echo $person1->name;

$person1->set_age(31);

echo '<br>';

echo $person1->get_age();


// age and name can not be accessed because it is protected and private
// $person1->age = 123;
// echo $person1->age;


?>