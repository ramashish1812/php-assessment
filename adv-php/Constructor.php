<!-- Create a class with a constructor that initializes properties when an object is created. -->

<?php

class student{

    public $name,$age;

    function __construct($n,$a)
    {
        $this->name=$n;
        $this->age=$a;
    }

    function details()
    {
        echo "name : ".$this->name."<br>";
        echo "age : ".$this->age."<br>";
    }
}

$obj = new student("nitesh",23);
$obj->details();    

?>