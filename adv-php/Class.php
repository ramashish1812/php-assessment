<!-- Write a PHP script to create a class representing a "Car" with properties like make, model, and year, and a method to display the car details. -->

<?php

class car{
    public $make,$model,$year;

    function details(){
        echo "car make : ".$this->make."<br>";
        echo "car model : ".$this->model."<br>";
        echo "car year : ".$this->year."<br>";

    }
}

$obj = new car();
$obj->make = "toyota";
$obj->model = "corolla";
$obj->year = 2020;

$obj->details();

?>