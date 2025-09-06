<!-- Create a "Vehicle" class and extend it with a "Car" class. Include properties and methods inboth classes, demonstrating inherited behavior. -->

<?php

class vehicle{

    public $brand,$color;

    function stat(){
        echo "the vehicle is starting....<br>";
    }

    function info(){
        echo "make : ".$this->brand."<br>";
        echo "color : ".$this->color."<br>";
    }
}

class car extends vehicle{
    
    public $model,$year;

    function details(){

        $this->info();

        echo "model : ".$this->model."<br>";
        echo "year : ".$this->year."<br>";
    }
}

$car = new car();
$car->brand = "toyota";
$car->color = "Red";
$car->model = "Corolla";
$car->year = 2022;

$car->stat();

$car->details();

?>