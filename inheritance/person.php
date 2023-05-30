<?php

class Person{

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







?>