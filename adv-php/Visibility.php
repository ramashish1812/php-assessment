<!-- Write a class that shows examples of each visibility type and how they restrict access toproperties and methods. -->

<?php

class visibility{

    public $publicprop;
    private $privateprop;
    protected $protectedprop;

    public function publicmethod()
    {
        echo "this is a public method <br>";
    }

    private function privatemethod()
    {
        echo "this is a private method<br>";
    }

    protected function protectedmethod()
    {
        echo "this is a protected method<br>";
    }

    function access(){
       echo $this->publicprop;
       echo $this->privateprop;
       echo $this->protectedprop;

       $this->publicmethod();
       $this->privatemethod();
       $this ->protectedmethod();
    }
}

$obj = new visibility();
$obj->access();

?>