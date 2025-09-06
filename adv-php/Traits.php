<!-- Create two traits and use them in a class to demonstrate how to include multiple behaviors.-->

<?php

trait logger{

    function log($msg)
    {
        echo "log : $msg<br>";
    }
}

trait notifier{

    function notify($user)
    {
        echo "notify : sending message to $user<br>";
    }
}

class user{

    use logger,notifier;

    function createuser($name)
    {
        echo "creating user : $name<br>";
        $this->log("user $name created");
        $this->notify($name);
    }
}

$u = new user();
$u->createuser("vijay");

?>