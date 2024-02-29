<?php

class Car
{

    // PROPERTIES / FIELD
    private $brand;
    private $color;
    public $type = "car";

    // CONSTRUCTOR
    public function __construct($brand, $color = "gris")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // GETTER AND SETTER
    public function set_brand($brand)
    {
        // beneficio de usar setter y getters es que podes es que podes controlar los datos 

        $allowedBrands = [
            "Ford",
            "Chevrolet",
            "Toyota",
            "Renault"
        ];
        if (in_array($brand, $allowedBrands)) {
            $this->brand = $brand;
        }
    }

    public function get_brand()
    {
        return $this->brand;
    }

    // METHOD
    public function get_car_info()
    {
        return "Marca: " . $this->brand . " Color: " . $this->color;
    }
}

// $car_01 = new Car("Ford", "rojo");
// echo $car_01->get_car_info();
// echo "<br>";
// echo $car_01->type;
