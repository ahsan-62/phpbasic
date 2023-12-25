<?php


class Cars{

public $name;
public $color;
private $engine;

function set_name($brand_name){
    $this->name=$brand_name;
}

function get_name(){
    return $this->name;
}

}

$new_car_object=new Cars;

print_r($new_car_object);

$new_car_object->set_name("AHSAN");
$my_car_name=$new_car_object->get_name();

print_r($my_car_name);




?>