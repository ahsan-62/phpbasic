

<?php

class mobile{

public $brand;
public $price;
public $model;


public function __construct($brand,$price,$model)
{
    $this->brand=$brand;
    $this->price=$price;
    $this->model=$model;

}

function info(){

    return " Brand:$this->brand <br> Price:$this->price <br> Model:$this->model";
}

}

$my_phone=new mobile('Xiaomi','10000','note 13 pro');

echo $my_phone->info();

?>