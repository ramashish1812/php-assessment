<!-- Create a script that reads from a text file and displays its content on a web page. -->

<?php

$file = "simple.txt";

if(file_exists($file))
{
    $content = file_get_contents($file);
     echo "<pre>$content</pre>";
}
else
{
    echo "file not found";
}

?>