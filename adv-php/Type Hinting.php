<!-- Write a method in a class that accepts type-hinted parameters and demonstrate how it
works with different data types. -->

<?php

class info{

    function display(int $id,string $name){
        echo "id : $id<br>";
        echo "name : $name<br>";
    }

    function subjects(array $list){
        echo "subjects :<br>";
        foreach($list as $subject){
            echo "- $subject<br>";
        }
    }
}

$obj = new info();
$obj->display(1,"dhaval");
$obj->subjects(['math', 'science','english']);
?>