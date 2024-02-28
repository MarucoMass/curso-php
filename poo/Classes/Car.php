<?php

class Car {

    private $brand;
    private $chasis;
    private $color;
        
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

}

$car_01 = new Car("Ford", "rojo");
$car_02 = new Car("Toyota", "verde");