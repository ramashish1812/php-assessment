<!-- Instantiate multiple objects of the "Car" class and demonstrate how to access their
properties and methods. -->

<?php

class car{

    public $make,$model,$year;

    function details()
    {
        echo "make : ".$this->make."<br>";
        echo "model : ".$this->model."<br>";
        echo "year : ".$this->year."<br>";
    }
}

$car1 = new car();
$car1->make = "toyota";
$car1->model = "corolla";
$car1->year = 2020;

echo "car 1 make : ".$car1->make . "<br>";
echo "car 1 model : ".$car1->model . "<br>";
echo "car 1 year : ".$car1->year . "<br><br>";

$car1->details();

$car2 = new Car();
$car2->make = "Honda";
$car2->model = "Civic";
$car2->year = 2023;

echo "Car 2 Details:<br><br>";
$car2->details();

?>