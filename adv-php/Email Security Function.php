<!-- Write a function that sanitizes email input and validates it before sending -->


<?php 

function checkemail($email)
{
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);

    if(filter_var($email,FILTER_SANITIZE_EMAIL)){
        echo "vaild email : $email";
    }
    else{
        echo "invalid email!";
    }
}

checkemail("user@exmaple.com");

?>