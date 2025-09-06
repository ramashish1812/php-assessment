<!-- Create a class with static properties and methods, and demonstrate their access using thescope resolution operator. -->

<?php

class info{

    static $version = "2.0";

    static function display(){
        echo "app version : ".self::$version."<br>";
    }
}

echo info::$version."<br>";
info::display();


?>