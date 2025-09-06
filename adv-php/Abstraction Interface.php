<!-- Define an interface named VehicleInterface with methods like start(), stop(), andimplement this interface in multiple classes. -->

<?php

interface Vehicle{

    function start();
    function stop();
}

class car implements Vehicle{

    function start()
    {
        echo "car is starting...<br>";
    }

    function stop()
    {
        echo "car is stopping...<br><br>";
    }
}

class bike implements Vehicle{

    function start()
    {
        echo "bike is starting...<br>";
    }

    function stop()
    {
        echo "bike is stopping...";
    }
}

$obj = new car();
$obj->start();
$obj->stop();

$obj = new bike();
$obj->start();
$obj->stop();
?>