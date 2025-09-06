<!-- Write a PHP script to send a test email to a user using the mail() function. -->

<?php

$to = "user@example.com";                        
$sub = "Test email from PHP";                     
$msg = "This is a test email sent using PHP mail."; 
$header = "From: ahram1807@gmail.com";                  

if (mail($to, $sub, $msg, $header)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed";
}

?>
