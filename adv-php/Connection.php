<!-- Write a script to establish a database connection and handle any errors during the
connection process. -->

<?php

$conn = new mysqli('localhost','root','','_11_nov','3307');

if($conn)
{
    echo "database connected...";
}

?>