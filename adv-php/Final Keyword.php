<!-- Create a class marked as final and attempt to extend it to show the restriction. -->


<?php

class student1{

    function s1()
    {
        echo "this is a class student1 <br>";
    }
}

class student2 extends student1{

    function s2()
    {
        echo "this is a class student2";
    }
}

$obj = new student2();
$obj->s1();
$obj->s2();

?>