<!-- Write a class that implements a destructor to perform cleanup tasks when an object is
destroyed. -->

<?php

class file{

    public $filename;

    function __construct($name)
    {
        $this->filename=$name;
        echo "opening file : $this->filename <br>";
    }

    function __destruct()
    {
        echo "closing file : $this->filename <br>";
    }
}

$obj = new file("report.txt");

?>