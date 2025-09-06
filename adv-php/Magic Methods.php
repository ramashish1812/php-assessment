<!-- Create a class that uses magic methods to handle property access and modification
dynamically. -->


<?php

class user{

    private $data = [];

    function __set($name, $value)
    {
        echo "setting $name to $value <br>";
        $this->data[$name] = $value;
    }

    function __get($name)
    {
        if(isset($this->data[$name])){
            echo "$name : " .$this->data[$name] ."<br>";
        }
        else{
            echo "$name is not set";
        }
    }
}

$obj = new user();
$obj->name = "bhavesh";
$obj->age = 22;

$obj->name;
$obj->age;
$obj->email;


?>