<!-- Create a simple class in PHP that demonstrates encapsulation by using private and public
properties and methods. -->

<?php 

class properties{

    private $name = "rohan";
    public $age = 23;

    function priv(){
       echo "name : ".$this->name . "<br>";
    }

    function pub(){
        echo "age : ".$this->age;
    }
}

$obj = new properties();
$obj->priv();
$obj->pub();

?>